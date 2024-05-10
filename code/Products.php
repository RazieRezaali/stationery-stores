<?php

$id=$_GET['id'];

require('config_user.php');
$sql="select code,name,color_code,image,price from products where stock>0";
$res=mysqli_query($link,$sql);


echo'<input type="button" onclick="window.location=\'users_cart.php?id='.$id.'\';" value="visit my cart!" style="padding: 10px;">' ;
echo'<input type="button" onclick="window.location=\'orders.php?id='.$id.'\';" value="visit my orders!" style="padding: 10px;" >' ;
echo'<input type="button" onclick="window.location=\'user_profile.php?id='.$id.'\';" value="visit my profile!" style="padding: 10px;" ><br><br><br><br>' ;
echo'<table border="5px"><tr><td>row</td><td>name</td><td>color</td><td>image</td><td>price($)</td><td>add to my cart</td></tr>';
echo '<form action="cart.php" method="post">';

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
			<td>'.$row['price'].'</td>
			<td>	
				<input type="hidden" name="product[]" value="'.$row['code'].'">
				<input type="number" name="number[]" value="0" >
			</td>
		</tr>';
	$i++;
}

echo'<tr><td><input type="submit" value="add checked products to my cart" style="padding: 10px;"><input type="hidden" name="id" value="'.$id.'"></td></tr></form></table>' ;

?>