<?php ob_start();

$db['db_host'] = "localhost:3307";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "saverx";
echo "<h2>PHP is Fun!</h2>";
echo "Hello Krish!<br>";


foreach($db as $key => $value){
define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);
$connection1 = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);
$con = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);

?>
