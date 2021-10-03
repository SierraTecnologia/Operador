<?php

namespace Operador\Components\Feactures\Training\Curriculo;


class Historia
{

    public function description(): string
    {
        return 'Conceitos Histórico e a forma questionadora de analisar historias, noticias, contas. Podendo incluir graficos e outros dados empiricos';
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