<?php

namespace Operador\Components\Feactures\Assistent\About;

class DescrevendoOrganizacao
{

    /**
     * @return string[]
     *
     * @psalm-return array{0: Person::class}
     */
    public function alvos(): array
    {
        return [
            Person::class,
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