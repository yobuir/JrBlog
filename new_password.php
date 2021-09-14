<?php
session_start();
if (isset($_SESSION['login'])) {
	header('location:home.php');;
}
 
	include('conn.php'); 
 
?>

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php require"name.php"?>. Reset your password</title>
	<link rel="icon" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.8.1-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.8.1-web/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
	<script type="text/javascript" src="vendor/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="vendor/jquery-ui.min.js"></script>
	<script type="text/javascript" src="javs.js"></script>
	<script type="text/javascript" src="c_js/createpost.js"></script>
</head> 
<body class="loginbody">
	<div class="container p-4">
		<div class="row justify-content-center"> 
			<div class="col-lg-4 mt-5">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="p-3  text-muted">
							<h5>Create new <?php require"name.php"?> password</h5> 
						</div>
					</div>
					<div class="col-lg-12  containered shadow-sm rounded	">
						 
						<?php
    if (isset($_POST['send'])) {
      
    $password = $_POST['password']; 
if ($password=="") {
 ?>
        <div class="text-danger">
         *All fields are required !
          </div>
 <?php 
} 
else {
    
        if(isset($_GET['tkn'])){
        	if (isset($_GET['email'])) { 
            if(!empty($_GET['tkn'] and $_GET['email'])){ 
                $tkn=$_GET['tkn'];
                $email=$_GET['email'];
    $sele=mysqli_query($con,"SELECT * FROM users where email='$email' and token_='$tkn' ");
    if(mysqli_num_rows($sele)>0){
        
        $query = "UPDATE users set password='$password' where email='$email' and and token_='$tkn' ";
            
            $register_user = mysqli_query($con, $query);
            
            if(!$register_user) {
                die("Query Failed" . mysqli_error($con));
            }else{
            
            ?>
            <div class="text-success">
              Account password changed ! <a href="login.php">login now</a>
              </div>
            <?php
            }
        
    }else{
        ?>
            <div class="text-danger">
              * Invalid email ! <kbd><?php echo$email?></kbd> and token
              </div>
            <?php
    }
                
            }else{
                ?>
                <div class="text-danger">
                  * Invalid token !
                  </div>
                <?php
                
            }
        }
       }



}

}

?>
						<form class="row p-3" method="POST">  
							<div class="col-lg-12 mt-4">
								<label>Create a password.</label> 
								<input type="Password" name="password" placeholder="Enter Your new password" class="form-control <?php echo $style ?>">
							</div>
							<div class="col-lg-12 logined mt-4">
								<button type="submit" name="send" class="btn  text-muted rounded btn- btn-block "> Reset password</button>
							</div>
						</form>
					</div>
					<div class="col-lg-12 mt-3 containered rounded shadow-sm text-center p-3 text-muted">
						Or change mind <?php require"name.php"?> <a href="login.php" class="">Login </a>.
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>