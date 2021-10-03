<?php

namespace Operador\Components\Feactures\Training\Curriculo;


class Logica
{
    /**
     * @return string[][]
     *
     * @psalm-return array{0: array{0: 'Isolamento as partes ignorando camadas externas'}, 1: array{0: 'Isolamento'}}
     */
    public function conceitos(): array
    {
        return [
            [
                'Isolamento as partes ignorando camadas externas',
            ],
            [
                'Isolamento',
            ],
        ];
    }
}
