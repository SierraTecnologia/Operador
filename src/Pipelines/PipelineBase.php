<?php
/**
 * 
 */

namespace Operador\Pipelines;

use Log;

use League\Pipeline\Pipeline as PipelineBase;
use Operador\Contracts\StageInterface;
use League\Pipeline\PipelineBuilder;

use Finder\Routines\Contracts\Registrator;
use Finder\Routines\Contracts\Notificator;

class PipelineBase extends PipelineBuilder
{

    /**
     * Se byClass nao for false, retorna todas as ações para qualquer tipo de instancia
     */
    public function getPipeline()
    {
        $pipeline = (new PipelineBase)
            ->pipe(new TimesTwoStage)
            ->pipe(new AddOneStage);

        // Returns 21
        $pipeline->process(10);
        return $pipeline;
    }

}
