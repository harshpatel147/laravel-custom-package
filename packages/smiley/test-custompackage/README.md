This is a Steps for create simple Package in laravel

**step 1:** create laravel project

**step 2:** create directory path in root as like below 

        packages/<vendor_name>/<package_name>/src   
<br/>

        for example: here I create "packages/smiley/test-custompackage/src" directory, 
        where "smiley" is vendor_name & "test-custompackage" is a package_name. 
        
        # The src folder will contain all of our package source code. 
        In some instances, you may also create a dist branch if you are compiling your assets for a production server. 
        In this way, developers that will be using your package will have an option to choose between the source files in the src folder or the distribution files in the dist folder when installing your package through Composer.

**step 3:** navigate to "packages/<vendor_name>/<package_name>" directory. Then we will need to initialize this folder as a composer package by running the following command:  
        
        composer init 

then fill details which one is asked by composer.

    for example: 

        * Package name (<vendor>/<name>) [harsh/test-custompackage]: smiley/test-custompackage
        * Description []: test-custompackage - A simple & my first custom package in laravel
        * Author [Harsh <harsh.***********@gmail.com>, n to skip]: 
        * Minimum Stability []: dev
        * Package Type (e.g. library, project, metapackage, composer-plugin) []: project
        * License []: MIT

        * Define your dependencies.

        * Would you like to define your dependencies (require) interactively [yes]? no
        * Would you like to define your dev dependencies (require-dev) interactively [yes]? no
        * Add PSR-4 autoload mapping? Maps namespace "Smiley\TestCustompackage" to the entered relative path. [src/, n to skip]: src/

        * Do you confirm generation [yes]? yes

        then it will creating "composer.json" file at "packages/<vendor_name>/<package_name>" directory. & we can edit this composer.json file later as per our requirement.


    # then we need Autoload the namespace for your package inside the autoload->psr-4 property of your project composer.json file. With this, your package classes inside the src folder will be autoloaded and available for our project to use.

**step 4:** open Project composer.json which is located at root directory of Laravel Project. & then 

Autoload the namespace for your package by adding the line 
**"Smiley\\TestCustompackage\\": "packages/smiley/test-custompackage/src"** 
inside the autoload->psr-4 property of your project composer.json file. With this, your package classes inside the src folder will be autoloaded and available for our project to use.

**step 5:** Now, since we’ve edited our project’s composer.json file, we should reload it by running the following command in the project root directory:  

    composer dump-autoload

**step 6:** create "Test.php" class inside the src path of our custom package. we create function as like below

    <?php
    namespace Smiley\TestCustompackage;

    class Test
    {
        public function greet(string $isName)
        {
            return 'Hi ' . $isName . '! How are you doing today?';
        }
    }


Now Testing our Package 

step 7: add route as like below in route.php


    <?php 
    use Smiley\TestCustompackage\Test;

    Route::get('/greet/{name}', function($isName) {
        $oGreetr = new Test();
        return $oGreetr->greet($isName);
    });


now start development server using "php artisan serve" command then open your browser and enter following url : "http://localhost:8000/greet/User"

reference: https://medium.com/@francismacugay/build-your-own-laravel-package-in-10-minutes-using-composer-867e8ef875dd
