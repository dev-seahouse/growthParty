ECHO ON
SETLOCAL ENABLEEXTENSIONS
echo "use run -npm to fix npm dependency error"
echo "use run -composer to fix composer dependency error"
echo "use run without any argument to launch development server"

set operation=%~1

IF "%operation%"=="" (
   start cmd /k yarn run watch
)

IF "%operation%"=="npm" (
   echo "updating npm to latest version"
   npm install -g npm@latest
   echo "trying to install yarn if it does not exist"
   npm install -g yarn
   echo "installing missing dependencies"
   yarn install
   echo "removing unused stuff"
   npm prune
   echo "if there is still error, manually remove node_modules folder and try again"
)


IF "%operation%"=="composer" (
  echo "trying to install missing packages"
  composer install
  echo "if there is error, please manually remove vendor package and try again"
)


