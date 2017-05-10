<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
	<title>php</title>
</head>
<body>


<?php 
$credit = 13; 
// varibale with credits earned
$grad = 124; 
// total credit in order to graduate

if ( $credit <= 30 ){ 
//if credits are are less or equal than 30 than print freshman
echo "freshman" . "<br>";
}
elseif ( $credit >= 31 && $credit <= 60) { 
// if credits are are more or equal than 31 you a junior
	echo "softmoroe" . "<b>";

}

elseif ( $credit >= 61 && $credit <= 90) {
	echo "junior" . "<br>";
}
elseif ( $credit >= 61 && $credit <= 124) {
	echo "senior" . "<br>";
}
else {

echo "no school" . "<br>";



}
echo $grad - $credit . "<br>";
// credit you need in order to graduate minus credit earned




 ?>


 
 <?php 
//array super variable you can add a lot values
$numberlist = array("<br>","chicharon de pollo","<br>","arros habichuela y carne","<br>","burristo");
print_r($numberlist);
echo "<br>";



  ?>

  <?php 
//$number = array ('juanita', 'maria', 'jose');

//print_r($number);
//echo "<br>";
//echo  $number [2] . "<br>";

//array print_r which allows to you get the data by name
$names = array ("CS101" =>"<br>", 'Introduction to Computer Science',"<br>", "CS102" => 'Introduction to Computer Science II', "<br>", "CS2350" => 'Information and Web Programming');


//print_r($names); this will pop out with => and name
// $names and then put the data you this is associated array

 print_r($names); 




   ?>


</body>
</html>