<?php

$id=$_GET['id'];

require('config_user.php');
$sql="select user_id,product_code,number from users_cart where user_id=".$id." and added_to_orders=0";
$res=mysqli_query($link,$sql);

echo'<input type="button" onclick="window.location=\'products.php?id='.$id.'\';" value="go to products page!" style="padding: 10px;">' ;

echo'<input type="button" onclick="print()" value="print my orders!" style="padding: 10px;">' ;

echo'<br><br><table border="5px"><tr bgcolor="#87B7CB"><td>row</td><td>name</td><td>price($)</td><td>number</td><td>total price($)</td><td>action</td><td>Admin_message</td></tr>';

if(mysqli_num_rows($res)>0){
	
	while($row=mysqli_fetch_array($res)){
		
		$sql2="insert into orders(user_id,product_code,number) values (".$row['user_id'].",".$row['product_code'].",".$row['number'].")";
		$res2=mysqli_query($link,$sql2);

		$sql3="update users_cart set added_to_orders=1 where user_id=".$row['user_id'];
		$res3=mysqli_query($link,$sql3);
	}
}

	
$sql4="select * from orders where user_id=".$id;
$res4=mysqli_query($link,$sql4);

if(mysqli_num_rows($res4)>0){	
	
	$i=1;
	$total=0;
	
	while($row4=mysqli_fetch_array($res4)){
		
		$sql1="select name,price from products where code=".$row4['product_code'];
		$res1=mysqli_query($link,$sql1);
		$row1=mysqli_fetch_array($res1);
		
		$t=$row1['price']*$row4['number'];
		$total+=$t;
		
		$action="";
		$color="";
		switch($row4['action']){
			case 0:
				$action="wait for admin's opinion";
				$color="#ffffff";
				break;
			case 1:
				$action="confirm by admin";
				$color="#1CEF8B";
				break;
			case 2:
				$action="edited by admin";
				$color="#D4ED1F";
				break;
			case 3:
				$action="deleted by admin";
				$color="#EF161A";
				break;	
		}
		
		echo'<tr bgcolor="'.$color.'">
			<td>'.$i.'</td>
			<td>'.$row1['name'].'</td>
			<td>'.$row1['price'].'</td>
			<td>'.$row4['number'].'</td>
			<td>'.$t.'</td>';
	
		$i++;
		
		
			
		echo'
			<td>'.$action.'</td>
			<td size="300">'.$row4['admin_message'].'</td>
			</tr>';
		}
		
	echo'</table>' ;
	
	echo '<br><table border="1px" ><tr><td>Purchase amount  =  '.$total.'</td></tr></table><br>';
}
else{
	echo'<script>alert("your orders is empty!");window.location= "products.php?id='.$id.'"</script>';
}


?>