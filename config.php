<?php
  define('DB_SERVER', 'mathlab@utsc.utoronto.ca');
  define('DB_USERNAME', 'barlowza');
  define('DB_PASSWORD', 'barlowza');
  define('DB_DATABASE', 'a3');
  if( ! $db =  mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE) ) {
    die('No connection: ' . mysqli_connect_error());
  }
 ?>
