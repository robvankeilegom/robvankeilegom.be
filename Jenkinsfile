pipeline {
    agent any

    options {
        skipDefaultCheckout(true)
        disableConcurrentBuilds()
    }

    stages {
        stage('Cleanup and Checkout') {
            agent any

            steps {
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
            agent any

            when {
                branch 'master'
            }

            environment {
                SSH_PORT = credentials('SSH_PORT_ROBVANKEILEGOM_BE')
            }

            steps {
                sshagent(credentials: ['SSH_JENKINS_BOX']) {
                    sh '''
                        rsync -av -e "ssh -p $SSH_PORT" ./public/ rob@robvankeilegom.be:~/websites/robvankeilegom.be/current --delete
                    '''
                }
            }
        }
    }

    post {
        always {
            cleanWs()
        }
    }
}

