<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
  
  $db_server = $_ENV['HOST'];
  $db_user = $_ENV['USER'];
  $db_password = $_ENV['PASSWORD'];
  $db_name = $_ENV['DB'];

  $db = new PDO('mysql:host='.$db_server.';dbname='.$db_name.';charset=utf8',$db_user,$db_password);
  
  //set some db attributes
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  define('APP_NAME', 'PHP REST API DEVELOPMENT');

?>