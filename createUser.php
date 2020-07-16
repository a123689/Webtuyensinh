
<?php
require "lib/db_connect.php";
require "lib/function.php";

$account = $_POST["account"];

$password = $_POST["password"];

$email = $_POST["email"];

$hashed_password = password_hash($password,PASSWORD_DEFAULT);

$tk = createAccount($account,$email,$hashed_password);
if($tk){
  echo $tk;
}else {
  echo $tk;
}


 ?>
