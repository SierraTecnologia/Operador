<?php

namespace Operador\Pipelines\Readables;

use League\Pipeline\Pipeline as PipelineBase;
use SiObjects\Entities\Components\Pipeline as PipelineComponent;

use Operador\Contracts\Registrator;
use Operador\Contracts\Notificator;

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
