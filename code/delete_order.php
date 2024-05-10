<?php

require('config_admin.php');


$sql="update orders set action=3 where id=".$_GET['id'];
$res=mysqli_query($link,$sql);

if(mysqli_affected_rows($link)>0){
	echo'<script>alert("selected order deleted successfully!");window.location= "admin_orders.php"</script>';
}
else{
	echo '<script>alert("try again!");window.location= "admin_orders.php"</script>';
}

?>