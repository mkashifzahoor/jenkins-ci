pipeline {
   agent any

   stages {
      stage('Build') {
         steps {
            build 'GitPull and Build'
         }
      }
   }
   post {
    success {
      build 'Deployment'
    }
}
}