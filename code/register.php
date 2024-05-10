<?php

if(isset($_GET['id'])){
require('config_user.php');
$sql="select * from users where id=".$_GET['id'];
$res=mysqli_query($link,$sql);
$row=mysqli_fetch_array($res);
?>

<p>your username is duplicated, please choose another username!</p>
<form action="insert_register.php" method="post">
First name: <input type="text" name="fname" value="<?php echo $row['fname'] ;?>"><br><br>
Last name: <input type="text" name="lname" value="<?php echo $row['lname'] ;?>"><br><br>
Phone: <input type="text" name="phone" value="<?php echo $row['phone'] ;?>"><br><br>
address: <input type="text" name="address" maxlength="100" size="100" value="<?php echo $row['address'] ;?>"><br><br>
email: <input type="text" name="email" value="<?php echo $row['email'] ;?>"><br><br>
username: <input type="text" name="username"><br><br>
password: <input type="text" name="password" ><br><br>
<input type="submit" name="submit" value="register" >
<?php
}
else if(isset($_GET['er']) and $_GET['er']==1)
{
?>
<p>something went wrong, please try to register again in a few minutes later!</p>
<form action="insert_register.php" method="post">
First name: <input type="text" name="fname"><br><br>
Last name: <input type="text" name="lname" ><br><br>
Phone: <input type="text" name="phone"><br><br>
address: <input type="text" name="address" maxlength="100" size="100" ><br><br>
email: <input type="text" name="email"><br><br>
username: <input type="text" name="username"><br><br>
password: <input type="text" name="password" ><br><br>
<input type="submit" name="submit" value="register" >
<?php
}
else
{
?>

<p>please fill the form and click on the register button to create an account!</p>
<form action="insert_register.php" method="post">
First name: <input type="text" name="fname"><br><br>
Last name: <input type="text" name="lname" ><br><br>
Phone: <input type="text" name="phone"><br><br>
address: <input type="text" name="address" maxlength="100" size="100" ><br><br>
email: <input type="text" name="email"><br><br>
username: <input type="text" name="username"><br><br>
password: <input type="text" name="password" ><br><br>
<input type="submit" name="submit" value="register" >
	
<?php
}
?>
