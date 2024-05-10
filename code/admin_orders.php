<?php

echo'<input type="button" onclick="window.location=\'admin_page.php\';" value="Back to Admin\'s Home" style="padding: 10px;">' ;
echo'<input type="button" onclick="print()" value="print all orders" style="padding: 10px;">' ;

require('config_admin.php');
$sql="select id,user_id,product_code,number,action,admin_message from orders where action!=3";
$res=mysqli_query($link,$sql);

echo'<br><br><table border="5px"><tr bgcolor="#87B7CB"><td>row</td><td>Client</td><td>product name</td><td>price($)</td><td>number</td><td>total price($)</td><td>action</td><td>Admin_message</td></tr>';

if(mysqli_num_rows($res)>0){
	
	$i=1;
	$total=0;
	
	while($row=mysqli_fetch_array($res)){
		
		$sql2="select name,price from products where code=".$row['product_code'];
		$res2=mysqli_query($link,$sql2);
		$row2=mysqli_fetch_array($res2);
		
		$sql3="select fname , lname from users where id=".$row['user_id'];
		$res3=mysqli_query($link,$sql3);
		$row3=mysqli_fetch_array($res3);
		
		$t=$row2['price']*$row['number'];
		$total+=$t;
		
		$color="";
		switch($row['action']){
			case 0:
				$color="#ffffff";
				break;
			case 1:
				$color="#1CEF8B";
				break;
			case 2:
				$color="#D4ED1F";
				break;	
		}
		
		echo'<tr bgcolor="'.$color.'">
			<td>'.$i.'</td>
			<td>'.$row3['fname'].$row3['lname'].'</td>
			<td>'.$row2['name'].'</td>
			<td>'.$row2['price'].'</td>
			
			<td><form action="update_order.php" method="post">
			<input type="number" value="'.$row['number'].'" name="number" >
			<input type="hidden" value="'.$row['id'].'" name="id">
			<input type="submit" value="update the number">
			</form></td>
			
			<td>'.$t.'</td>
			
			<td>
				<input type="button" onclick="window.location=\'delete_order.php?id='.$row['id'].'\';" value="delete">
				<input type="button" onclick="window.location=\'confirm_order.php?id='.$row['id'].'\';" value="confirm">
			</td>
			
			<td>
			<form action="message.php" method="post">
			<input size="100" type="text" name="message" value="'.$row['admin_message'].'">
			<input type="hidden" value="'.$row['id'].'" name="id">
			<input type="submit" value="submit">
			</form>
			</td>
			</tr>';
			

		
		$i++;
	}
	
	echo '</table><br><table border="1px" ><tr><td>Purchase amount  =  '.$total.'</td></tr></table><br>';	
}
	
else{
	echo'<script>alert("your orders is empty!");window.location= "products.php?id='.$id.'"</script>';
}

?>