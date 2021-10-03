<?php

namespace Operador\Components\Worker\Reports;


/**
 * Report Class
 *
 * @class   Report
 * @package life
 */
class Report
{

    protected $url = false;
    
    public function __construct()
    {
        
    }

    /**
     * O func_params padrão é null. null nao faz nada. É o total, inclui todos os filtros
     *
     * Cada o func_params seja preenchido, então ele se diferenciará dos outros registros
     *
     * @return string[]
     *
     * @psalm-return array{filliable_id: '', filliable_type: '', periodo: '', result: '', func: '', func_params: ''}
     */
    public function colunas(): array
    {
        return [
            'filliable_id' => '', // Identificador Opcional
            'filliable_type' => '', // RElatorio gerado
            'periodo' => '', // Pode ser por dia, por hora, por minuto, etc... 
            'result' => '', // resultado
            'func' => '',  // Função que é chamada para gerar o relatório
            'func_params' => ''  // Opcional
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
