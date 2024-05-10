<?php

$id=$_GET['id'];

require('config_user.php');
$sql="select id,product_code,number from users_cart where user_id=".$id." and added_to_orders=0";
$res=mysqli_query($link,$sql);


echo'<input type="button" onclick="window.location=\'products.php?id='.$id.'\';" value="go to products page!" style="padding: 10px;">' ;

echo'<br><br><table border="5px"><tr><td>row</td><td>name</td><td>image</td><td>price($)</td><td>number</td><td>total price($)</td><td>delete</td></tr>';

if(mysqli_num_rows($res)>0){
	$i=1;
	$total=0;
	while($row=mysqli_fetch_array($res)){
		$sql="select name,price,image from products where code=".$row['product_code'];
		$res1=mysqli_query($link,$sql);
		$row1=mysqli_fetch_array($res1);
		echo'<tr>
				<td>'.$i.'</td>
				<td>'.$row1['name'].'</td>
				<td><img width="200" height="200" src="products_image/'.$row1['image'].'"/></td>
				<td>'.$row1['price'].'</td>
				<td>'.$row['number'].'</td>';
		
		$t=$row1['price']*$row['number'];
		$total+=$t;
		
		echo'
				<td>'.$t.'</td>
				<td><input type="button" onclick="window.location=\'delete.php?id='.$row['id'].'\';" value="delete" ></td>
			</tr>';
		$i++;
	}
	
	echo'</table>' ;
	
	echo '<br><table border="1px" ><tr><td>Purchase amount  =  '.$total.'</td></tr></table><br>';
	echo '<input type="button" onclick="window.location=\'orders.php?id='.$id.'\';" value="Finalize the order" style="padding: 10px;">';
}
else{
	echo'<script>alert("your cart is empty!");window.location= "products.php?id='.$id.'"</script>';
}


?>