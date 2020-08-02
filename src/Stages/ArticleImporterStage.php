<?php

namespace Operador\Stages;

use Operador\Conectors\Pipeline as PipelineComponent;

use Operador\Contracts\Registrator;
use Operador\Contracts\Notificator;
use Operador\Contracts\Stage as StageBase;

class ArticleImporterStage extends StageBase
{
    public function __invoke(/*PipelineComponent */$payload)
    {
        $payload->executeForEachComponent(
            function ($component) {
                Article::create(
                    [
                    'title' => $component->getTitle(),
                    'content' => $component->getContent(),
                    'fonte' => $component->getFonte(),
                    ]
                );
            }
        );
        return $payload;
    }
}
