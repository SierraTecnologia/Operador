<?php
namespace Operador\Pipelines;

use Log;
use App\Models\User;
use Integrations\Connectors\Instagram\Instagram;
use Integrations\Connectors\Instagram\Facebook;


use Operador\Actions\PublishPost;
use Operador\Actions\SearchFollows;



use Finder\Routines\ForceNewRelations;
use Finder\Routines\GetNewData;
use Finder\Routines\SendNewData;

use SiObjects\Components\Comment;
use SiObjects\Components\Post;
use SiObjects\Components\Profile;
use SiObjects\Components\Relation;

use Operador\Contracts\Registrator;

class RegistratorLog
{
    public function register(Registrator $something)
    {
        echo 'registration log ' . $something . '<br>';
        return $something;
    }
}