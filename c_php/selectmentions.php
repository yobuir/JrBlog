<?php

function selecting_mentioned($con){
	$selecting_mention=mysqli_query($con,"SELECT * FROM mentions");
	$fetchingisermentioned=mysqli_fetch_array($selecting_mention);
	echo$fetchingisermentioned['mentioned_user']; 
}
?>

