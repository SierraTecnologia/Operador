<?php
/**
 * Procura trampos
 * 
 * Usuários Homens sao mais propensos a mulheres que lhe deem abertura ! 
 * 
 * Objetivo em ordem:
 * - prcurar homens que curtem mulheres
 * - Seguir alvo !
 */

namespace Operador\Actions;

use Log;
use App\Models\User;

class SearchFollows
{
    
    public function __construct()
    {
        
    }

    public function rotine()
    {
        return $this->cleanFailedTargets();
    }
    
    public function cleanFailedTargets(): void
    {
        //@todo Busca alvos que nao seguiram de volta e para de seguir e coloca como naoFuncionou !
    }

    public function run()
    {
        return $this->nextTarget();
    }

    public function nextTarget()
    {

        // @todo Busca proximo homem!

        // 

        return $this->nextTarget();
    }

    /**
     * Verifica se já foi alvo dessa ação!
     *
     * @return void
     */
    public function isRepeat($user): void
    {

    }

    /**
     * Verifica se já foi alvo dessa ação!
     *
     * @return void
     */
    public function init($user): void
    {

    }

}
