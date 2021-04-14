<?php
/**
 * 
 */

namespace Finder\Routines\Readables;

use Log;
use App\Logic\ComponentsPipeline as PipelineComponent;
use Finder\Routines\ArticlePipeline;
use Finder\Routines\Readables\RrsImporterStage;
use Exception;

class NewsRoutine
{

    /**
     * Se byClass nao for false, retorna todas as ações para qualquer tipo de instancia
     */
    public function run()
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