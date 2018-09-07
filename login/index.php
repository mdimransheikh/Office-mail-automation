<?php include '../lib/database.php'; ?>
<?php include '../helpers/Format.php'; ?>

<?php
	include '../lib/Session.php';
	Session::init(); 
?>

<?php 
	$db = new Database();
	$fm = new Format();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Login Form</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Branded Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="../registration/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- //online-fonts -->

</head>
<body>
<div class="w3-agile-banner">
	<div class="center-container">
		<!--header-->
		<div class="header-w3l">
			<h1></h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-content-agile">
			<div class="wthree-pro">
				<h2>Login Now</h2>
			</div>
			<div class="sub-main-w3">	
	<?php 
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$email = $fm->validation($_POST['email']);
			$password = $fm->validation($_POST['password']);
			$occupation = $fm->validation($_POST['occupation']);

			$email = mysqli_real_escape_string($db->link, $email);
			$password = mysqli_real_escape_string($db->link, $password);
			$occupation = mysqli_real_escape_string($db->link, $occupation);

			$query = "SELECT * FROM tbl_user WHERE email='$email' AND password = '$password'";
			$result = $db->select($query);
			if($result != false){
				$value = mysqli_fetch_array($result);
				$row = mysqli_num_rows($result);
				if($row > 0){
					Session::set("login", true);
					Session::set("occupation", $value['occupation']);
					Session::set("userId", $value['id']);
					echo "<script>location.href='../admin/index.php'; </script>";
				}else{
					echo "<span style='color:red;font-size:18px'>No result found !! </span>";
				}
			}else{
				echo "<span style='color:red;font-size:18px'>User and password are not matched. !! </span>";
			}

		}
	?>
				<form action="" method="post">
					<input placeholder="E-mail" name="email" type="email" required="">
					<input  placeholder="Password" name="password" type="password" required="">
					<div class="clear"></div>
					<div class="phone_email">
					<div class="span1_of_1">
						<div class="section_room">
							<select id="country" class="frm-field required" name="occupation">
								<option value="student">Student</option>
								<option value="teacher">Teacher</option>
								<option value="stuff">Stuff</option>    
							</select>
						</div>	
					</div>
					</div>
					<input type="submit" value="Login">
				</form>
			</div>
		</div>
		<!--//main-->
		<!--footer-->
		<div class="footer">
			<p>&copy; Md Al-amin 2017 . All rights reserved </p>
		</div>
		<!--//footer-->
	</div>
</div>
</body>
</html>