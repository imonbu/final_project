<?php
	include "header.php";
	include "dbconnect.php";
	
	$sql="SELECT * FROM courses";
	$result=$conn->query($sql);
	
?>		
	<div class="apply">
		<h3 align="center">Application form</h3>
	    <form action="application_action.php" method="POST">
		
			<label>Roll</label>
			<input type="text" name="roll" placeholder=" Enter Your roll">
			<label>Name</label>
			<input type="text" name="name" placeholder=" Enter Your name">
			<label>Phone</label>
			<input type="text" name="phone" placeholder=" Enter Your phone">
			<label>Email</label>
			<input type="text" name="email" placeholder=" Enter Your email">
			<label>City</label>
			<input type="text" name="city" placeholder="Enter Your city">
			<label>Date 0f birth</label>
			<input type="date" name="dob" placeholder="Enter Your date">
			<label>Hsc_Gpa</label>
			<input type="text" name="hsc_gpa" placeholder=" Enter Your Hsc Gpa">
			<label>Ssc_Gpa</label>
			<input type="text" name="ssc_gpa" placeholder=" Enter Your Ssc Gpa">
			<label>Choose Course</label>
			<select name="course">
			<?php
				while($row=$result->fetch_assoc()){
		echo '<option value="'.$row["id"] .'">'.$row["title"] .'</option>';
				}
			?>
			</select>
			<input type="submit" value="Submit">
		  </form>
	</div>
	
<?php
	include "footer.php";
?>


