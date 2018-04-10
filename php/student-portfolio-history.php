

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
        
        <link rel="stylesheet" href="../css/main.css">

        <script src="../html/js/vendor/modernizr-2.8.3.min.js"></script>
		
		
    </head>
	
		
    <body>

<?php
		
 		include "nav.php";
			
			?>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
<!-------View Portfolio------->
		<?php
		session_start();
	if(isset($_SESSION["student_id"])){
		
		?>
<div class="container">  
	<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      
      <div class="modal-body text-center">
        Are you sure you want to
delete this portfolio?
      </div>
      <div class="modal-footer popupfooter">
        <button type="button" class="btn btn-secondary buttonpopup" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger buttonpopup">Delete</button>
      </div>
    </div>
  </div>
</div>
  <div class="container band2">
	 
         <h3 class="pull-left">My Portfolio</h3>

        <a class="infoclick" href="../php/student-upload-portfolio.php"><button class="btn btn-default pull-right uploadurlbutton">Upload URL</button></a>
        <div class="clearfix"></div>
    </div>
	  <!--<h3>Portfolio</h3>-->
	
	
	<div class="container band">
  <h3>Portfolio Title</h3>
		<a href="https://www.google.com.sg" target="_blank">www.google.com.sg</a>
  <p>Description</p>
  <p>
		<td><a href="#" class="confirm-delete btn mini red-stripe pull-right delete" data-toggle="modal" data-target=".bd-example-modal-sm"><span class="glyphicon glyphicon-trash"></span></a></td>
	  
		<td><a class="btn mini blue-stripe edit pull-right" href="../html/student-edit-portfolio.html"><span class="glyphicon glyphicon-pencil"></span></a></td></p>
	
		
	</div>
	<?php

	
include "db_connect.php";
	$stmt = $mysqli -> prepare("SELECT * FROM tb_protfolio WHERE student_id = ?"); 	

	$stmt -> bind_param("i", $_SESSION["student_id"]); 	
	$stmt -> execute(); 
	$stmt -> bind_result ($id,$student_id,$URL,$Description,$Title);
	
while($stmt -> fetch()) //read a row
{	
	if(isset($_SESSION["student_id"])&&($_SESSION["student_id"]==$student_id)){
	?>
		<div class="container band">
  <h3><?=$Title ?></h3>
		<a href="<?=$URL ?>" target="_blank"><?=$URL ?></a>
  <p><?=$Description ?></p>
  <p>
		<td><a href="#" class="confirm-delete btn mini red-stripe pull-right delete" data-toggle="modal" data-target=".bd-example-modal-sm"><span class="glyphicon glyphicon-trash"></span></a></td>
	  
		<td><a class="btn mini blue-stripe edit pull-right" href="../html/student-edit-portfolio.html"><span class="glyphicon glyphicon-pencil"></span></a></td></p>
	
		
	</div>
	<?php
	//check if it is logged in and post created by current user
	 
	}	

	
}
$stmt -> close(); //end the SQL statement
$mysqli -> close(); //close connection	
	
?>
	
	

	  <!--<div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    
  </div>-->
	  </div>
			<?php
	}else{
		echo "You have not logged in.";
		?>
			<a href="student-login.php">Login</a>
		<?php
	}
?>
<br><br>


 

        <!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script-->
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		
	<!--<script src="js/bootstrap.bundle.js"></script>
		<script src="js/bootstrap.js"></script>-->
        <script src="../js/main.js"></script>
	
    </body>
</html>
