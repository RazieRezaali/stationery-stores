<?php

require('config_admin.php');

$color=0;
switch($_POST['color']){
	case'blue':
		$color=1;
		break;
	case'red':
		$color=2;
		break;
	case'black':
		$color=3;
		break;
	case'green':
		$color=4;
		break;
	case 'white':
		$color=5;
		break;
	case'orange':
		$color=6;
		break;
	case'monochrome':
		$color=0;
		break;
}
															

$sql="update products set name='".$_POST['name']."', color_code=".$color.", image='".$_FILES['product_image']['name']."', stock=".$_POST['stock'].", price=".floatval($_POST['price'])."where code=".$_POST['code'];
$res=mysqli_query($link,$sql);

move_uploaded_file($_FILES['product_image']['tmp_name'],'products_image/'.$_FILES['product_image']['name']);


if(mysqli_affected_rows($link)>0){
	echo'<script>alert("your product updated successfully!");window.location= "update_product.php?code='.$_POST['code'].'"</script>';
}
else{
	echo'<script>alert("try again");window.location= "update_product.php?code='.$_POST['code'].'"</script>';
}



?>