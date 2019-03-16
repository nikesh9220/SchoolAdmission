<?php

	 
    define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'schooladmission');
   $connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
else{
    echo "Connected";
}
 


