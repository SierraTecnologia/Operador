<?php

namespace Operador\Actions\Instagram;

use Illuminate\Support\Facades\Facade;
use Telefonica\Models\Digital\Account;

class GetInbox extends Instagram
{

    public function executeForEach($target)
    {
        // sleep(2); // Delay to mimic user
        // // $followers = [];
        // // $account = $this->executor->getAccount($target);
        // sleep(1);
// $this->executor->pending();
$inbox = $this->executor->getInbox();


// $itens = $inbox['itens'];
$new_stories = $inbox['new_stories'];
$old_stories = $inbox['old_stories'];
$this->getStories($new_stories);
$this->getStories($old_stories);

$counts = $inbox['counts'];
$last_checked = $inbox['last_checked'];
$priority_stories = $inbox['priority_stories'];

// $this->executor->seenInbox();
        dd(

            // $itens,
            count($new_stories),
            count($old_stories),


            $counts,
            $last_checked ,
            $priority_stories
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

    /**
     * "counts" => array:13 [
    "new_posts" => 0
    "shopping_notification" => 0
    "relationships" => 0
    "close_friend_activities" => 0
    "fundraiser" => 0
    "campaign_notification" => 0
    "activity_feed_dot_badge" => 0
    "usertags" => 0
    "comment_likes" => 0
    "likes" => 2
    "comments" => 0
    "photos_of_you" => 0
    "requests" => 0
  ]
last_checked" => 1660806405.9865
  "priority_stories"
     */
    public function countsGet($count) {
        dd(
            $count
        );
    }
    // new_stories =  "type" => 1
    // "story_type" => 60
    // "args" => array:15 [
    //   "text" => "ricardorsierra liked your photo."
    //   "links" => array:1 [ …1]
    //   "users" => array:1 [ …1]
    //   "media_destination" => "media?id=2894845802032896851_18021751522"
    //   "destination" => "media?id=2894845802032896851_18021751522"
    //   "profile_id" => 500550176
    //   "profile_image" => "https://instagram.fstu1-1.fna.fbcdn.net/v/t51.2885-19/279012508_119454270712806_8621865750
    // 704364831_n.jpg?stp=dst-jpg_s150x150&_nc_ht=instagram.fstu1-1.fna.fbcdn.net&_nc_cat=106&_nc_ohc=7-7t9n0WRfQAX9YpGDd&ed
    // m=AL4D0a4BAAAA&ccb=7-5&oh=00_AT_vsBUdlpU9vjdTxaurJuREXP5-tRhQNBuuqdjuFpeSmQ&oe=63043C52&_nc_sid=712cc3"
    //   "media" => array:1 [ …1]
    //   "images" => array:1 [ …1]
    //   "timestamp" => 1660824648.1463
    //   "tuuid" => "cb5fe688-1eee-11ed-8080-808080808080"
    //   "af_candidate_id" => 10670689
    //   "profile_name" => "ricardorsierra"
    //   "latest_reel_media" => 0
    //   "latest_reel_seen_time" => 0
    // ]
    public function getStories(array $storys) {
        foreach ($storys as $story) {
                $this->getStory($story);
        }
    }
    public function getStory(array $story) {

        $type = $story['type'];
        $story_type = $story['story_type'];
        $args =  $story['args'];
        // $args['text'];
        if (isset($args['users']) && !empty($args['users'])) {
            $this->getUsers($args['users']);
        }
    }
    public function getUsers(array $users) {
        foreach ($users as $user) {
                $this->registerUserByArray($user);
        }
    }
}
// "counts" => []
// old_stories" => array:98 [
//     0 => array:5 [
//       "type" => 1
//       "story_type" => 60
//       "args" => array:15 [
//         "text" => "_joao_noronha_ liked your post."
//         "links" => array:1 [ …1]
//         "users" => array:1 [ …1]
//         "media_destination" => "media?id=2906641389124641855_18021751522"
//         "destination" => "media?id=2906641389124641855_18021751522"
//         "profile_id" => 7803496907
//         "profile_image" => "https://instagram.fstu1-1.fna.fbcdn.net/v/t51.2885-19/295846561_169551448903936_9356614669
// 2566051_n.jpg?stp=dst-jpg_s150x150&_nc_ht=instagram.fstu1-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=URj532dRWbwAX_dizYc&edm=
// AL4D0a4BAAAA&ccb=7-5&oh=00_AT-8mkRBLCIke3lJsklbbZIn35mccXo62JufNzFcNZukQQ&oe=63054A20&_nc_sid=712cc3"
//         "media" => array:1 [ …1]
//         "images" => array:1 [ …1]
//         "timestamp" => 1660799086.0828
//         "tuuid" => "47328edc-1eb3-11ed-8080-808080808080"
//         "af_candidate_id" => 6273127
//         "profile_name" => "_joao_noronha_"
//         "latest_reel_media" => 0
//         "latest_reel_seen_time" => 0
//       ]
//       "counts" => []
//       "pk" => "ub396XLpWUBy75g9sUd58OgJyFk="
//     ]








// public function data()
// {
// }
// }
// items[
// "user" => array:10 [ …10]
// "algorithm" => "unknown"
// "social_context" => "Followed by rafael_couto.g + 1 more"
// "icon" => ""
// "caption" => ""
// "media_ids" => []
// "thumbnail_urls" => []
// "large_urls" => []
// "media_infos" => []
// "value" => 0.00101079
// "followed_by" => false
// "is_new_suggestion" => false
// "uuid" => "18021751522|1660816057"
// ]
