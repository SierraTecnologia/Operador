<?php
/**
 * 
 */

namespace Operador\Routines\Readables;

use Log;
use App\Logic\ComponentsPipeline as PipelineComponent;
use Operador\Routines\ArticlePipeline;
use Operador\Routines\Readables\RrsImporterStage;
use Exception;

class NewsRoutine
{

    /**
     * Se byClass nao for false, retorna todas as ações para qualquer tipo de instancia
     *
     * @return true
     */
    public function run(): bool
    {

        $payload = PipelineComponent(Rrs::all());
        $pipeline = ArticlePipeline::getPipeline();
            
        try {
            $pipeline->process($payload);
        } catch(Exception $e) {
            // Handle the exception.
        }

        return true;
    }

}
