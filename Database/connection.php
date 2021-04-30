<?php
#Revision History
#Matheus Emidio (1931358) 2021-04-24 Created connection file
#Matheus Emidio (1931358) 2021-04-26 Erased the alias names on database stored procedures 

//Reminder of how variables are being declared on PHP-variables
//connection
//define("DATABASE", "dbname=database-1931358");
//define("DATABASE_USERNAME", "user-1931358");
//define("DATABASE_PASSWORD", "1931358");

//User 
//$connection = new PDO("mysql:host=localhost;" . DATABASE, DATABASE_USERNAME, DATABASE_PASSWORD);
//$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Root
$connection = new PDO("mysql:host=localhost;dbname=database-1931358", "root", "matheusemidio");
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

