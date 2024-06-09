<?php
	include "dbconnect.php";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$roll=$_POST["roll"];
		$name=$_POST["name"];
		$phone=$_POST["phone"];
		$emil=$_POST["email"];
		$city=$_POST["city"];
	    $dob=$_POST["dob"];
		$hsc_gpa=$_POST["hsc_gpa"];
		$ssc_gpa=$_POST["ssc_gpa"];
		$course_id=$_POST["course"];
		
		$sql="INSERT INTO applicant(id,roll, name, phone, email, city, dob, hsc_gpa, ssc_gpa, course_id)
		values(NULL,'$roll', '$name', '$phone', '$email', '$city','$dob','$hsc_gpa','$ssc_gpa','$course_id')";
		$result=$conn->query($sql);
		if($result)
		{
			//echo "Success";
			header("Location:applicant_list.php");
		}
		else
		{
			echo "Application failed";
		}
	}
	
?>