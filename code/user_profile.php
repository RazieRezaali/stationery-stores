<?php
if(isset($_GET['id'])){
require('config_user.php');
$sql="select id , fname , lname , phone , address , email from users where id=".$_GET['id'];
$res=mysqli_query($link,$sql);
$row=mysqli_fetch_array($res);
?>
<form action="update.php" method="post">
First name: <input type="text" name="fname" value="<?php echo $row['fname'] ;?>"><br><br>
Last name: <input type="text" name="lname" value="<?php echo $row['lname'] ;?>"><br><br>
Phone: <input type="text" name="phone" value="<?php echo $row['phone'] ;?>"><br><br>
address: <input type="text" name="address" maxlength="100" size="100" value="<?php echo $row['address'] ;?>"><br><br>
email: <input type="text" name="email" value="<?php echo $row['email'] ;?>"><br><br>
<input type="hidden" name="id" value="<?php echo $row['id'] ;?>"><br><br>
<input type="submit" name="submit" value="update my profile" >
<?php
}
else{
	echo 'Directory access is forbidden!';
}
?>