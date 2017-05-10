<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="php.style.css">
	<title>Forms</title>
</head>
<body>


	<nav>
<ul>

		<li> <a class="selector" href="Porfio.php">Home</li></a>
		<li> <a class="selector" href="home.php">Work</li></a>	
		<li> <a class="selector" href="form.php">Form</li></a>	
		
		<li> <a class="selector1" href=""><a href="http://storm.cis.fordham.edu/~sanchez/">first project</li></a>

	
 </ul>

</nav>

<nav>

<?php 
echo "<br>";
echo $_POST ['first'];
echo "<br>";
echo $_POST ["Last"];
echo "<br>";
echo $_POST ["gender"];
echo "<br>";

echo $_POST ["message"];









 ?>

















<form action="form.php" method="POST">

<h1>Please fill out your information below</h1>
<br>

	<input type="text" name="first" value="First name">
	<input type="text" name="Last" value="Last name">
	<br>
	<input type="radio" name="gender" value="male">Male
	<br>
	<input type="radio" name="gender"  value="female">female
	<br>

	<textarea type="text" name="message" value="type message here"></textarea>
	<br>
	<button type="submit">submit</button>





</form>
</nav>





</body>
</html>





