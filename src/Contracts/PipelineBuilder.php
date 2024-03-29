<?php

namespace Operador\Contracts;

use League\Pipeline\PipelineBuilder as PipelineBuilderBase;
use League\Pipeline\PipelineInterface;
use League\Pipeline\ProcessorInterface;
use League\Pipeline\PipelineBuilderInterface;
use Muleta\Contracts\Support\Arrayable;
use Muleta\Contracts\Support\ArrayableTrait;
use Muleta\Traits\Debugger\HasErrors;
use Muleta\Traits\Coder\GetSetTrait;
use Muleta\Contracts\Output\OutputableTrait;
use Illuminate\Database\Eloquent\Collection;

class PipelineBuilder implements PipelineBuilderInterface
{
    use HasErrors, ArrayableTrait, OutputableTrait;
    /**
     * @var callable[]
     */
    private $stages = [];

    /**
     * @return self
     */
    public function add(callable $stage): PipelineBuilderInterface
    {
        $this->stages[] = $stage;

        return $this;
    }

    public function build(ProcessorInterface $processor = null): PipelineInterface
    {
        return Pipeline::makeWithOutput($this->getOutput(), $processor, ...$this->stages);
    }
}