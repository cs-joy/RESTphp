<?php
  
  $db_user = 'admin';
  $db_password = 'admin';
  $db_name = 'rest_php';

  $db = new PDO('mysql:host=localohost;dbname='.$db_name.';charset=utf8',$db_user,$db_password);
  
  //set some db attributes
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  define('APP_NAME', 'PHP REST API DEVELOPMENT');

?>