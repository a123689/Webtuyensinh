<?php
 session_start();
require "lib/db_connect.php";
require "lib/function.php";

$conn = myConnect();
$email = $_POST["email"];
$password = $_POST["password"];

$qr = "SELECT * FROM User WHERE Email = '$email'";

$user = mysqli_query($conn,$qr);

 $row =  mysqli_fetch_array($user, MYSQLI_ASSOC);


 if(mysqli_num_rows($user) == 1){

    
     if(password_verify($password,$row['Password'])){
       // $_SESSION["iduser"] = $row['iduser'];
       // $_SESSION["taikhoan"] = $row['taikhoan'];
       // $_SESSION["matkhau"] = $row['matkhau'];
       // $_SESSION["hoten"] = $row['hoten'];
       // $_SESSION["iddanhmuc"] = $row['iddanhmuc'];
       // $_SESSION["loaitaikhoan"] = $row['loaitaikhoan'];
       echo 0;
     }else{

       echo "Tài khoản hoặc mật khẩu không chính xác";
     }


     

 }else {
   echo "Tài khoản hoặc mật khẩu không chính xác";
 }


 ?>