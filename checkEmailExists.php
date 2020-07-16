<?php
require "lib/db_connect.php";
require "lib/function.php";
$email = $_POST["email"];

$check = 0;
$user = getUser();
while ($row = mysqli_fetch_array($user,MYSQLI_ASSOC)) {
 if($row['Email'] == $email){
   $check = 1;
   break;
 }
}

echo $check;
 ?>
