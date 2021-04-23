<?php
include 'Connection.php';

$name = $_POST['name']; 
$sem = $_POST['sem'];
$div = $_POST['devision'];
$rollno = $_POST['rnumber'];
$dob = $_POST['dob'];

if(isset($_POST['submit'])){
	$sql = "INSERT INTO `form`(`name`,`sem`,`div`,`rollno`,`dob`)VALUES('$name','$sem','$div','$rollno','$dob');";
	
	$res = mysqli_query($Connection,$sql);
	if($res){
		echo "DONE ! DATA INSERTED";
	}else{
		echo "FAILED NOT INSERTED";
	}
}
?>