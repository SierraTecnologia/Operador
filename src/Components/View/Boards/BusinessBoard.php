<?php
/**
 * 
 */

namespace Operador\Components\View\Boards;

use Log;

class BusinessBoard extends Board
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

        ];
    }

    /**
     * @return string[]
     *
     * @psalm-return array{0: InfraBoard::class}
     */
    public function getBoards()
    {
        return [
            InfraBoard::class
        ];
    }
    
    /**
     * @return (GetNewData|SendNewData|mixed)[]
     *
     * @psalm-return array{Editor: mixed, Save: GetNewData, Delete: SendNewData, Send: mixed}
     */
    public function getActions(): array
    {
        return [
            'Editor' => $this->getEditores(),
            'Save' => new GetNewData($this),
            'Delete' => new SendNewData($this),
            'Send' => $this->getIntegrations()
        ];
    }

    /**
     * @return string[]
     *
     * @psalm-return array{0: Post::class}
     */
    public function getComponents(): array
    {
        return [
            Post::class
        ];
    }

    /**
     * @return string[]
     *
     * @psalm-return array{0: TuiImageEditor::class}
     */
    public function getEditores(): array
    {
        return [
            TuiImageEditor::class,
        ];
    }

}
