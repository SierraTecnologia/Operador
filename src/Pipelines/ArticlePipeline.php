<?php
/**
 * 
 */

namespace Operador\Pipelines;

use League\Pipeline\Pipeline as PipelineBase;
use Operador\Contracts\StageInterface;
use League\Pipeline\PipelineBuilder;

use Log;

class ArticlePipeline extends Pipeline
{
    public function getPipeline()
    {
        $pipeline = (new self())
            ->pipe(new Readables\ArticleCreateStage)
            ->pipe(new Readables\ArticleImporterStage)
            ->pipe([new RegistratorLog, 'register'])
            ->pipe([new NotificationSms, 'notification'])
            ->pipe([new NotificationEmail, 'notification']);

        return $pipeline->build();
    }

}
