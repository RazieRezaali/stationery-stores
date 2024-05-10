<?php

require('config_user.php');


$sql="select user_id from users_cart where id=".$_GET['id'];
$res=$res=mysqli_query($link,$sql);
$row=mysqli_fetch_array($res);
$id=$row['user_id'];

$sql="DELETE FROM users_cart WHERE id=".$_GET['id'];
$res=mysqli_query($link,$sql);

echo'<script>alert("your choosen row deleted from your cart successfully!");window.location= "users_cart.php?id='.$id.'"</script>';


?>