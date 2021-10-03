<?php

namespace Operador\Components\Feactures\Training\Curriculo;


class Mercado
{
    /**
     * @return string[][]
     *
     * @psalm-return array{0: array{0: 'Ação Humana'}, 1: array{0: 'Efeito Borboleta'}, 2: array{0: 'Teoria dos Jogos'}}
     */
    public function conceitos(): array
    {
        return [
            [
                'Ação Humana',
            ],
            [
                'Efeito Borboleta',
            ],
            [
                'Teoria dos Jogos',
            ],
        ];
    }
}
