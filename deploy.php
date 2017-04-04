<?php
namespace Deployer;

require_once 'recipe/common.php';
require 'vendor/deployer/recipes/rsync.php';

// Configuration
set('ssh_type', 'native');
set('ssh_multiplexing', true);
set('writable_mode', 'chmod');
set('default_stage', 'staging');

set('repository', 'https://RoobieBoobieee@gitlab.com/RoobieBoobieee/Portfolio.git');

// Laravel shared dirs
set('shared_dirs', [
    'storage',
    'vendors',
    'node_modules',
]);

// Laravel shared file
set('shared_files', [
    '.env',
]);

// Laravel writable dirs
set('writable_dirs', [
    'bootstrap/cache',
    'storage',
    'storage/app',
    'storage/app/public',
    'storage/framework',
    'storage/framework/cache',
    'storage/framework/sessions',
    'storage/framework/views',
    'storage/logs',
]);

// Servers
server('production', 'ssh.robvankeilegom.be')
    ->user('robvankeilegom.be')
    ->identityFile()
    ->set('branch', 'master')
    ->set('deploy_path', '/home/robvankeilegom.be/robvankeilegom.be')
    ->pty(true);

server('staging', 'ssh.robvankeilegom.be')
    ->user('robvankeilegom.be')
    ->identityFile()
    ->set('branch', 'development')
    ->set('deploy_path', '/home/robvankeilegom.be/staging.robvankeilegom.be');


set('rsync_src', __DIR__ . '/vendor');
set('rsync_dest', '{{release_path}}/vendor');

set('rsync', [
    'include'      => [],
    'include-file' => false,
    'exclude'      => [],
    'exclude-file' => false,
    'filter'       => [],
    'filter-file'  => false,
    'filter-perdir'=> false,
    'flags'        => 'rza', // Recursive, with compress
    'options'      => ['delete'],
    'timeout'      => 600,
]);

// task('environment:setup', function () {
//     run('cp {{deploy_path}}/shared/.env {{release_path}}/.env');
// })->desc('Environment setup');
// after('deploy:update_code', 'environment:setup');


/**
 * Helper tasks
 */
desc('Disable maintenance mode');
task('artisan:up', function () {
    $output = run('if [ -f {{deploy_path}}/current/artisan ]; then {{bin/php}} {{deploy_path}}/current/artisan up; fi');
    writeln('<info>' . $output . '</info>');
});

desc('Enable maintenance mode');
task('artisan:down', function () {
    $output = run('if [ -f {{deploy_path}}/current/artisan ]; then {{bin/php}} {{deploy_path}}/current/artisan down; fi');
    writeln('<info>' . $output . '</info>');
});

desc('Execute artisan migrate');
task('artisan:migrate', function () {
    run('{{bin/php}} {{release_path}}/artisan migrate --force');
});

desc('Execute artisan migrate:rollback');
task('artisan:migrate:rollback', function () {
    $output = run('{{bin/php}} {{release_path}}/artisan migrate:rollback --force');
    writeln('<info>' . $output . '</info>');
});

desc('Execute artisan migrate:status');
task('artisan:migrate:status', function () {
    $output = run('{{bin/php}} {{release_path}}/artisan migrate:status');
    writeln('<info>' . $output . '</info>');
});

desc('Execute artisan db:seed');
task('artisan:db:seed', function () {
    $output = run('{{bin/php}} {{release_path}}/artisan db:seed --force');
    writeln('<info>' . $output . '</info>');
});

desc('Execute artisan cache:clear');
task('artisan:cache:clear', function () {
    run('{{bin/php}} {{release_path}}/artisan cache:clear');
});

desc('Execute artisan config:cache');
task('artisan:config:cache', function () {
    run('{{bin/php}} {{release_path}}/artisan config:cache');
});

desc('Execute artisan route:cache');
task('artisan:route:cache', function () {
    run('{{bin/php}} {{release_path}}/artisan route:cache');
});

desc('Execute artisan view:clear');
task('artisan:view:clear', function () {
    run('{{bin/php}} {{release_path}}/artisan view:clear');
});

desc('Execute artisan optimize');
task('artisan:optimize', function () {
    run('{{bin/php}} {{release_path}}/artisan optimize');
});

desc('Execute artisan queue:restart');
task('artisan:queue:restart', function () {
    run('{{bin/php}} {{release_path}}/artisan queue:restart');
});

/**
 * Task deploy:public_disk support the public disk.
 * To run this task automatically, please add below line to your deploy.php file
 *
 *     before('deploy:symlink', 'deploy:public_disk');
 *
 * @see https://laravel.com/docs/5.2/filesystem#configuration
 */
desc('Make symlink for public disk');
task('deploy:public_disk', function () {
    // Remove from source.
    run('if [ -d $(echo {{release_path}}/public/storage) ]; then rm -rf {{release_path}}/public/storage; fi');

    // Create shared dir if it does not exist.
    run('mkdir -p {{deploy_path}}/shared/storage/app/public');

    // Symlink shared dir to release dir
    run('{{bin/symlink}} {{deploy_path}}/shared/storage/app/public {{release_path}}/public/storage');
});

/**
 * Main task
 */
desc('Deploy your project');
task('deploy', [
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'rsync',
    'deploy:shared',
    'deploy:writable',
    'artisan:view:clear',
    'artisan:cache:clear',
    'artisan:config:cache',
    'artisan:optimize',
    'artisan:migrate',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
]);

after('deploy', 'success');

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');