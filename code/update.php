<?php

require('config_user.php');
$sql="update users set fname='".$_POST['fname']."',lname='".$_POST['lname']."',phone='".$_POST['phone']."',address='".$_POST['address']."',email='".$_POST['email']."' where id=".$_POST['id'];
$res=mysqli_query($link,$sql);


if(mysqli_affected_rows($link)>0){
	echo'<script>alert("your profile updated successfully!");window.location= "user_profile.php?id='.$_POST['id'].'"</script>';
}




?>