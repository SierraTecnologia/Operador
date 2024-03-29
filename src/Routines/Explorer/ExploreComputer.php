<?php
/**
 * Estatisticas Rodadas Diariamente
 */

namespace Operador\Routines\Explorer;

use Operador\Actions\Action;
use Operador\Actions\ActionCollection;
use Operador\Components\Worker\Sync\Database\BackupCollection;

use Fabrica\Models\Infra\Database;
use Fabrica\Models\Infra\Computer;

class ExploreComputer extends ActionCollection
{

    /**
     * Avisa se precisa de Alvos Externos ou nao e descreve eles
     */
    public $externalTargetCounts = 1;
    
    /**
     * Avisa se precisa de Alvos Externos ou nao e descreve eles
     */
    public $externalTargetZeroClass = Computer::class;
    
    /**
     * Avisa se precisa de Alvos Externos ou nao e descreve eles
     */
    public $externalTargetZeroInstance = false;

    public function prepare()
    {
        if ($this->isPrepared) {
            return true;
        }

        $this->prepareAction();

        return parent::prepare();
    }

    public function execute()
    {
        if (!$this->hasTargets()) {
            return false;
        }

        // @todo
        $computers = Computer::all();
        foreach ($computers as $computer) {
            $ssh = $computer->connect();
        }

        return parent::execute();
    }

    public function prepareTargets(Computer $database): void
    {
        $externalTargetZeroClass = $database;
    }

    public function hasTargets(): bool
    {
        if ($this->externalTargetZeroInstance === false) {
            return false;
        }
        return true;
    }
    
    public function prepareAction(): void
    {
        $stage = 0;
        $action = Action::getActionByCode('');
        $this->newAction($action, $stage, 0);
    }

}
