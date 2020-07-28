<?php

namespace Operador\Readables;

use League\Pipeline\Pipeline as PipelineBase;
use League\Pipeline\StageInterface;
use Operador\Conectors\Pipeline as PipelineComponent;

use Operador\Routines\Contracts\Registrator;
use Operador\Routines\Contracts\Notificator;
use Support\Contracts\Runners\Stage as StageBase;

class ArticleCreateStage implements StageInterface
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
