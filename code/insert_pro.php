<?php

require('config_admin.php');

$sql="insert into products(name,type,color_code,image,stock,price) values('".$_POST['name']."',".$_POST['type'].",".$_POST['color'].",'".$_FILES['product_image']['name']."',".$_POST['stock'].",".floatval($_POST['price']).")";
$res=mysqli_query($link,$sql);

move_uploaded_file($_FILES['product_image']['tmp_name'],'products_image/'.$_FILES['product_image']['name']);


if(mysqli_affected_rows($link)>0){
	echo'<script>alert("your product inserted successfully!");window.location= "admin_product.php"</script>';
}
else{
	echo'<script>alert("try again");window.location= "insert_product.php"</script>';
}



?>