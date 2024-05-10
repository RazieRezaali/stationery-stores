<?php

require('config_admin.php');
$sql="select * from users where username!='Admin'";
$res=mysqli_query($link,$sql);


echo'<input type="button" onclick="window.location=\'admin_page.php\';" value="Back to Admin\'s Home" style="padding: 10px;">' ;

echo'<table border="5px"><tr bgcolor="#87B7CB"><td>row</td><td>first name</td><td>last name</td><td>phone</td><td>address</td><td>email</td><td>username</td><td>delete user</td></tr>';


$i=1;

while($row=mysqli_fetch_array($res)){
	echo'<tr>
			<td>'.$i.'</td>
			<td>'.$row['fname'].'</td>
			<td>'.$row['lname'].'</td>
			<td>'.$row['phone'].'</td>
			<td>'.$row['address'].'</td>
			<td>'.$row['email'].'</td>
			<td>'.$row['username'].'</td>
			<td><input type="button" onclick="window.location=\'delete_user.php?id='.$row['id'].'\';" value="delete"></td>
		</tr>';
	$i++;
}

echo'</table>' ;

?>