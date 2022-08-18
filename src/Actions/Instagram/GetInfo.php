<?php

namespace Operador\Actions\Instagram;

use Illuminate\Support\Facades\Facade;
use Telefonica\Models\Digital\Account;

class GetInfo extends Instagram
{

    public function executeForEach($target)
    {

        $account = $this->executor->getAccount($target);
    }

    public static function getFromMedia() {

    }
}
