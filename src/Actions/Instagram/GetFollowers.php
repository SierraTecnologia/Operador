<?php

namespace Operador\Actions\Instagram;

use Illuminate\Support\Facades\Facade;
use Telefonica\Models\Digital\Account;

class GetFollowers extends Instagram
{

    public function executeForEach($target)
    {
        sleep(2); // Delay to mimic user
        $followers = [];
        $account = $this->executor->getAccount($target);
        sleep(1);
        // dd(
        //         $account->getFullName(),
        //     $account->getFollowsCount(),
        // $account->getFollowedByCount(),
        //     $account->getMediaCount()
        // );
        $followers = $this->executor->getFollowers($account->getId(), 1000, 100, true); // Get 1000 followers of 'kevin', 100 a time with random delay between requests

          dd(
            $follower
          );
        echo '<pre>' . json_encode($followers, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '</pre>';

        $this->account->addInfo('full_name', $media->getFullName());
        $this->account->addStat('follows', $media->getFollowsCount());
        $this->account->addStat('followeds', $media->getFollowedByCount());
        $this->account->addStat('medias', $media->getMediaCount());


        if (!$accountModel = Account::where(
            [
            'username' => $target,
            'integration_id' => \Integrations\Connectors\Instagram\Instagram::$ID,
            ]
        )->first()
        ) {
            $accountModel = Account::create(
                [
                'username' => $target,
                'integration_id' => \Integrations\Connectors\Instagram\Instagram::$ID,
                ]
            );
        }
        $this->account->relations()->attach($accountModel, ['relation_type' => 'followers']);
    }
}
