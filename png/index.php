<!doctype html>
<meta charset="utf-8">
<html>
<head>
<style>
p { clear: both; }
div.cards {
  text-align: justify;
  padding: 2em;
} 
div.text {
  text-align: justify;
  padding: 2em;
} 
</style>
<!-- "thank you" "dear" 1960s paedos for activating CCS Suicide Death Bot against me-->
</head>
<body onhashchange="myFunction();">>
<script>
function myFunction() {
	var allCards = document.getElementsByClassName("card");
	for (i=0; i<allCards.length; i++)
	{
		allCards[i].style = "border: 10px solid white;float:left;text-align:center;";
		console.log(i);
	}	
	var card = window.location.hash.substr(1);
        console.log(card);	
	document.getElementById(card).style = "border: 10px solid red;float:left;text-align:center;";
}

document.addEventListener("DOMContentLoaded", function(event) {
  myFunction();
});
</script>

<div class="text">
<h1>Mein Gespinne</h1>
   <?php

  $page = $_GET['page'];
  $nImages = $_GET['images'];

  if(!isset($nImages) 
  {
    $nImages=50;
  }

  if(!isset($page) 
  {
    $page=0;
  }

  $startPage = $page * $nImages;
  $endPage = ( $page + 1) * $nImages;

  $files = glob("*.*");

  natsort($files);

  for ($i=0; $i<count($files); $i++) // changed
  {

    if ($i < $startPage)
    { 
      continue;
    }

    $image = $files[$i];
    $supported_file = array( 'gif', 'jpg', 'jpeg', 'png' );

    $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    if (in_array($ext, $supported_file))
    {

      $parts = explode(".", $image);
      echo '<div id="'.$parts[0].'" class="card" style="border: 10px solid white;float:left;text-align:center;">';
      echo "<font color=green>" . $parts[0] . "</font>" . "<br>";
      echo '<a href="./'.$image .'" id="'.$parts[0].'"'.' target="_blank"><img width=200 src="'.$image .'" ></a><br>';
      echo '</div>
';
    if ($i > $endPage)
    {
      break;
    }  
}

?>
<br>
<br>
<br>
</p>
</div>
<p>
<div class="text">
<br>
Marc jr Landolt<br>
eidg. dipl Informatiker HF<br>
Neuenburgerstrasse 6<br>
5004 Aarau<br>
mail@marclandolt.ch<br>
062 822 61 31 (mostly unplugged)<br>
078 674 15 32 (mostly switched off)<br>
</p>
</body>
</html>

