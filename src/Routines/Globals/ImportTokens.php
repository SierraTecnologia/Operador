<?php
/**
 * Estatisticas Rodadas Diariamente
 */

namespace Finder\Routines\Globals;

use Finder\Routines\Tokens\ImportRoutine;

use Operador\Actions\Action;
use Operador\Actions\ActionCollection;
use Integrations\Models\Token;
use Integrations\Models\TokenAccess;

class ImportTokens extends ActionCollection
{
    /**
     * Avisa se precisa de Alvos Externos ou nao e descreve eles
     */
    public $externalTargetCounts = 0;
    
    public function prepare()
    {
        // Import de Todos os Bancos de Dados
        $tokens = Token::all();
        $this->othersTargets = count($tokens);
        $this->info('Importando '.count($tokens).' tokens');
        
        foreach ($tokens as $token) {
            $importRoutine = ImportRoutine::makeWithOutput($this->output);
            $importRoutine->prepareTargets($token);
            $this->newActionCollection($importRoutine);
        }
        return parent::prepare();
    }

}
