<?php
namespace Operador\Stages;

use Log;
use App\Models\User;
use Operador\Spider\Integrations\Instagram\Instagram;
use Operador\Spider\Integrations\Instagram\Facebook;


use Operador\PublishPost;
use Operador\SearchFollows;



use Operador\Routines\ForceNewRelations;
use Operador\Routines\GetNewData;
use Operador\Routines\SendNewData;

use Operador\Components\Comment;
use Operador\Components\Post;
use Operador\Components\Profile;
use Operador\Components\Relation;


class RegistratorLog
{
    public function register(Registrator $something)
    {
        echo 'registration log ' . $something . '<br>';
        return $something;
    }
}