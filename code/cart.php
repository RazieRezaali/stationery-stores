<?php

require('config_user.php');
$i=0;
foreach($_POST['number'] as $num){
	if($num>0){
		$sql=
		"insert into users_cart(user_id,product_code,number) values(".(int)$_POST['id'].",".(int)$_POST['product'][$i].",".$num.")";
		$res=mysqli_query($link,$sql);
	}
	$i++;
}
if(mysqli_affected_rows($link)>0){
	echo'<script>alert("your choosen proucts added to your cart successfully!");window.location= "products.php?id='.$_POST['id'].'"</script>';
}
else{
	echo'<script>alert("try again!");window.location= "products.php?id='.$_POST['id'].'"</script>';
}

?>