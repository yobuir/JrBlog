<?php 
$selectallusers=mysqli_query($con,"SELECT  count(following) as following FROM users,follow where  follow.follower='$user_to_follow' and follow.follow=1 and follow.following=users.unique_id");

$fetchalluser=mysqli_fetch_array($selectallusers);
echo($fetchalluser['following']);
?>
