<?php
require 'environment.php';
$config = array();

if(ENVIRONMENT == 'development'){

	define('BASE_URL','http://localhost/landingpage/');

     $dsn = "mysql:dbname=novo_site;host=localhost";
    $dbuser = "root";
      $dbpass = '';

	 $dataBase =  new PDO($dsn, $dbuser, $dbpass);

	}else{

		define('BASE_URL','http://paraibalog.ga/');

	$dsn = "";
$dbuser = " ";
     $dbpass = ' ';

$dataBase =  new PDO($dsn, $dbuser, $dbpass);

	}

  global $db;

try{

     $db = $dataBase;
	
	 


}catch(PDOException $e){

	echo 'FALHOU'.$e->getMessage();
	exit;

}
 

?>
 
