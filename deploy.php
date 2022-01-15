<?php
namespace Deployer;
 
require 'recipe/common.php';
 
// Project name
set('application', 'my_project');
 
// Project repository
set('repository', 'repository url');
 
// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);
 
// Shared files/dirs between deploys 
set('shared_files', []);
set('shared_dirs', []);
 
// Writable dirs by web server 
set('writable_dirs', []);
set('allow_anonymous_stats', false);
 
// Hosts
host('kireini.com')
    ->port(22)
    ->user('root')
    ->stage('test')
    ->set('branch', 'master')
    ->set('deploy_path', '/var/www/html');

 
// Tasks
 
desc('Deploy your project');
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'success'
]);
 
desc('test_task');
task('test_task', function () {
    $result = run('cd /var/www/html; pwd');
    writeln("Current dir: $result");
});
 
after('deploy', 'test_task');
 
// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
