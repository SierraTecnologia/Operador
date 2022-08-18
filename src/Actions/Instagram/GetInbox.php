<?php

namespace Operador\Actions\Instagram;

use Illuminate\Support\Facades\Facade;
use Telefonica\Models\Digital\Account;

class GetInbox extends Instagram
{

    public function executeForEach($target)
    {
        sleep(2); // Delay to mimic user
        $followers = [];
        $account = $this->executor->getAccount($target);
        sleep(1);

        dd(
$instagram->pending(),
$inbox = $instagram->getInbox(),
$instagram->seenInbox(),

    $inbox
);
        // if (!$accountModel = Account::where(
        //     [
        //     'username' => $target,
        //     'integration_id' => \Integrations\Connectors\Instagram\Instagram::$ID,
        //     ]
        // )->first()
        // ) {
        //     $accountModel = Account::create(
        //         [
        //         'username' => $target,
        //         'integration_id' => \Integrations\Connectors\Instagram\Instagram::$ID,
        //         ]
        //     );
        // }
        // $this->account->relations()->attach($accountModel, ['relation_type' => 'followers']);
    }
}
