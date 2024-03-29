<?php
/**
 * Migrando um banco de dados de Banco
 */

namespace Operador\Routines\Database;

use Operador\Actions\Action;
use Operador\Actions\ActionCollection;
use Operador\Components\Worker\Sync\Database\MigrateCollection;

use Fabrica\Models\Infra\Database;
use Fabrica\Models\Infra\DatabaseCollection;

class Migrate extends ActionCollection
{

    /**
     * Avisa se precisa de Alvos Externos ou nao e descreve eles
     */
    public $externalTargetCounts = 2;
    
    /**
     * Avisa se precisa de Alvos Externos ou nao e descreve eles
     */
    public $externalTargetZeroClass = DatabaseCollection::class;
    
    /**
     * Avisa se precisa de Alvos Externos ou nao e descreve eles
     */
    public $externalTargetZeroInstance = false;

    /**
     * Avisa se precisa de Alvos Externos ou nao e descreve eles
     */
    public $externalTargetOneClass = Database::class;
    
    /**
     * Avisa se precisa de Alvos Externos ou nao e descreve eles
     */
    public $externalTargetOneInstance = false;

    public function prepareTargets(DatabaseCollection $target, Database $toMigrate): void
    {
        $this->targetZeroInstance = $target;
        $this->targetOneInstance = $toMigrate;
    }
    
    public function prepareActions(): void
    {
        // // Inclui um Baclup na etapa 0 com alvo 0
        // $this->includeCollection((new Backup), 0, 0);
        // // Inclui um Baclup na etapa 1 com alvo 1
        // $this->includeCollection((new Backup), 1, 1);
    }

}
