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
<!-------View Portfolio------->
	
		
			<?php
		session_start();
	if(isset($_SESSION["student_id"])){
		
		?>
<div class="container"> 
	
  <div class="container band2">
	 
         <h3 class="pull-left">Weekly Report</h3>
	  <a  href="../html/student-upload-report.html">
        <button class="btn btn-default pull-right uploadurlbutton">NEW ENTRY</button> </a>
    </div>
	<div class="clearfix"></div>
	<a class="infoclick" href="../php/student-report-detail.php">
		
		<div class="container band">
 	<h3>Week 1</h3>
	<p class="reportdetail pull-left">Last Modified: 17:51, 03/27/2018</p>
	
	</div></a>
		<?php

	
include "db_connect.php";
	$stmt = $mysqli -> prepare("SELECT week,student_id,tsLastUpdated FROM tb_report WHERE student_id = ?"); 	

	$stmt -> bind_param("i", $_SESSION["student_id"]); 	
	$stmt -> execute(); 
	$stmt -> bind_result ($student_id,$week,$tsLastUpdated);
	
while($stmt -> fetch()) //read a row
{	
	if(isset($_SESSION["student_id"])&&($_SESSION["student_id"]==$student_id)){
	?>
		<a class="infoclick" href="../php/student-report-detail.php">
		
		<div class="container band">
 	<h3>Week <?=$week ?></h3>
	<p class="reportdetail pull-left">Last Modified:  <?=$tsLastUpdated ?></p>
	
	</div></a>
		
	
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
 

        <!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script-->
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		
	<!--<script src="js/bootstrap.bundle.js"></script>
		<script src="js/bootstrap.js"></script>-->
        <script src="../js/main.js"></script>
    </body>
</html>
