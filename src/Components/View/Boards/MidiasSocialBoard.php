<?php

namespace Operador\Components\View\Boards;

use Log;
use App\Models\User;
use Integrations\Connectors\Instagram\Instagram;
use Integrations\Connectors\Instagram\Facebook;


use Operador\Actions\PublishPost;
use Operador\Actions\SearchFollows;


use App\Editores\TuiImageEditor;



use Operador\Routines\ForceNewRelations;
use Operador\Routines\GetNewData;
use Operador\Routines\SendNewData;

use App\Board;
use SiObjects\Components\Comment;
use SiObjects\Components\Post;
use SiObjects\Components\Profile;
use SiObjects\Components\Relation;

class MidiasSocialBoard extends Board
{
    
    public function getActions()
    {
        return [
            'Editor' => $this->getEditores(),
            'Save' => new GetNewData($this),
            'Delete' => new SendNewData($this),
            'Send' => $this->getIntegrations()
        ];
    }

    public function getComponents()
    {
        return [
            Post::class
        ];
    }

    /**
     * 
     */
    
    public function getEditores()
    {
        return [
            TuiImageEditor::class,
        ];
    }

}
