<?php

namespace Operador\Contracts;

use League\Pipeline\StageInterface;

use Muleta\Contracts\Support\Arrayable;
use Muleta\Contracts\Support\ArrayableTrait;
use Muleta\Traits\Debugger\HasErrors;
use Muleta\Traits\Coder\GetSetTrait;
use Muleta\Contracts\Output\OutputableTrait;
use Illuminate\Database\Eloquent\Collection;

class Stage// implements StageInterface
{
    use HasErrors, ArrayableTrait, OutputableTrait;

    
    public function attributes()
    {
        return [
            Attributes\Time::class(),
            Attributes\Target::class(),
        ];
    }
}