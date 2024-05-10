<?php
require('config_user.php');
$sql="select id,username from users where username='".$_POST['username']."' and password='".md5($_POST['password'])."'";
$res=mysqli_query($link,$sql);
if(mysqli_num_rows($res)==1){
	$row=mysqli_fetch_array($res);
	
	if($row['username']=='Admin'){
		header('location:admin_page.php');
	}
	
	else{
	header('location:Products.php?id='.$row['id']);
	}
}
else{
	header('location:index.php?er=1');
}

?>