<?php
require "lib/db_connect.php";
require "lib/function.php";
$account = $_POST["account"];

$check = 0;
$user = getUser();
while ($row = mysqli_fetch_array($user,MYSQLI_ASSOC)) {
 if($row['Name'] == $account){
   $check = 1;
   break;
 }
}

echo $check;
 ?>