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
	<div class="container band2">
	 
		<h3 class="text-center">Upload Weekly Report</h3>
    </div>
	<br>
	
	<div class="container band2">
		<p>INTERNSHIP PERIOD: START DATE - END DATE</p>
		<form action="backend/backend_upload_report.php" method="post">
		<div style="padding-left: 0px;" class="container band2 pull-left"> 
		<div class="form-group">
			<label style="padding-top: 8px;padding-left: 0px;" class="col-sm-4 changefontw pull-left">Name of Student intern:
			</label>
	  		<div class="col-sm-7">
			<input class="form-control" name='student_name' />
		  	</div>
		</div>
		<br>
		<div class="form-group">
			<label style="padding-top: 8px;padding-left: 0px;" class="col-sm-4 changefontw pull-left">Name of the company:
			</label>
	  		<div class="col-sm-7">
			<input class="form-control" name='company_name' />
		  	</div>
		</div>
		<br>
		<div class="form-group">
			<label style="padding-top: 8px;padding-left: 0px;" class="col-sm-4 changefontw pull-left">Week number:
			</label>
	  		<div class="col-sm-2">
			<input class="form-control"  name='week' />
		 	</div>
		</div>
			
			</div>
			
		  <div class="form-group">
			<label>1.	What are your initial reactions to your first few days?  What are you looking forward to?  Is there anything you are disappointed
about?
</label>
			<textarea class="form-control" rows="3" name='qn1' ></textarea>
		  </div>
		
		<div class="form-group">
			<label>2.	Read the entire website of the organization and read relevant marketing materials about the organization (If possible ask for an
annual report or similar document). Do a summary of what the organisation is about and does.  
</label>
			<textarea class="form-control" rows="3" name='qn2' ></textarea>
		  </div>
		
		<div class="form-group">
    <label>3.	List the tasks you have been assigned this week. Have you completed them (Or when will you complete them)? What have you
learnt and what problems did you face?
</label>
    <textarea class="form-control" rows="3" name='qn3'></textarea>
  </div>
		<br>
		<button type="submit" style="margin-left: 10px;" class="btn btn-danger buttonpopup pull-right">Upload</button>
		<a class="infoclick" href="../html/student-report-history.html"><button type="button" class="btn btn-secondary buttonpopup pull-right">Cancel</button></a>
        
		</form>
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
