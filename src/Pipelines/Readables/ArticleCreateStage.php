<?php

namespace Operador\Pipelines\Readables;

use League\Pipeline\Pipeline as PipelineBase;
use SiObjects\Entitys\Components\Pipeline as PipelineComponent;

use Finder\Routines\Contracts\Registrator;
use Finder\Routines\Contracts\Notificator;

use Operador\Contracts\Stage;
use Operador\Contracts\StageInterface;

class ArticleCreateStage extends Stage implements StageInterface
{
    public function __invoke(/*PipelineComponent*/ $payload)
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
