<?php

require('config_admin.php');
$sql="delete from products where code=".$_GET['code'];
$res=mysqli_query($link,$sql);

if(mysqli_affected_rows($link)>0){
	echo'<script>alert("your product deleted successfully!");window.location= "admin_product.php?code='.$_GET['code'].'"</script>';
}
else{
	echo'<script>alert("try again");window.location= "admin_product.php?code='.$_GET['code'].'"</script>';
}






?>