<?php
require('config_user.php');
$sql="update users set password='".md5($_POST['newpassword'])."' where id=".$_POST['id'];
$res=mysqli_query($link,$sql);
if($res){	
	header('location:index.php?er=-1');
}
else{
	header('location:getnewpass.php?er=1');
}



?>