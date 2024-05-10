<?php
if(isset($_GET['er']) and $_GET['er']==0){
?>
<p>Your registration has been completed successfully!<br>
please Login to view products :<br></p>
<form action="login.php" method="post">
username: <input type="text" name="username"><br><br>
password: <input type="password" name="password" ><br><br>
<input type="submit" name="submit" value="login" >
<?php
}


else if(isset($_GET['er']) and $_GET['er']==1){
?>
<p>your username or password is wrong!</p>
<p>please try again</p>
<form action="login.php" method="post">
username: <input type="text" name="username"><br><br>
password: <input type="password" name="password" ><br><br>
<input type="submit" name="submit" value="login" ><br><br><br><br>	
<p>forget your password?!</p>
<input type="button" onclick="window.location='Recover_pass.html';" value="Recover password" >
<?php
}

else if(isset($_GET['er']) and $_GET['er']==-1){
?>
<p>your password updated successfully!<br>
now you can login with your new password:</p>
<form action="login.php" method="post">
username: <input type="text" name="username"><br><br>
password: <input type="password" name="password" ><br><br>
<input type="submit" name="submit" value="login" ><br><br><br><br>
<?php
}


else{	
?>
<p>please Login to view products</p>
<form action="login.php" method="post">
username: <input type="text" name="username"><br><br>
password: <input type="password" name="password" ><br><br>
<input type="submit" name="submit" value="login" >
<p>Don't have an account?
<input type="button" onclick="window.location='register.php';" value="sign in" >
</p>
<?php
}
?>