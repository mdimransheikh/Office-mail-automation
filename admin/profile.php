<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>


        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	       <h3>Update your profile</h3>
<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
    $id = mysqli_real_escape_string($db->link, $_POST['id']);
    $fullname = mysqli_real_escape_string($db->link, $_POST['fullname']);
    $email = mysqli_real_escape_string($db->link, $_POST['email']);
    $password = mysqli_real_escape_string($db->link, $_POST['password']);
    $phone = mysqli_real_escape_string($db->link, $_POST['phone']);
    $address = mysqli_real_escape_string($db->link, $_POST['address']);

    if(empty($fullname) || empty($email) || empty($password) || empty($phone) || empty($address)){
        echo "<span style='color:red'>Field must not be empty. !!</span>";
    }else{
        $query = "UPDATE tbl_user 
                    SET fullname = '$fullname',
                    email = '$email',
                    password = '$password',
                    phone = '$phone',
                    address = '$address'
                    WHERE id='$id'";
        $result = $db->update($query);
        if($result != false){
            echo "<span style='color:green'>You have succefully updated your profile !!</span>";
        }else{
            echo "<span style='color:red'>Something went wrong. !!</span>";
        }
    }
}
?>
  	         
        <div class="col-md-10 inbox_right">
        	<div class="Compose-Message">               
                <div class="panel panel-default">
                    <?php
                        if(isset($_SESSION['userId'])){
                            $id = $_SESSION['userId'];
                        }
                        
                        $query = "SELECT * FROM tbl_user WHERE id='$id'";
                        $result = $db->select($query);
                        if($result != false){
                            while ($data = $result->fetch_assoc()) {
                    ?>
                    <div class="panel-body">
                        <form method="post" action="">
                            <input type="text" class="form-control1 control3" name="id" value="<?php echo $data['id']; ?>" readonly="" style="display:none;" />
                            <input type="text" class="form-control1 control3" name="fullname" value="<?php echo $data['fullname']; ?>" />
                            <input type="text" class="form-control1 control3" name="email" value="<?php echo $data['email']; ?>" />
                            <input type="text" class="form-control1 control3" name="password" value="<?php echo $data['password']; ?>"/>
                            <input type="text" class="form-control1 control3" name="phone" value="<?php echo $data['phone']; ?>"/>
                            <input type="text" class="form-control1 control3" name="address" value="<?php echo $data['address']; ?>"/>
                            <hr>
                            <input type="submit" class="form-control1 control3" name="submit" value="Update your profile"/>
                        </form>
                    </div>
                    <?php } } ?>
                 </div>
              </div>
         </div>
         <div class="clearfix"> </div>
   </div>

<?php include 'inc/footer.php'; ?>