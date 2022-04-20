# Shopping Cart Coding Challenge by diamondLife
This is a full-stack application for the coding challenge from diamondLife. The application is built on Yii2 frameworks. 

## SETUP:
### Download and install these tools: 
- Yii 2 advanced application
- MySQL
- Compass. This is a Ruby application that will be used to compile SCSS into CSS.
- Grunt. This is a NodeJS task runner. It will be used to run Compass. 
- TypeScript. All JavaScript should be written using TypeScript.
## CHALLENGE:
- [ ] Create a two-page application using the Yii framework. 
- [ ] One of these pages should contain a form for submitting data to a database. 
- [ ] The other page should allow users to see what has been submitted.
- [ ] Both of these pages should have JavaScript UI. The complexity of the JavaScript UI is 
not as important as clearly demonstrating the use of TypeScript to JavaScript.
- [ ] All CSS used in the application should be written using SCSS compiled to CSS via Grunt/
Compass.

## HOW TO RUN:
- Clone the repo to your local folder.
- In your terminal, navigate to the local repo folder.
- Run

        cd .\web\
        
  to navigate into the \web subfolder inside the project folder.
- Run

        php -S localhost:8080

  to deploy onto your computer.
- In your browser, go to http://localhost:8080/
    to check the deployed application.
    
## HOW TO USE
- You will need to sign up first in order to enter data.
    - Enter your username and password, and repeat password.
    - Make sure the password repeat is the same as the password.

<p align="center">
  <img src="https://user-images.githubusercontent.com/61807135/164148722-4f4950bd-d301-4356-a114-c30ba3f30442.png">
</p>

- You can then login using the credentials you used for signing up.

<p align="center">
  <img src="https://user-images.githubusercontent.com/61807135/164149332-a9b2a3d1-9e13-49dc-acf0-3468b63084e6.png">
</p>

- After logging in, you will be directed to the page for entering new data, you can request an item you want to buy on diamondLife there:

<p align="center">
  <img src="https://user-images.githubusercontent.com/61807135/164149501-b3e2fb11-1456-4bdb-8a10-34f6b5164025.png">
</p>

- After entering data, you will be redirected to the details page showing you the data you just entered. You can Update/Delete the data you entered.

<p align="center">
  <img src="https://user-images.githubusercontent.com/61807135/164149560-07d769bd-51fa-4a83-82ad-b306357c3874.png">
</p>

- You can click on 'Request list' to view submitted data.

<p align="center">
  <img src="https://user-images.githubusercontent.com/61807135/164149831-59a8ab78-92a4-4a0a-a135-8c906c300bea.png">
</p>

Note: you will only be able to edit your own data, Update/Delete data entered by others will be forbidden.

<p align="center">
  <img src="https://user-images.githubusercontent.com/61807135/164149899-b3c3da02-39af-4ad1-bbaf-472969ef3320.png">
</p>


------------
<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Project Template</h1>
    <br>
</p>

Yii 2 Basic Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
rapidly creating small projects.

The template contains the basic features including user login/logout and a contact page.
It includes all commonly used configurations that would allow you to focus on adding new
features to your application.

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-basic.svg)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-basic.svg)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![build](https://github.com/yiisoft/yii2-app-basic/workflows/build/badge.svg)](https://github.com/yiisoft/yii2-app-basic/actions?query=workflow%3Abuild)

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.6.0.


INSTALLATION
------------

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
composer create-project --prefer-dist yiisoft/yii2-app-basic basic
~~~

Now you should be able to access the application through the following URL, assuming `basic` is the directory
directly under the Web root.

~~~
http://localhost/basic/web/
~~~

### Install from an Archive File

Extract the archive file downloaded from [yiiframework.com](http://www.yiiframework.com/download/) to
a directory named `basic` that is directly under the Web root.

Set cookie validation key in `config/web.php` file to some random secret string:

```php
'request' => [
    // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
    'cookieValidationKey' => '<secret random string goes here>',
],
```

You can then access the application through the following URL:

~~~
http://localhost/basic/web/
~~~


### Install with Docker

Update your vendor packages

    docker-compose run --rm php composer update --prefer-dist
    
Run the installation triggers (creating cookie validation code)

    docker-compose run --rm php composer install    
    
Start the container

    docker-compose up -d
    
You can then access the application through the following URL:

    http://127.0.0.1:8000

**NOTES:** 
- Minimum required Docker engine version `17.04` for development (see [Performance tuning for volume mounts](https://docs.docker.com/docker-for-mac/osxfs-caching/))
- The default configuration uses a host-volume in your home directory `.docker-composer` for composer caches


CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
- Refer to the README in the `tests` directory for information specific to basic application tests.


TESTING
-------

Tests are located in `tests` directory. They are developed with [Codeception PHP Testing Framework](http://codeception.com/).
By default, there are 3 test suites:

- `unit`
- `functional`
- `acceptance`

Tests can be executed by running

```
vendor/bin/codecept run
```

The command above will execute unit and functional tests. Unit tests are testing the system components, while functional
tests are for testing user interaction. Acceptance tests are disabled by default as they require additional setup since
they perform testing in real browser. 


### Running  acceptance tests

To execute acceptance tests do the following:  

1. Rename `tests/acceptance.suite.yml.example` to `tests/acceptance.suite.yml` to enable suite configuration

2. Replace `codeception/base` package in `composer.json` with `codeception/codeception` to install full-featured
   version of Codeception

3. Update dependencies with Composer 

    ```
    composer update  
    ```

4. Download [Selenium Server](http://www.seleniumhq.org/download/) and launch it:

    ```
    java -jar ~/selenium-server-standalone-x.xx.x.jar
    ```

    In case of using Selenium Server 3.0 with Firefox browser since v48 or Google Chrome since v53 you must download [GeckoDriver](https://github.com/mozilla/geckodriver/releases) or [ChromeDriver](https://sites.google.com/a/chromium.org/chromedriver/downloads) and launch Selenium with it:

    ```
    # for Firefox
    java -jar -Dwebdriver.gecko.driver=~/geckodriver ~/selenium-server-standalone-3.xx.x.jar
    
    # for Google Chrome
    java -jar -Dwebdriver.chrome.driver=~/chromedriver ~/selenium-server-standalone-3.xx.x.jar
    ``` 
    
    As an alternative way you can use already configured Docker container with older versions of Selenium and Firefox:
    
    ```
    docker run --net=host selenium/standalone-firefox:2.53.0
    ```

5. (Optional) Create `yii2basic_test` database and update it by applying migrations if you have them.

   ```
   tests/bin/yii migrate
   ```

   The database configuration can be found at `config/test_db.php`.


6. Start web server:

    ```
    tests/bin/yii serve
    ```

7. Now you can run all available tests

   ```
   # run all available tests
   vendor/bin/codecept run

   # run acceptance tests
   vendor/bin/codecept run acceptance

   # run only unit and functional tests
   vendor/bin/codecept run unit,functional
   ```

### Code coverage support

By default, code coverage is disabled in `codeception.yml` configuration file, you should uncomment needed rows to be able
to collect code coverage. You can run your tests and collect coverage with the following command:

```
#collect coverage for all tests
vendor/bin/codecept run --coverage --coverage-html --coverage-xml

#collect coverage only for unit tests
vendor/bin/codecept run unit --coverage --coverage-html --coverage-xml

#collect coverage for unit and functional tests
vendor/bin/codecept run functional,unit --coverage --coverage-html --coverage-xml
```

You can see code coverage output under the `tests/_output` directory.
