<?php

require('config_admin.php');


$sql="delete from users where id=".$_GET['id'];
$res=mysqli_query($link,$sql);

if(mysqli_affected_rows($link)>0){
	echo'<script>alert("selected user deleted successfully!");window.location= "admin_customers.php"</script>';
}
else{
	echo '<script>alert("try again!");window.location= "admin_customers.php"</script>';
}

?>