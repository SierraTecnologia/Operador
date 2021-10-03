<?php

namespace Operador\Components\Worker\Deploy;

use Fabrica\Models\Infra\Commit;

/**
 * DeployBusinessAmbiente Class
 *
 * @class   DeployBusinessAmbiente
 * @package life
 */
class DeployBusinessAmbiente
{

    protected $url = false;
    
    public function __construct()
    {
        
    }

    public function getStage(): void
    {
        host('domain.com')
            ->stage('production')
            ->set('branch', 'master')
            ->set('deploy_path', '/var/www/domain.com');
    }

    public function getHost(): void
    {
        task(
            'test', function () {
                writeln('Hello world');
            }
        );
    }

    public function getTask(): void
    {

    }

    public function getAllTasks(): void
    {

        task(
            'pwd', function () {
                $result = run('pwd');
                writeln("Current dir: $result");
            }
        );

        task(
            'reload:php-fpm', function () {
                run('sudo /usr/sbin/service php7-fpm reload');
            }
        );

        task(
            'deploy', [
            'deploy:prepare',
            'deploy:lock',
            'deploy:release',
            'deploy:update_code',
            'deploy:shared',
            'deploy:writable',
            'deploy:vendors',
            'deploy:clear_paths',
            'deploy:symlink',
            'deploy:unlock',
            'cleanup',
            'success'
            ]
        );
        
        after('success', 'notify');
        after('deploy', 'reload:php-fpm');
    }

}
