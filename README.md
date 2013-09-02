#Example code

This project contains examples that illustrates concepts that can be useful


##Composer
http://getcomposer.org/ 

Dependencies to other libraries are loaded through composer. The libraries must be manually fetched so when you have 
cloned the project you must do `php composer.phar install` from the command line. All libraries are downloaded 
to the "vendor" directory.

##PHPUnit
http://phpunit.de/manual/current/en/index.html 

Unit tests are located in the "tests" directory
Run unit tests from the command line with `vendor/bin/phpunit`

A good structure of unit tests is to name the class that is under test to "target".
Divide the test into three sections clearly marked by comments  
`// Fixture` - set up all mock behaviour and stuff needed by the test  
`// Test` - the actual call that we want to test  
`// Assert` - verify that we got the expected result from the class under test  

##Dependency Injection
https://github.com/mnapoli/PHP-DI 

Dependency injection is handled through the "php-di" framework. The Worker class, for instance, is injected in the
Calculator class through constructor injection. Not that the root class of the object graph must be created by the
dependency injection framework. See index.php:

    $container = new \DI\Container(); 
    $calculator = $container->get('w203\example\Calculator');

##Mocking
https://github.com/padraic/mockery 

The Mockery framework is used to mock classes in unit tests.
In CalculatorTest, the mock is created by  

    $this->mockWorker = M::mock('w203\example\Worker');

and the behaviour is set up in  

    $this->mockWorker->shouldReceive('add')->with($a, $b)->andReturn($expected);

