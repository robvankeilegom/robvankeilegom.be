<?php
namespace Deployer;

require 'recipe/laravel.php';
require 'recipe/npm.php';

// Config
set('default_stage', 'staging');

// Project name
set('application', 'robvankeilegom.be');

// Project repository
set('repository', 'https://RoobieBoobieee@gitlab.com/RoobieBoobieee/Portfolio.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);

// Hosts
host('production')
    ->hostname('robvankeilegom.be')
    ->set('branch', 'master')
    ->set('deploy_path', '/home/user/web/robvankeilegom.be')
    ->stage('production');

host('staging')
    ->hostname('staging.robvankeilegom.be')
    ->set('branch', 'staging')
    ->set('deploy_path', '/home/user/web/staging.robvankeilegom.be')
    ->stage('staging');

// Tasks
task('build', function () {
    run('cd {{release_path}} && build');
});

task('gulp', function () {
    run("cd {{release_path}} && gulp");
})->onStage('staging')->desc("Running gulp");

task('gulp:production', function () {
    run("cd {{release_path}} && gulp --production");
})->onStage('production')->desc("Running gulp");

// Run npm install
after('deploy:update_code', 'npm:install');

// Run gulp
after('npm:install', 'gulp:production');
after('npm:install', 'gulp');

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.
before('deploy:symlink', 'artisan:migrate');
