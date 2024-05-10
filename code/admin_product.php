<?php

require('config_admin.php');
$sql="select code,name,color_code,image,stock,price from products ";
$res=mysqli_query($link,$sql);


echo'<input type="button" onclick="window.location=\'admin_page.php\';" value="Back to Admin\'s Home" style="padding: 10px;">' ;

echo'<input type="button" onclick="window.location=\'insert_product.php\';" value="insert new product" style="padding: 10px;">' ;

echo'<table border="5px"><tr><td>row</td><td>name</td><td>color</td><td>image</td><td>stock</td><td>price($)</td><td>update</td><td>update</td></tr>';


$i=1;

while($row=mysqli_fetch_array($res)){
	echo'<tr>
			<td>'.$i.'</td>
			<td>'.$row['name'].'</td>';
	switch($row['color_code']){
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
	echo'
			<td>'.$color.'</td>
			<td><img width="200" height="200" src="products_image/'.$row['image'].'"/></td>
			<td>'.$row['stock'].'</td>
			<td>'.$row['price'].'</td>
			<td><input type="button" onclick="window.location=\'update_product.php?code='.$row['code'].'\';" value="update"></td>
			<td><input type="button" onclick="window.location=\'delete_product.php?code='.$row['code'].'\';" value="delete"></td>
		</tr>';
	$i++;
}

echo'</table>' ;

?>