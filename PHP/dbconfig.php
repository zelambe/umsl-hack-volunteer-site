<?php
   /* File: dbconfig.php
    * Define the four constants with all
    * the db information.
    */
   define('DB_NAME', 'voluntr');
   define('DB_HOST', 'localhost');
   define('DB_USER', 'voluntr');
   define('DB_PWD', '123456');
  /* Define the PDO connection string.
   */
  define('MYSQL_CONNECTION_STRING',  'mysql:host=' . DB_HOST . 
  ';dbname=' . DB_NAME);
?>