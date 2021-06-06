<?php

namespace Operador\Contracts;

use League\Pipeline\Pipeline as PipelineBase;
use League\Pipeline\ProcessorInterface;
use League\Pipeline\FingersCrossedProcessor;
use Muleta\Contracts\Support\Arrayable;
use Muleta\Contracts\Support\ArrayableTrait;
use Muleta\Traits\Debugger\HasErrors;
use Muleta\Traits\Coder\GetSetTrait;
use Muleta\Contracts\Output\OutputableTrait;
use Illuminate\Database\Eloquent\Collection;

class Pipeline extends PipelineBase
{
    use HasErrors, ArrayableTrait, OutputableTrait;
    // /**
    //  * @var callable[]
    //  */
    // private $stages = [];

    // /**
    //  * @var ProcessorInterface
    //  */
    // private $processor;

    // public function __construct(ProcessorInterface $processor = null, callable ...$stages)
    // {
    //     $this->processor = $processor ?? new FingersCrossedProcessor;
    //     $this->stages = $stages;
    // }

    // public function pipe(callable $stage): PipelineInterface
    // {
    //     $pipeline = clone $this;
    //     $pipeline->stages[] = $stage;

    //     return $pipeline;
    // }

    // public function process($payload)
    // {
    //     return $this->processor->process($payload, ...$this->stages);
    // }

    // public function __invoke($payload)
    // {
    //     return $this->process($payload);
    // }
}