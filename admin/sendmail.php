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
                            <input type="text" class="form-control1 control3" name="frommail" value="<?php echo $data['email']; ?>" />
                            <input type="email" class="form-control1 control3" name="tomail" placeholder="Please enter reciept email" />
                            <input type="file" class="form-control1 control3" name="application" placeholder="This is the attachment">
                            <hr>
                            <button type="button" class="btn btn-success" name="submit">Send mail</button>
                        </form>
                        
                    </div>
                    <?php } } ?>
                 </div>
              </div>
         </div>
         <div class="clearfix"> </div>
   </div>

<?php include 'inc/footer.php'; ?>