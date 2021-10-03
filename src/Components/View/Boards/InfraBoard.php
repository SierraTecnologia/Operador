<?php
/**
 * 
 */

namespace Operador\Components\View\Boards;

use Log;

class InfraBoard extends Board
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
        return [
            // Status dos Servidores
        ];
    }

    /**
     * @return array
     *
     * @psalm-return array<empty, empty>
     */
    protected function getHooks()
    {
        return [
            // Status dos Servidores
        ];
    }

    /**
     * Se byClass nao for false, retorna todas as ações para qualquer tipo de instancia
     *
     * @return string[]
     *
     * @psalm-return array{0: \SiObjects\Components::class}
     */
    public function getTools(): array
    {
        return [
            \SiObjects\Components::class,
        ];
    }

}
