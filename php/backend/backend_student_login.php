<?php
	$admin_no = $_POST["admin_no"];
	
	$sPassword = $_POST["sPassword"];
	include "db_connect.php";
	$stmt = $mysqli -> prepare("SELECT student_id FROM tb_student WHERE admin_no = ? AND sPassword = ?"); 	

	$stmt -> bind_param("ss",$admin_no, $sPassword); 	
	$stmt -> execute(); 

	$stmt -> store_result();
	$row = $stmt -> num_rows();
	$stmt -> bind_result ($student_id);
	$stmt -> fetch();

	$stmt -> close();  	 	
	$mysqli -> close();

	if ($row == 0)
	{
		echo "Login failed.<br/>";
	?>
		<a href="login.php">Login</a>
	<?php
	}
	else
	{
		session_start();
		$_SESSION["student_id"] = $student_id;
		
	?>
		
	<?php
		header('location:../student-change-profile.php');
	}
?>
