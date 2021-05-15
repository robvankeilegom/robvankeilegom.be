<?php

namespace Deployer;

require 'recipe/laravel.php';
require 'recipe/yarn.php';

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
add('shared_dirs', [
    'public/images/projects',
]);

// Writable dirs by web server
add('writable_dirs', []);

// Hosts
host('production')
    ->hostname('robvankeilegom.be')
    ->set('branch', 'master')
    ->set('deploy_path', '~/webroot/robvankeilegom.be')
    ->stage('production');

host('staging')
    ->hostname('robvankeilegom.be')
    ->set('branch', 'staging')
    ->set('deploy_path', '~/webroot/staging.robvankeilegom.be')
    ->stage('staging');

// Tasks
task('build', function () {
    run('cd {{release_path}} && build');
});

task('assets', function () {
    run('cd {{release_path}} && yarn dev');
})->onStage('staging')->desc('Building assets');

task('assets:production', function () {
    run('cd {{release_path}} && yarn prod');
})->onStage('production')->desc('Building assets (prod)');

// Clean up after build to save disk space
task('npm:clean', function () {
    run('cd {{release_path}} && rm -rf ./node_modules');
})->onStage('production')->desc('Removing node_modules');

// Run yarn install
after('deploy:update_code', 'yarn:install');

// Build assets
after('yarn:install', 'assets:production');
after('yarn:install', 'assets');

after('assets:production', 'npm:clean');
after('assets', 'npm:clean');

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.
before('deploy:symlink', 'artisan:migrate');
