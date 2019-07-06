# Project instalation
1 - clone the repository. <br />
2 - run the command composer install. <br />
3 - php -S localhost:8000 -t public <br />
Note: the project use the Lumen Framework. <br />

# Multiples of 3 and 5
The source code for the calculation is in the file "app/http/core/DiscoveryMultiples.php". <br />
To test the iteration just open the url: http://localhost:8000/multiple. <br />

## Unit tests 
To execute unit tests, open terminal on root project directory and run the command: vendor/bin/phpunit --filter=DiscoveryNumberTest.<br />
Note: the unit test code is in the directory "/tests/DiscoveryNumberTest.php"; <br />
