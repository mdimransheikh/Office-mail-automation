<?php include '../lib/Session.php'; ?>
<?php include '../lib/database.php'; ?>
<?php include '../helpers/Format.php'; ?>


<?php 
	$db = new Database();
	$fm = new Format();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Registration form</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Fare Order Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
<!--//fonts--> 
</head>
<body>
<!--background-->
<h1> Office Mail Automation System </h1>
    <div class="bg-agile">
	<div class="book-appointment">
		<div class="book-form agileits-login">

<?php 
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $fullname = mysqli_real_escape_string($db->link, $_POST['fullname']);
        $email = mysqli_real_escape_string($db->link, $_POST['email']);
        $phone = mysqli_real_escape_string($db->link, $_POST['phone']);
        $address = mysqli_real_escape_string($db->link, $_POST['address']);
        $password = mysqli_real_escape_string($db->link, $_POST['password']);
        $occupation = mysqli_real_escape_string($db->link, $_POST['occupation']);
        
       
        if($fullname == '' || $email == '' || $phone == '' || $address == '' || $password == '' || $occupation == ''){
            echo "<span class='error'>Field must not be empty. !!</span>";
        }else{
        $query = "INSERT INTO tbl_user(fullname,email,phone,address,password,occupation) VALUES('$fullname','$email','$phone','$address','$password','$occupation')";
        $inserted_rows = $db->insert($query);
        if ($inserted_rows !=false) {
         echo "<span style='font-size:18px;color:green'>Registration is successful !!
         </span>";
         echo "<script>location.href='../login/index.php'; </script>";
        }else {
         echo "<span style='font-size:18px;color:red'>Something went wrong !!</span>";
        }
    }
}
?>

			<form action="#" method="post">
				<div class="phone_email">
					<label>Full name : </label>
					<div class="form-text">
						<i class="fa fa-user" aria-hidden="true"></i>
						<input type="text" name="fullname" placeholder="" required="">
					</div> 
				</div>
				<div class="phone_email phone_email1">
					<label>Email : </label>
					<div class="form-text">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<input type="email" name="email" placeholder="" required="">
					</div>
				</div>
				<div class="phone_email">
					<label>Phone number : </label>
					<div class="form-text">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<input type="text" name="phone" placeholder="" required="">
					</div> 
				</div> 
				<div class="phone_email phone_email1">
					<label>Address : </label>
					<div class="form-text">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						<input type="text" name="address" placeholder="" required="">
					</div> 
				</div>
				<div class="phone_email">
					<label>Password : </label>
					<div class="form-text">
						<i class="fa fa-user" aria-hidden="true"></i>
						<input type="text" name="password" placeholder="" required="">
					</div> 
				</div>
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
				<div class="clear"></div>
				<input type="submit" value="Registration Now">
			</form>
		</div>

		</div>
   </div>
   <!--copyright-->
			<div class="copy w3ls">
		       <p>&copy; 2017 . All Rights Reserved by Md. Al-amin</p>
	        </div>
		<!--//copyright-->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- Calendar -->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>
<script>
	  $(function() {
		$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
	  });
</script>
<!-- //Calendar -->

</body>
</html>