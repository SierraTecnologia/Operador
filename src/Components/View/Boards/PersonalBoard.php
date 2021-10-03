<?php
/**
 * 
 */

namespace Operador\Components\View\Boards;

use Log;

class PersonalBoard extends Board
{

    protected function dashboard(): void
    {

    }

    /**
     * @return array
     *
     * @psalm-return array<empty, empty>
     */
    protected function getInteresses(): array
    {
        $routines = [
            // Capturar Noticias via Rss

            // Capturar Eventos

            // Capturar Financeiro

            // Capturar Oportunidade de Trabalho

        ];

        return $routines;
    }

    /**
     * @return string[]
     *
     * @psalm-return array{0: BusinessBoard::class}
     */
    public function getBoards()
    {
        return [
            BusinessBoard::class
        ];
    }

}
