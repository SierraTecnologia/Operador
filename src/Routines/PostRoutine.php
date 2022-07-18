<?php

namespace Operador\Routines;

use SiObjects\Components\Post as PostComponent;

use App\Pipelines\PostCreator;

class PostRoutine
{

    public function run(): void
    {
        $result = (PostCreator::getPipelines())->process(new PostComponent());
        dd('PostRoutine', $result);



    }

}
