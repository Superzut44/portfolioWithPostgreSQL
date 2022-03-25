# portfolio

## Getting Started for Students

## Versions

1. php -v // 8.1.3
2. composer --version // 2.2.7
3. symfony -v // 5.4.2
4. node -v // 16.14.0
5. nvm -v // 0.39.1
6. yarn --version // 1.22.17
7. npm -v // 8.5.1
8. lsb_release -a // Ubuntu 20.04.4 LTS
9. npm list react // react-dom@17.0.2 and react-router-dom@6.2.2
10. npm view react-script version // 2.0.5
11. npm view react-native version // 0.67.4
12. sudo mysql // Server version: 8.0.28-0ubuntu0.20.04.3 (Ubuntu)

### Prerequisites

1. Check composer is installed
2. Check yarn & node are installed

### Install

1. Clone this project
2. Run `composer install`
3. Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX
4. Run `composer update`
5. Run `npm install` for deploy
5. Run `yarn install`
6. Run `yarn encore dev` to build assets

### Working

1. Run `symfony server:start` to launch your local php web server
2. Run `yarn run dev --watch` to launch your local server for assets

### Testing

1. Run `php ./vendor/bin/phpcs` to launch PHP code sniffer
2. Run `php ./vendor/bin/phpstan analyse src --level max` to launch PHPStan
3. Run `php ./vendor/bin/phpmd src text phpmd.xml` to launch PHP Mess Detector
3. Run `./node_modules/.bin/eslint assets/js` to launch ESLint JS linter
3. Run `./node_modules/.bin/sass-lint -c sass-linter.yml -v` to launch Sass-lint SASS/CSS linter

### Windows Users

If you develop on Windows, you should edit you git configuration to change your end of line rules with this command :

`git config --global core.autocrlf true`



