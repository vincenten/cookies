<?php 
$name = "";
if(isset($_POST["name"])){
	setcookie("name" , ($_POST["name"]));
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <a href="?delete">delete</a>
 <?php  
 if(isset($_GET['delete'])) {

setcookie("name" ,"",strtotime("-1 year" ));
header("location: cookies.php");

exit;
}

 if(isset($_COOKIE["name"])){
	 echo "<h1>Hallo"."$name"."</h1>";
	} else {
 ?>
 	<form method="post">
 		<input type="name" name="name">
 		<input type="submit">
 	</form>	
 	<?php 

 		}
  ?>
 </body>
 </html>