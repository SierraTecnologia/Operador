<?php
/**
 * Estatisticas Rodadas Diariamente
 */

namespace Operador\Routines\Tokens;

use Operador\Actions\Action;
use Operador\Actions\ActionCollection;
use Operador\Components\Worker\Sync\Database\ImportCollection;
use Fabrica\Tasks\ImportFromToken;
use Integrations\Models\Token;

class ImportRoutine extends ActionCollection
{

    /**
     * Avisa se precisa de Alvos Externos ou nao e descreve eles
     */
    public $externalTargetCounts = 1;
    
    /**
     * Avisa se precisa de Alvos Externos ou nao e descreve eles
     */
    public $externalTargetZeroClass = Token::class;
    
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

        return parent::execute();
    }

    public function prepareTargets(Token $token): void
    {
        $this->externalTargetZeroInstance = $token;
    }

    public function hasTargets(): bool
    {
        if ($this->externalTargetZeroInstance === false) {
            return false;
        }
        return true;
    }
    
    /**
     * Mudar Essa porra Toda
     *
     * @return void
     */
    public function prepareAction()
    {
        $stage = 0;
        $action = ImportFromToken::returnTask($this->output);
        //Action::getActionByCode('importIntegrationToken');

        $this->newAction($action, $stage, 0);
    }

}
