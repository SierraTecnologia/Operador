<?php
/**
 * Estatisticas Rodadas Diariamente
 */

namespace Operador\Routines\Database;

use Operador\Actions\Action;
use Operador\Actions\ActionCollection;
use Operador\Components\Worker\Sync\Database\BackupCollection;

use Fabrica\Models\Infra\Database;
use Fabrica\Models\Infra\DatabaseCollection;

class BackupRoutine extends ActionCollection
{

    /**
     * Avisa se precisa de Alvos Externos ou nao e descreve eles
     */
    public $externalTargetCounts = 1;
    
    /**
     * Avisa se precisa de Alvos Externos ou nao e descreve eles
     */
    public $externalTargetZeroClass = DatabaseCollection::class;
    
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

    public function prepareTargets(DatabaseCollection $database): void
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
        $action = Action::getActionByCode('backupCollection');
        $this->newAction($action, $stage, 0);
    }

}
