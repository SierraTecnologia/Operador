<?php

namespace Operador\Events;

use App\Operador;
use Illuminate\Queue\SerializesModels;

class OperadorShipped
{
    use SerializesModels;

    public $operador;

    /**
     * Create a new event instance.
     *
     * @param  \App\Operador  $operador
     * @return void
     */
    public function __construct(Operador $operador)
    {
        $this->operador = $operador;
    }
}