<?php

namespace Operador\Operadors;

use Support\Contracts\Runners\Stage as StageBase;

class AddOneStage extends StageBase
{
    public function __invoke($payload)
    {
        return $payload + 1;
    }
}
