<?php

DEFINE ('DB_USER' ,'Ashley');//phpMyAdmin user name
DEFINE ('DB_PASSWORD', "Sabpop44");//phpMyAdim password
DEFINE ('DB_HOST', 'localhost');//database host
DEFINE ('DB_NAME', 'beautysalon');//database name inside phpMyAdmin
//this statement connects to my database 
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySql'.
       mysqli_connect_error());
?>
