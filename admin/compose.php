<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>


        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	       <h3>Compose a new message</h3>
  	         
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
                        <form method="post" action="form/application.php">
                            <input type="text" class="form-control1 control3" name="dat" placeholder="Please enter today date" required="" />
                            <input type="text" class="form-control1 control3" name="name" value="<?php echo $data['fullname']; ?>" required="" />
                            <input type="text" class="form-control1 control3" name="toname" placeholder="Please enter reciept name" required="" />
                            <input type="text" class="form-control1 control3" name="datefrom" placeholder="Please enter start date" required="" />
                            <input type="text" class="form-control1 control3" name="dateto" placeholder="Please enter end date" required="" />
                            <input type="text" class="form-control1 control3" name="dept" placeholder="Please enter your dept name" required="" />
                            <input type="text" class="form-control1 control3" name="reason1" placeholder="Please enter your reason to leave" required="" />
                            <input type="text" class="form-control1 control3" name="reason2" placeholder="Please enter your another reason to leave"/>
                            <input type="file" class="form-control1 control3" name="signature">
                            <hr>
                            <input type="submit" name="submit" value="Press Enter to have the form">
                        </form>
                        
                    </div>
                    <?php } } ?>
                 </div>
              </div>
         </div>
         <div class="clearfix"> </div>
   </div>

<?php include 'inc/footer.php'; ?>