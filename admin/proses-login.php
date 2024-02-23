<?php
session_start();

//$sql=$koneksi->query("select * from user where username='$username' and password='$password'");
//$row= $sql->fetch_assoc();
$result= $sql->num_rows;

if ($result==TRUE)
{
    $User_id=$row['User_id'];
    $token=md5($username.$password);
    date_default_timezone_set('Asia/Jakarta');
    //$last_login=date('Y-m-d H:i:s');
    $koneksi->query("update user set last_login=now(), token='$token' where User_id='$User_id' ");

    $_SESSION['User_id']=$row['User_id'];
    $_SESSION['username']=$row['username'];

    header("location:index.php");  
    
} else {

	 echo"<script>alert('Username atau password salah !');document.location.href='login.php';</script>";

}
?>