pipeline {
    agent none

    options {
        skipDefaultCheckout(true)
        disableConcurrentBuilds()
    }

    stages {
        stage('Cleanup and Checkout') {
            agent any

            steps {
                cleanWs()

                checkout scm
            }
        }

        stage('Build site') {
            agent {
                docker {
                    image 'robvankeilegom/golang-hugo'
                }
            }
            steps {
                sh '''
                    hugo
                '''
            }
        }

        stage('Deploy site') {
            agent {
                docker {
                    image 'rvkorgani/ssh-rsync'
                    args '-v /home/jenkins/.ssh/known_hosts:/home/user/.ssh/known_hosts'
                }
            }
            environment {
                SSH_PORT = credentials('SSH_PORT_ROBVANKEILEGOM_BE')
            }
            steps {
                sshagent(credentials: ['orwijena01']) {
                    sh '''
                        rsync -av -e "ssh -p $SSH_PORT" ./public/ rob@robvankeilegom.be:~/websites/robvankeilegom.be/current --delete
                    '''
                }
            }
        }
    }
}

