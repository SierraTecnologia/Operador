<?php

namespace Operador\Operadors;

use Operador\Contracts\Stage as StageBase;

class AddOneStage extends StageBase
{
    public function __invoke($payload)
    {
        return $payload + 1;
    }
}
