<?php

echo'<input type="button" onclick="window.location=\'admin_product.php\';" value="Back to products page" style="padding: 10px;">' ;

if(isset($_GET['code'])){
require('config_admin.php');
$sql="select * from products where code=".$_GET['code'];
$res=mysqli_query($link,$sql);
$row=mysqli_fetch_array($res);
?>
<table>
<form action="update_pro.php" method="post" enctype="multipart/form-data">
	
<tr><td>name: <input type="text" name="name" value="<?php echo $row['name'] ;?>"></td></tr><br><br>
	
<tr><td>color: <input type="text" name="color" value="<?php switch($row['color_code']){
																case 1:
																	$color="blue";
																	break;
																case 2:
																	$color="red";
																	break;
																case 3:
																	$color="black";
																	break;
																case 4:
																	$color="green";
																	break;
																case 5:
																	$color="white";
																	break;
																case 6:
																	$color="orange";
																	break;
																case 0:
																	$color="monochrome";
																	break;
															}
															echo $color;
															?>"></td></tr><br><br>

<tr><td>stock: <input type="number" name="stock" value="<?php echo $row['stock'] ;?>"></td></tr><br><br>
<tr><td>price: <input type="text" name="price" value="<?php echo $row['price'] ;?>"></td></tr><br><br>	
<tr><td><img width="200" height="200" src="products_image/<?php echo $row['image']; ?>"></td>
	<td><input type="file" name="product_image" ></td></tr><br><br>
<input type="hidden" name="code" value="<?php echo $row['code']; ?>">
<tr><td><input type="submit" name="submit" value="update" ></td></tr>
</form>
</table>
<?php
}

else{
	echo 'Directory access is forbidden!';
}
?>
