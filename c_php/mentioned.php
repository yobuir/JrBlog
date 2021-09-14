<?php
function mentioned_users($con,$content,$post_unique_id,$user_to_follow)
{

	$insert=mysqli_query($con," INSERT INTO `mentions`(`mentioned_user`, `mentioner_user`, `post`) VALUES ('$content','$user_to_follow','$post_unique_id')")or die($con->error);
	if ($insert){
		 
	}
		
	else{

	}
		

}
 
?>