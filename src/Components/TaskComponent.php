<?php

/**
 * This file is part of Gitonomy.
 *
 * (c) Alexandre Salomé <alexandre.salome@gmail.com>
 * (c) Julien DIDIER <genzo.wm@gmail.com>
 *
 * This source file is subject to the GPL license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Operador\Components;

use Finder\Actions\Action;
use Support\Contracts\Output\OutputableTrait;
use Log;
use Operador\Contracts\ActionInterface;
use Operador\Contracts\Action as ActionBase;

class TaskComponent extends ActionBase
{
    use OutputableTrait;


    protected $allActions = [];

    public $cod = false;

    public $classAfetada = false;

    public $classAExecutar = false;

    public $type = false;

    /**
     * Ações para Investigar ou Explorar algo
     * Spider, Aranha, ou Explorer, Explorador
     */
    const SPIDER = 1;

    /**
     * Ações de Rotinas - Periodicos
     * Ex: Backup, Ping nos Servidores
     */
    const ROUTINE = 2;

    /**
     * Ações que são emitidas como eventos engatilhados após determinadas ações em cima de Repositórios
     */
    const HOOK = 3;

    /**
     * Ações de importar conteudos dos tokens, jira, repositórios, etc.. 
     * Ou enviar informações do Boss para Esses Produtos. Ex: Workflow do jira, ou novos tickets!
     */
    const SYNC = 4;

    /**
     * Verifica latencia e serviços se estão tudo em Order e Funcionando
     */
    const LIFE = 5;

    public function __construct($cod, $classAfetada, $classAExecutar, $type)
    {
        $this->cod = $cod;
        $this->classAfetada = $classAfetada;
        $this->classAExecutar = $classAExecutar;
        $this->type = $type;
    }

    public function getClassWithParams($instance)
    {
        $classAExecutar = '\\'.$this->classAExecutar;
        if (!$instance instanceof $this->classAfetada) {
            Log::channel('sitec-finder')->notice('Não é instancia de '. $this->classAfetada.'!');
            return abort(500, 'Não é instancia de!');
        }
        return new $classAExecutar($instance);
    }

    /**
     * FUncoes para os Controllers Internos
     */
    public static function getModels()
    {
        $actions = self::loadActions();
        $models = [];
        foreach ($actions as $action)
        {
            if (!in_array($action->classAfetada, $models)) {
                $models[] = $action->classAfetada;
            }
        }
        return $models;
    }

    

    /**
     * FUncoes para os Controllers Internos
     */
    public static function getOnlyActionsForModel($model)
    {
        $actions = self::loadActions();
        $onlyModelActions = [];
        foreach ($actions as $action)
        {
            if ($model == $action->classAfetada) {
                $onlyModelActions[] = $action;
            }
        }
        return $onlyModelActions;
    }


    /**
     * Funções GErais
     */
    protected static function loadActions()
    {
        return self::getSyncs(self::getHooks(self::getRoutines(self::getSpiders())));
    }

    public static function getActionByCode($cod)
    {
        $actions = self::loadActions();
        foreach($actions as $action) {
            if($action->cod == $cod) {
                return $action;
            }
        }
        return false;
    }
    
    protected static function getSpiders($actions = [])
    {
        /**
         * Scaneia paginas de determinado Website
         */
        $actions[] = self::insertAction(
            'scanDomain',
            \Fabrica\Models\Infra\Domain::class, // Ou Url
            \Finder\Components\Worker\Explorer\Spider::class,
            self::SPIDER
        );

        /**
         * Scaneia paginas de determinado Website
         */
        $actions[] = self::insertAction(
            'whoisDomain',
            \Fabrica\Models\Infra\Domain::class, // Ou Url
            \Finder\Components\Worker\Explorer\Whois::class,
            self::SPIDER
        );

        return $actions;
    }
    
    protected static function getRoutines($actions = [])
    {
        /**
         * Backup dos 
         */
        $actions[] = self::insertAction(
            'backupDatabase',
            \Fabrica\Models\Infra\DatabaseCollection::class,
            \Fabrica\Tasks\BackupCollection::class,
            self::ROUTINE
        );

        /**
         * Procura por arquivos de Log dentro das Maquinas
         */
        $actions[] = self::insertAction(
            'searchLog',
            \Fabrica\Models\Infra\Computer::class,
            \Finder\Components\Worker\Logging\Logging::class,
            self::ROUTINE
        );

        return $actions;
    }

    protected static function getHooks($actions = [])
    {

        /**
         * Analisa a qualidade de código nos Projects Atuais
         */
        $actions[] = self::insertAction(
            'analyseComit',
            \Fabrica\Models\Code\Commit::class,
            \Finder\Components\Worker\Analyser\Analyser::class,
            self::HOOK
        );

        /**
         * Atualiza as Maquinas de Staging e Produção
         */
        $actions[] = self::insertAction(
            'deployCommit',
            \Fabrica\Models\Code\Commit::class,
            \Finder\Components\Worker\Deploy\Deploy::class,
            self::HOOK
        );

        return $actions;
    }


    protected static function getSyncs($actions = [])
    {

        // @todo Refatorado
        $actions[] = self::insertAction(
            'importIntegrationToken',
            \Integrations\Models\Token::class,
            \Fabrica\Tasks\ImportFromToken::class,
            self::ROUTINE
        );

        /**
         * Analisa a qualidade de código nos Projects Atuais
         */
        $actions[] = self::insertAction(
            'syncProject',
            \Fabrica\Models\Code\Project::class,
            \Finder\Components\Worker\Sync\Project::class,
            self::ROUTINE
        );

        return $actions;

    }

    protected static function insertAction($cod, $classAfetada, $classAExecutar, $type)
    {
        $newAction = new self($cod, $classAfetada, $classAExecutar, $type);
        return $newAction;
    }

    public static function returnTask(): TaskComponent
    {
        return new self(
            static::CODE,
            static::MODEL,
            static::class,
            static::TYPE,
        );
    }

    /**
     * Se byClass nao for false, retorna todas as ações para qualquer tipo de instancia
     */
    public function getActions($byClass = false)
    {
        if (empty($this->allActions)) {
            $this->allActions = self::loadActions();
        }
        return $this->allActions;
    }

}
