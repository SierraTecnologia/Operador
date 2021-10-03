<?php

namespace Operador\Components\Feactures\Training\Curriculo;


class Ciencia
{

    public function description(): string
    {
        return 'Se parte do pressuposto que não se sabe nada, oposto a fé, que parte do pressuposto que ja se sabe de tudo';
    }
    
    /**
     * @return string[][]
     *
     * @psalm-return array{0: array{0: 'Fail Fast'}, 1: array{0: 'Minimo Produto Viavel'}, 2: array{0: 'Modelo Spotify'}}
     */
    public function conceitos(): array
    {
        return [
            [
                'Fail Fast',
            ],
            [
                'Minimo Produto Viavel',
            ],
            [
                'Modelo Spotify',
            ],
        ];
    }
}