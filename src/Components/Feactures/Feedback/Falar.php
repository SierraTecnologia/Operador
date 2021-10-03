<?php

namespace Operador\Components\Feactures\Feedback;

class Falar
{

    /**
     * @return string
     *
     * @psalm-return Fisico::class
     */
    public function getModel(): string
    {
        return Fisico::class;
    }

    /**
     * @return array
     *
     * @psalm-return array<empty, empty>
     */
    public function create(): array
    {
        return [
            
        ];
    }

    
}