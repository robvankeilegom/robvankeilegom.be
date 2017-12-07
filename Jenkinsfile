#!/usr/bin/env groovy

node {
    try {
        stage 'checkout'
        checkout scm

        stage 'build' {
            sh "npm install"
            sh "composer install"
            sh "cp .env.example .env"
            sh "php artisan key:generate"
            sh "gulp"
        }
        stage 'test' {
            if (fileExists('phpunit.xml')) {
                sh "./vendor/bin/phpunit"
            } else {
                echo 'No tests'
            }
        }

    } catch(error) {
        throw error
    } finally {

    }

}
