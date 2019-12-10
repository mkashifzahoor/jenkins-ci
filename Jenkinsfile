pipeline {
   agent any

   stages {
      stage('Build') {
         steps {
            build 'GitPull and Build'
         }
      }
      stage('API Test') {
         steps {
            build 'api_tests'
         }
      }
   }
   post {
    success {
      build 'Deployment'
    }
}
}