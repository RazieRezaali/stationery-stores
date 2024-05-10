<?php

require('config_user.php');
$sql="select id from users where username='".$_POST['username']."'";
$res=mysqli_query($link,$sql);
if(mysqli_num_rows($res)>0)
{
	$row=mysqli_fetch_object($res);
	header('location:register.php?id='.$row->id);
}
else
{
$sql="insert into users(fname,lname,phone,address,email,username,password) values ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['phone']."','".$_POST['address']."','".$_POST['email']."','".$_POST['username']."','"
.md5($_POST['password'])."')";
$res=mysqli_query($link,$sql);
	if(mysqli_affected_rows($link)==1){
		header('location:index.php?er=0');
	}	
	else{
		header('location:register.php?er=1');
	}
		
}




?>