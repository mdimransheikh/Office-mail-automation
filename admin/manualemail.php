<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>


        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	       <h3>Compose a new message</h3>

<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $toemail = $fm->validation($_POST['tomail']);
    $fromemail = $fm->validation($_POST['frommail']); 
    $subject = $fm->validation($_POST['subject']); 
    $message = $fm->validation($_POST['message']);

    $sendEmail =  mail($toemail ,$subject ,$message);
    if($sendEmail){
        echo "Message sent successfully";
    }else{
        echo "Something went wrong.!!";
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
                        <label>My Email : </label>
                        <input type="email" class="form-control1 control3" value="<?php echo $data['email']; ?>" name="frommail" />
                        <label>Enter Receiver Email : </label>
                        <input type="email" class="form-control1 control3" name="tomail"/>
                        <label>Enter Subject :  </label>
                        <input type="text" class="form-control1 control3" name="subject">
                        <label>Enter Message : </label>
                        <textarea rows="6" class="form-control1 control2" name="message"></textarea>
                        <hr>
                        <input type="submit" name="submit" class="form-control1 control3" value="Send">
                    </div>
                    <?php } } ?>
                 </div>
              </div>
         </div>
         <div class="clearfix"> </div>
   </div>

<?php include 'inc/footer.php'; ?>