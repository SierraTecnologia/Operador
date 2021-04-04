<?php
/**
 * Estatisticas Rodadas Diariamente
 */

namespace Finder\Routines\Globals;

use Finder\Routines\Database\BackupRoutine;

use Operador\Actions\Action;
use Operador\Actions\ActionCollection;
use Operador\Components\Worker\Sync\Database\BackupCollection;

use Fabrica\Models\Infra\Database;
use Fabrica\Models\Infra\DatabaseCollection;

class BackupAll extends ActionCollection
{

    /**
     * Avisa se precisa de Alvos Externos ou nao e descreve eles
     */
    public $externalTargetCounts = 0;
    
    public function prepare()
    {
        // Backup de Todos os Bancos de Dados
        $databaseCollections = DatabaseCollection::all();
        $this->othersTargets = count($databaseCollections);
        foreach ($databaseCollections as $databaseCollection) {
            $backupRoutine = new BackupRoutine();
            $backupRoutine->prepareTargets($databaseCollection);
            $this->newAction($backupRoutine);
        }
        return parent::prepare();
    }

}
