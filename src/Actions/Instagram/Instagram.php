<?php

namespace Operador\Actions\Instagram;

use Illuminate\Support\Facades\Facade;
use Phpfastcache\Helper\Psr16Adapter;
use Integrations\Connectors\Connector;
use  Telefonica\Models\Digital\Account;
use Telefonica\Services\SocialService;
use  Telefonica\Models\Digital\Password;

// @todo
// "HandlerMuleta"
// InstagramScraper\Exception\InstagramAuthException^ {#1401
//   #responseBody: ""
//   #message: "$twoStepVerificator must be an instance of TwoStepVerificationInterface."
//   #code: 200
//   #file: "./vendor/raiym/instagram-php-scraper/src/InstagramScraper/Instagram.php"
//   #line: 2318
//   trace: {
//     ./vendor/raiym/instagram-php-scraper/src/InstagramScraper/Instagram.php:2318 { …}
//     ./vendor/raiym/instagram-php-scraper/src/InstagramScraper/Instagram.php:2194 { …}
//     /sierra/Dev/Libs/Operador/src/Actions/Instagram/Instagram.php:36 {
//       Operador\Actions\Instagram\Instagram->__construct($instagram, $cache = false)^
//       › // dd($this->executor);
//       › $this->executor->login();
//       › // $this->executor =  new \InstagramScraper\Instagram(new \GuzzleHttp\Client());
//     }
//     /sierra/Dev/Libs/Finder/src/Console/Commands/Spider/InstagramGetAll.php:42 { …}
//     ./vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php:36 { …}
//     ./vendor/laravel/framework/src/Illuminate/Container/Util.php:40 { …}
//     ./vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php:93 { …}
//     ./vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php:37 { …}
//     ./vendor/laravel/framework/src/Illuminate/Container/Container.php:653 { …}
//     ./vendor/laravel/framework/src/Illuminate/Console/Command.php:136 { …}
//     ./vendor/symfony/console/Command/Command.php:298 { …}
//     ./vendor/laravel/framework/src/Illuminate/Console/Command.php:121 { …}
//     ./vendor/symfony/console/Application.php:1024 { …}
//     ./vendor/symfony/console/Application.php:299 { …}
//     ./vendor/symfony/console/Application.php:171 { …}
//     ./vendor/laravel/framework/src/Illuminate/Console/Application.php:94 { …}
//     ./vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php:129 { …}
//     ./artisan:35 { …}
//   }
// }

class Instagram extends Connector
{
    protected $targets = [];
    protected $service;
    protected $executor = false;
    protected $account = false;
    protected $accountsService = [];
    protected $userName = false;
    public function __construct($instagram, $cache = false)
    {
        $this->service = app(SocialService::class);
        $this->account = $instagram;
        if (!$this->account) {
            throw new \Exception('Conta não cadastrada para conectar ao instagram');
        }
        $this->userName = $this->account->getUser();
        // dd($instagram, $this->userName, $this->account->getPassword());
        $this->executor = \InstagramScraper\Instagram::withCredentials(
            new \GuzzleHttp\Client(),
            $this->userName,
            $this->account->getPassword(),
            $this->getCache($cache)
        );
        // dd($this->executor);
        $this->executor->login();
        // $this->executor =  new \InstagramScraper\Instagram(new \GuzzleHttp\Client());
    }

    public function getSlug()
    {
        return $this->userName;
    }

    public function prepare($targets)
    {
        if (is_string($targets)) {
            $this->targets = [$targets];
            return $this;
        }
        $this->targets = $targets;
        return $this;
    }

    private function getCache($cache)
    {
        if (class_exists('\Phpfastcache\Helper\Psr16Adapter')) {
            return new Psr16Adapter('Files');
        }
        if (!$cache) {
            return '';
        }

        return $cache;
    }

    public function execute()
    {
        collect($this->targets)->each(
            function ($target) {
                $this->executeForEach($target);
            }
        );

        return $this;
    }

    /**
     *
//     $user = [
//         "pk" => "48689192103"
//         "username" => "souzaivonelopesde"
//         "full_name" => "Ivone Lopes de souza"
//         "is_private" => false
//         "profile_pic_url" => "https://instagram.fstu1-1.fna.fbcdn.net/v/t51.2885-19/224535572_246257183980017_131335
// 2671861612954_n.jpg?stp=dst-jpg_s150x150&_nc_ht=instagram.fstu1-1.fna.fbcdn.net&_nc_cat=109&_nc_ohc=Ss9-ggrAl3wAX8HaGD
// A&edm=AL4D0a4BAAAA&ccb=7-5&oh=00_AT-xg_xiu-WAqAGeb5T1yTIfTTV5vCtrAMbiKTeSISqz5g&oe=6304BA95&_nc_sid=712cc3"
//         "profile_pic_id" => "2625723166155154417_48689192103"
//         "is_verified" => false
//         "has_anonymous_profile_picture" => false
//         "has_highlight_reels" => false
//         "account_badges" => []
//       ] ;
     */
    public function registerUserByArray($user)
    {
        $pk = $user['pk']|null;
        $account = null;
        if(!empty($pk)) {
            $account = $this->service->setAccount(
                'Instagram',
                null,
                null,
                null,
                $pk
            );
        }
        $username = $user['username'];
        if (empty($username)) {
            return $account;
        }
        if (!isset($this->accountsService[$username])) {
            $this->accountsService[$username] = $this->service->setAccount(
                'Instagram',
                null,
                null,
                $username,
                $pk
            );
        }

        return $this->accountsService[$username];
    }
}
