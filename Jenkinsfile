pipeline {
  agent any
    
  stages {
	stage('Clone') {
		steps {
	  		sh 'rm -rf color-pallet'
        	sh 'git clone https://heroku:${HEROKU_TOKEN}@git.heroku.com/color-pallet.git'
		}
	}

	stage('Copy') {
		steps {
			sh 'cp -r app ./color-pallet'
		}
	}

	stage('Deliver') {
		steps {
			dir('./color-pallet') {
				sh 'git add .'
				sh 'git commit -m"jenkins"'
				sh 'git push'
			}
		}
	}

  }
}


