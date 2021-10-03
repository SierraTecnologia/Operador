<?php

namespace Operador\Components\Worker\Reports;

/**
 * CommitReport Class
 *
 * @class   CommitReport
 * @package life
 */
class CommitReport
{

    protected $url = false;
    
    public function __construct()
    {
        
    }
    
    /**
     * @return string[]
     *
     * @psalm-return array{by_author: ''}
     */
    public function filters(): array
    {
        return [
            'by_author' => '',
        ];
    }

    /**
     * O func_params padrão é null. null nao faz nada. É o total, inclui todos os filtros
     *
     * Cada o func_params seja preenchido, então ele se diferenciará dos outros registros
     *
     * @return void
     */
    public function criarRelatorio(): void
    {
        Commit::all();

        // @todo Fazer
        $commitsDoDia = [

        ];
    }

    /**
     * Exemplo
     */



     /**
      *  Relatório de Commits por Dia
      *   filliable_type = Commits
      *   periodo = 
      */
}
