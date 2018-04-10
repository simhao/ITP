<?php
	$URL=$_POST["URL"];
	$Description=$_POST["Description"];
	$Title=$_POST["Title"];
	session_start();
	$student_id=$_SESSION["student_id"];

	include "db_connect.php";
	$stmt=$mysqli->prepare("INSERT INTO tb_protfolio (student_id,URL,Description,Title) VALUES (?,?,?,?)");

	$stmt -> bind_param("isss", $student_id,$URL,$Description,$Title);

	$stmt -> execute(); 	
	$stmt -> close();  	 	
	
	$mysqli -> close();

	header('Location: ../student-portfolio-history.php');
?>
