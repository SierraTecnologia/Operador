<?php

namespace Operador\Operadors;

use Log;
use App\Models\User;
use Support\Contracts\Runners\PipelineBuilder as PipelineBuilderBase;
use App\Pipelines\Contracts\Registrator;
use App\Pipelines\Contracts\Notificator;

class PostCreator extends PipelineBuilderBase
{
    public static function getPipelines()
    {
        return (new self())
            ->pipe([new RegistratorLog, 'register'])
            ->pipe([new NotificationSms, 'notification'])
            ->pipe([new NotificationEmail, 'notification']);
    }
}