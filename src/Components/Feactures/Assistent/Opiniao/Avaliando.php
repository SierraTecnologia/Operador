<?php

namespace Operador\Components\Feactures\Assistent\Opiniao;

class Avaliando
{

    /**
     * @return string[]
     *
     * @psalm-return array{0: Person::class}
     */
    public function agents(): array
    {
        return [
            Person::class,
        ];
    }

    /**
     * @return string[]
     *
     * @psalm-return array{0: Video::class}
     */
    public function targets(): array
    {
        return [
            Video::class,
        ];
    }

    /**
     * @return array
     *
     * @psalm-return array<empty, empty>
     */
    public function completeFields(): array
    {
        // Proprio Albo
        return [
            
        ];
    }

    public function moreProfile(): void
    {
        // Gostos

        // Busca
    }


    public function moreInfo(): void
    {
        // Relacionamentos

        // Trabalhos

        // Cursos
    }

    
}