<?php
  $dbhost = "localhost";
  $dbusername = "root";
  $dbpassword = "root";
  $dbname = "student-portal";
  $connstr = "mysql:host=$dbhost; dbname=$dbname;charset=utf8";
  $dboption = array(
    PDO::ATTR_ERRMODE => true,
    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
  );

  try{
    $conn = new PDO($connstr, $dbusername, $dbpassword, $dboption);
  }catch(PDOException $ex){
    echo "Connection: ", $ex->getMessage();
  }

  require_once("class/autoload.php");
?>