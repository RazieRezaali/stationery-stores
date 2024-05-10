
<p>please enter your new password:</p><br>
<form action="insertnewpass.php" method="post">
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
new password: <input type="text" name="newpassword" ><br><br>
<input type="submit" name="submit" value="update password" ><br><br><br><br>
	
<?php
if(isset($_GET['er']) and $_GET['er']==1){
?>
<p>something went wrong, please try in a few minutes later!</p><br>
<form action="insertnewpass.php" method="post">
id: <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
new password: <input type="text" name="newpassword" ><br><br>
<input type="submit" name="submit" value="update password" ><br><br><br><br>	
<?php
}
?>


