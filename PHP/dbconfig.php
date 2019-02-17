<?php
   /* File: dbconfig.php
    * Define the four constants with all
    * the db information.
    */

   define('DB_NAME', 'Voluntr');
   define('DB_HOST', 'localhost');
   define('DB_USER', 'root');
   define('DB_PWD', 'root');
  /* Define the PDO connection string.
   */
  define('MYSQL_CONNECTION_STRING',  'mysql:host=' . DB_HOST . 
  ';dbname=' . DB_NAME);
?>