<?php
require('config_user.php');
$sql="select id from users where username='".$_POST['username']."' and phone='".$_POST['phone']."' and email='".$_POST['email']."'";
$res=mysqli_query($link,$sql);
if(mysqli_num_rows($res)==1){
	$row=mysqli_fetch_array($res);
	header('location:getnewpass.php?id='.$row['id']);
}
else{
	echo'are you sure about your enterned information?';
	
}



?>