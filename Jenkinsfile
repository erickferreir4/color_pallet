pipeline {
  agent any
    
  stages {
	stage('Clone') {
		steps {
			dir('../') {
	  			sh 'rm -rf color-pallet'
         		sh 'git clone https://heroku:${HEROKU_TOKEN}@git.heroku.com/color-pallet.git'
				sh 'ls'
			}
		}
	}
  }
}


