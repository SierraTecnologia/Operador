<?php

namespace Operador\Pipelines;

use Operador\Contracts\Stage;
use Operador\Contracts\StageInterface;

class TimesTwoStage extends Stage implements StageInterface
{
    public function __invoke($payload)
    {
        return $payload * 2;
    }
}
