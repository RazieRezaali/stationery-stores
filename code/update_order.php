<?php

require('config_admin.php');
$sql="update orders set number=".$_POST['number']." , action=2  where id=".$_POST['id'];
$res=mysqli_query($link,$sql);

if(mysqli_affected_rows($link)>0){
	echo'<script>alert("your selected order updated successfully!");window.location="admin_orders.php"</script>';
}
else{
	echo'<script>alert("try again");window.location="admin_orders.php" </script>';
}




?>