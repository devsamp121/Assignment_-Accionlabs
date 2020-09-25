# Assignment

# Weather API
1. Create a database in MySql and modify the .env file in root folder with DB details like database name, username and password.
2. Run from command line by > cd to the root folder path   
3. > composer update
4. >  php artisan migrate 
5. This will create a table 'weatherapidata' i which the weather data is stored from Openweathermap
6. API to fetch and store data: 

URL: http://localhost/weather/fetchdata
Method: GET
Parameters: NA

7. After running the URL the data gets stored in the table > weatherapidata
8. Any error while fetching the data is stored in the log files.

# Tech Stack:
PHP 7+, Mysql, Lumen Micro framework


# palindrome
Demonstrates OOPS and Dependency Injection
URL: http://localhost/palindrome.php
