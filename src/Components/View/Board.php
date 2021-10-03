<?php

namespace Operador\Components\View;

use Log;
use App\Models\User;
use Integrations\Connectors\Instagram\Instagram;
use Integrations\Connectors\Instagram\Facebook;


use Operador\Actions\PublishPost;
use Operador\Actions\SearchFollows;



use Operador\Routines\ForceNewRelations;
use Operador\Routines\GetNewData;
use Operador\Routines\SendNewData;

use SiObjects\Components\Comment;
use SiObjects\Components\Post;
use SiObjects\Components\Profile;
use SiObjects\Components\Relation;

class Board
{
    
    public function executeRoutines(): void
    {
        new ForceNewRelations($this);
        new GetNewData($this);
        new SendNewData($this);
    }
    
    /**
     * CLasses Modulos
     *
     * @return (Facebook|Instagram)[]
     *
     * @psalm-return array{0: Instagram, 1: Facebook}
     */
    public function getIntegrations(): array
    {
        return [
            new Instagram(),
            new Facebook()
        ];
    }
    
    /**
     * @return string[]
     *
     * @psalm-return array{0: SearchFollows::class, 1: PublishPost::class}
     */
    public function getActions(): array
    {
        return [
            SearchFollows::class,
            PublishPost::class,
        ];
    }

    /**
     * @return ((string|string[])[]|string)[]
     *
     * @psalm-return array{0: Profile::class, 1: array{0: Relation::class, 1: Post::class, 2: array{0: Comment::class}}}
     */
    public function getComponents(): array
    {
        return [
            Profile::class,
            [
                Relation::class,
                Post::class,
                [
                    Comment::class,
                ]
            ],
        ];
    }

    /**
     * @return string[]
     *
     * @psalm-return array{0: SearchFollows::class, 1: PublishPost::class}
     */
    public function getComponentsForFather(): array
    {
        return [
            SearchFollows::class,
            PublishPost::class,
        ];
    }

    
    /**
     * CLasses Operações
     *
     * @return true
     */
    public function executeForEachIntegration($functionToExecute): bool
    {
        $integrations = $this->getIntegrations();
        foreach ( $integrations as $integration ) {
            $functionToExecute($integration);
        }
        return true;
    }

    /**
     * @return true
     */
    public function executeForEachComponent($functionToExecute, $parent = false): bool
    {
        $self = $this;
        $components = $this->getComponentsForFather($parent);
        foreach ( $components as $component ) {
            $functionToExecute(
                $component,
                function ($result) use ($self, $functionToExecute) {
                    $self->executeForEachComponent($functionToExecute, $result);
                }
            );
        }
        return true;
    }

}
