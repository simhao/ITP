<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!--<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/bootstrap-grid.css">
		<link rel="stylesheet" href="css/bootstrap-reboot.css">
		<link rel="stylesheet" href="css/bootstrap.css">-->
        <link rel="stylesheet" href="../css/main.css">

        <script src="../html/js/vendor/modernizr-2.8.3.min.js"></script>
		
		
    </head>
    <body>
	<?php
 		include "nav.php";
			
			?>
	
<!-------View Portfolio------->
<div class="container"> 
	
	<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      
      <div class="modal-body text-center">
       Password successfully changed.
      </div>
      <div class="modal-footer popupfooter">
        <button style="width: 70px;" type="button" class="btn btn-secondary buttonpopup" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>
	<div class="container band2">
	 
		<h3 class="text-center">Student Profile</h3>
    </div>
	<br>
	<br>
	<?php 
	session_start();
	?>
	<?php
				
	include "db_connect.php";
	$stmt = $mysqli -> prepare("SELECT student_id,admin_no,Name,Email,Batch,Assign_Company FROM tb_student WHERE student_id = ?"); 	

	$stmt -> bind_param("i", $_SESSION["student_id"]); 	
	$stmt -> execute(); 
	$stmt -> bind_result ($student_id,$admin_no,$Name,$Email,$Batch,$Assign_Company);
	$stmt -> fetch();
			
	
?>
	<div class="container band2">
	<dl class="row">
		<dd class="col-sm-12 text-center">Name: <?php echo $Name; ?></dd>
		<dd class="col-sm-12 text-center">admin No.: <?php echo $admin_no; ?></dd>
		<dd class="col-sm-12 text-center">Batch: <?php echo $Batch; ?></dd>
		<dd class="col-sm-12 text-center">Email: <?php echo $Email; ?></dd>
		<dd class="col-sm-12 text-center">Assign_Company: <?php echo $Assign_Company; ?></dd>
        <dd class="col-sm-12 text-center">Assign_Company: <?php echo $Assign_Company; ?></dd>
		
		
	</dl>
		<br>
		<br>
		<dl class="row">
			<dd class="col-sm-12 text-center">Change Password</dd>
			</dl>
		
	<form>
  <div class="form-group">
			<label style="padding-top: 8px;" class="col-sm-5 text-right align-middle">Current Password:</label>
	  <div class="col-sm-7">
			<input class="form-control" placeholder="Lorem Ipsum">
		  </div>
		</div>
		<br>
		<div style="margin-top: 30px;" class="form-group">
			<label style="padding-top: 8px;" class="col-sm-5 text-right align-middle">New Password:</label>
	  <div class="col-sm-7">
			<input class="form-control" placeholder="Lorem Ipsum">
		  </div>
		</div>
		<br>
		<div style="margin-top: 30px;" class="form-group">
			<label style="padding-top: 8px;" class="col-sm-5 text-right align-middle">Confirm Password:</label>
	  <div class="col-sm-7">
			<input class="form-control" placeholder="Lorem Ipsum">
		  </div>
		</div>
		<br>
		
		<button type="button" style="margin-left: 10px;margin-top: 30px;" class="btn btn-danger buttonpopup pull-right"  data-toggle="modal" data-target=".bd-example-modal-sm">Update</button>
		<a class="infoclick" href="../html/student-portfolio-history.html"><button type="button" style="margin-top: 30px;" class="btn btn-secondary buttonpopup pull-right">Cancel</button></a>
		</form>
					
			<?php		
			
			$stmt -> close();  	 	
		$mysqli -> close();	
			
			?>
		</div>
	  <!--<div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    
  </div>-->
	  </div>
    


 

        <!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script-->
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		
	<!--<script src="js/bootstrap.bundle.js"></script>
		<script src="js/bootstrap.js"></script>-->
        <script src="../js/main.js"></script>
    </body>
</html>
