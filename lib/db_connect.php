<?php
function myConnect() {
 
  require_once 'config.php';
    $con = mysqli_connect('localhost','root','','webtuyensinh');
    mysqli_query($con,"SET NAMES 'utf8'");
    return $con;

}


?>
