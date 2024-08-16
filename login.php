<?php  

$connection = new mysqli('localhost','root','','sanjukta_book_entry');
$display='';
session_start();
if(isset($_POST['login'])){
	extract($_POST);
	$password = md5($password);
	$sql = "SELECT * FROM `login` WHERE `username`='$username' AND `password`='$password'";
	$res = $connection->query($sql);
	$count = mysqli_num_rows($res);
	if($count>0){
		$_SESSION['username']=$username;
		header("location:tables.php");
	}else{
		$display = "Username or Password incorrect";
	}
}
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Login </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="required/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(required/images/bg-1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Login</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<?php echo $display; ?>
									</p>
								</div>
			      	</div>
							<form action="" method="POST" class="signin-form">
			      		<div class="form-group mt-3">
			      			<input type="text" name="username" class="form-control" required>
			      			<label class="form-control-placeholder" for="username">Username</label>
			      		</div>
		            <div class="form-group">
		              <input id="password-field" type="password" name="password" class="form-control" required>
		              <label class="form-control-placeholder" for="password">Password</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<button type="submit" name="login" class="form-control btn btn-primary rounded submit px-3">Log In</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	
									</div>
									<div class="w-50 text-md-right">
										
									</div>
		            </div>
		          </form>
		          <p class="text-center">Don't have an account? <a href="signup.php">Sign Up</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="required/js/jquery.min.js"></script>
  <script src="required/js/popper.js"></script>
  <script src="required/js/bootstrap.min.js"></script>
  <script src="required/js/main.js"></script>

	</body>
</html>

