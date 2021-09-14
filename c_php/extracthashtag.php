<?php
function hashtagse($content)
{
	  
	if(preg_match_all('/#(\w+)/', $content, $matches)){
	$hashtags=$matches[1];
	$content=preg_replace('/#(\w+)/', '<a href="hashtags.php?hashtags=$1">#$1</a>', $content); 
	echo'#$1'; 
	$insert=mysqli_query($con,"INSERT INTO tags Values('','$hashtags')");
}
}
?>