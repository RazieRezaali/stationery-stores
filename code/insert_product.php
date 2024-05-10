<input type="button" onclick="window.location=\'admin_product.php\';" value="Back to products page" style="padding: 10px;">

<form action="insert_pro.php" method="post" enctype="multipart/form-data">
<br>name: <input type="text" name="name"><br><br>	
color:
blue<input type="radio" name="color" value="1" >
red<input type="radio" name="color" value="2" >
black<input type="radio" name="color" value="3" >
green<input type="radio" name="color" value="4" >
white<input type="radio" name="color" value="5" >
orange<input type="radio" name="color" value="6" >
monochrome<input type="radio" name="color" value="0" ><br><br>
type:
corrector<input type="radio" name="type" value="1" >
ruler<input type="radio" name="type" value="2" >
pencilcase<input type="radio" name="type" value="3" >
pen<input type="radio" name="type" value="4" >
pencil<input type="radio" name="type" value="5" >
notebook<input type="radio" name="type" value="6">
eraser<input type="radio" name="type" value="7" >
color_pencil_set<input type="radio" name="type" value="8" ><br><br>
stock: <input type="number" name="stock" value="0"><br><br>
price: <input type="text" name="price"><br><br>	
<input type="file" name="product_image" ><br><br>
<input type="submit" name="submit" value="insert" style="padding: 10px;" >
</form>


