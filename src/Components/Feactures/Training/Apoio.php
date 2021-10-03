<?php

namespace Operador\Components\Feactures\Training;

class Apoio
{

    /**
     * @return string[]
     *
     * @psalm-return array{0: Integrations\Connectors\Coursera\Coursera::class, 1: Integrations\Connectors\Youtube\Youtube::class}
     */
    public function plataforms(): array
    {
        return [
            Integrations\Connectors\Coursera\Coursera::class,
            Integrations\Connectors\Youtube\Youtube::class,
        ];
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