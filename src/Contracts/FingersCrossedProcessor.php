<?php

namespace Operador\Contracts;

use League\Pipeline\FingersCrossedProcessor as FingersCrossedProcessorBase;

use Muleta\Contracts\Support\ArrayableTrait;
use Muleta\Traits\Debugger\HasErrors;
use Muleta\Contracts\Output\OutputableTrait;

class FingersCrossedProcessor extends FingersCrossedProcessorBase
{
    use HasErrors, ArrayableTrait, OutputableTrait;
    // public function process($payload, callable ...$stages)
    // {
    //     foreach ($stages as $stage) {
    //         $payload = $stage($payload);
    //     }

    //     return $payload;
    // }
}