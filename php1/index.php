<!DOCTYPE>
<html>
<head> 




<title>Homework assigment number 6</title>
<meta charset="utf-8"/> 


</head>

<body>
<h1>
<?php
//making a title of the list of my favorte food
$text1 = "Favorite and least favorite food";
//my list is call $text1
echo "$text1";
// closing my list php bracket
?></h1>





<p>Im going to share with you some of the food i <br/>like and some 

of the food  i dislike. Also i will <br/> share with you some of the classes that i will<br/>

  like to like in the futere as major requires </p>
 
<h2>
<?php
// title before i create a lit 
$title2 = "My Top Favorite food";
echo "$title2";
?>
	
</h2>

<?php 
//created my fav food list
$food=array("1.chicharon de pollo enpanizado sin hueso","2.Bisted ensebollado sin hueso","3.Chicken Parmesan","4.Chicken Burrito","5.Filet mignon");
//finished my list
//arrengment of thee the food
$arrlength=count($food);
//in what order do we want the food 
for($x=0;$x<$arrlength;$x++)
  {
  echo $food[$x];
  //picking the food and br which means everytime a food is listed it will break
  echo "<br>";
  }
?>

<p><strong>My least favorite food</strong>

<?php
//trying other stuff
$bad=array('oxtail','fishsoup');
list($a{0},$a{1}) = $bad;
var_dump($a);



//$bad=array("oxtail","fish soup","ratatoui","cricket");
// forreach ($bad as $bads) {
//intad of array i added list
	
//echo "<li>$bad</li>"

// }

// unset($bads) 

?>
</p>


    
   
<h4>
<?php  
$title4 = "List of class that interesting in taking";
echo "$title4";

?>
</h4>
	<p> 
	<?php  
	$Security = "1.cyber security";
	$forensis = "2.computer forensis";
	$Java = "3.java Programing";
	echo "$Security";
	echo "<br>";
	echo "$forensis";
	echo "<br>";
	echo "$Java";
	echo "<br>";
	


	 
	?>	
</p>

	</body>

by Angel Sanchez

