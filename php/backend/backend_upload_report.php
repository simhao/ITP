<?php
	$student_name=$_POST["student_name"];
	$company_name=$_POST["company_name"];
	$week=$_POST["week"];
	$qn1=$_POST["qn1"];
	$qn2=$_POST["qn2"];
	$qn3=$_POST["qn3"];
	session_start();
	$student_id=$_SESSION["student_id"];

	include "db_connect.php";
	$stmt=$mysqli->prepare("INSERT INTO tb_report (student_name,company_name,week,qn1,qn2,qn3,student_id) VALUES (?,?,?,?,?,?,?)");

	$stmt -> bind_param("ssisssi", $student_name,$company_name,$week,$qn1,$qn2,$qn3,$student_id);

	$stmt -> execute(); 	
	$stmt -> close();  	 	
	
	$mysqli -> close();

	header('Location: ../student-report-history.php');
?>
