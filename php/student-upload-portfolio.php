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
	<?php
		
 		session_start();
			
			?>
    <body>

<?php
		
 		include "nav.php";
			
			?>
		
<!-------View Portfolio------->
		
		<?php
		
	if(isset($_SESSION["student_id"])){
		
		?>
		
<div class="container"> 
	<div class="container band2">
	 
		<h3 class="text-center">Upload Portfolio</h3>
    </div>
	<br>
	
	<div class="container band2">
	<form action="backend/backend_upload_portfolio.php" method="post">
		  <div class="form-group">
			<label for="exampleInputEmail1">1. UPLOAD URL LINK</label>
			<input class="form-control" name='URL' />
		  </div>
		<br>
		<div class="form-group">
			<label>2. TITLE</label>
			<input class="form-control" name='Title' />
		  </div>
		<br>
		<div class="form-group">
    <label>3. DESCRIPTION</label>
    <textarea class="form-control" id="exampleTextarea" rows="3" name='Description'></textarea>
  </div>
		<br>
		<button type="submit" style="margin-left: 10px;" class="btn btn-danger buttonpopup pull-right">Upload</button>
		<a class="infoclick" href="../php/student-portfolio-history.php"><button type="button" class="btn btn-secondary buttonpopup pull-right">Cancel</button></a>
        
		</form>

		</div>
	<?php
	}else{
		echo "You have not logged in.";
		?>
			<a href="student-login.php">Login</a>
		<?php
	}
?>
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
