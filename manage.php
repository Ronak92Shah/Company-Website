

<!DOCTYPE html>
<html lang = "en">

<head>

<meta charset = "utf-8"/>
<meta name = "description"		content = "Home Page of Exza Tech Solutions"/>
<meta name = "keywords"		content = "Exza Tech Solutions, Information Technology Solutions, Solutions, Web Solutions, Java Solutions, Dot Net, C,C++"/>
<meta name = "author"	content = "Ronak Shah"/>
<title> EXZA Tech Solutions </title>
<link  href="styles/mystyle.css" rel="stylesheet" type="text/css"/>
<script src="jobs.js"></script>
</head>
<!--Assignment 3 Student ID - 4949773 Name - Ronak Shah-->
<body>

<?php
include_once("headernav.php");
?>

<form method = "post" action = "manage.php">

<p><strong>List all EOIs</strong></p>

<p>
<input type = "submit" value = "Display1" name = "show1"/>
</p>


<p><strong>List all EOIs for a particular position (given a job reference number)</strong></p>

<p><label for = "ref1">Job Ref No:</label>
<input type ="text" name = "RefNo" id = "ref1"/>

<input type = "submit" value = "Display2" name = "show2"/>
</p>

<p><strong>List all EOIs for a particular applicant given their first name, last name or both</strong></p>

<p><label for = "fname">First Name:</label>
<input type ="text"  id = "fname" name = "firstname" />


<label for = "lname">Last Name:</label>
<input type = "text" name = "lastname" id = "lname" />


<input type = "submit" value = "Display3" name = "show3"/>
</p>

<p><strong>Delete all EOIs with a specified job reference number</strong></p>

<p><label for = "ref2">Job Ref No:</label>
<input type ="text" name = "RefNo1" id = "ref2" />

<input type = "submit" value = "Display4" name = "show4"/>
</p>

</form>


<?php

require_once("settings.php");
				
			
				
				
		$conn = @mysqli_connect($host, $user, $pwd, $db);
				
	if(!$conn){
	
				echo"<p>Unable to connect to database</p>";
				
	}else{
	
			// List all EOI's
	
			if(isset($_POST['show1'])) {
	
				
		$display1 = trim($_POST['show1']);
			
		
				if($display1 == 'Display1'){
				
						
						$sql_table="EOI";
						
						$query1 = "Select * from EOI";
						
						$result1 = mysqli_query($conn, $query1); 
						//echo"<p>wassup4</p>";
				
					if($result1){
				
				 echo "<table border=\"1\">"; 
					echo "<tr>" 
				 ."<th scope=\"col\">EOINumber</th>"
				 ."<th scope=\"col\">RefNo</th>" 
				 ."<th scope=\"col\">First_name</th>" 
				 ."<th scope=\"col\">Last_name</th>" 
				 ."<th scope=\"col\">Email_address</th>" 
				 ."<th scope=\"col\">Phone_number</th>" 
				 ."<th scope=\"col\">Street_address</th>" 
				 ."<th scope=\"col\">Suburb</th>" 
				 ."<th scope=\"col\">State</th>" 
				 ."<th scope=\"col\">Postcode</th>" 
				 ."<th scope=\"col\">Skills</th>" 
				 ."<th scope=\"col\">Other_skills</th>" 
				 ."</tr>";
 // retrieve current record pointed by the result pointer 
 
	while ($row = mysqli_fetch_assoc($result1)){ 
			 echo "<tr>"; 
			 echo "<td>",$row["EOINumber"],"</td>";
			 echo "<td>",$row["Job_Reference_number"],"</td>"; 
			 echo "<td>",$row["First_name"],"</td>"; 
			 echo "<td>",$row["Last_name"],"</td>"; 
			 echo "<td>",$row["Email_address"],"</td>"; 
			 echo "<td>",$row["Phone_number"],"</td>";
			 echo "<td>",$row["Street_address"],"</td>"; 
			 echo "<td>",$row["Suburb"],"</td>"; 
			 echo "<td>",$row["State"],"</td>";
			 echo "<td>",$row["Postcode"],"</td>"; 
			 echo "<td>",$row["Skills"],"</td>"; 
			 echo "<td>",$row["Other_skills"],"</td>"; 
			 echo "</tr>"; 
												}
 echo "</table>";
				
				
				}else{
				
				echo"<p>There's some problem with the system.</p>";
				
				}
	
	}
}



				// Select based on job reference no

				if(isset($_POST['show2'])) {
	
				//echo"<p>wassup3</p>";
		$display2 = trim($_POST['show2']);
	
	if($display2 == 'Display2'){
	
	$refno = trim($_POST['RefNo']);
	
			if($refno != 0){
	
					$sql_table="EOI";
						
						$query2 = "Select * from EOI where Job_Reference_number = '$refno'";
						
						$result2 = mysqli_query($conn, $query2); 
						
				
					if($result2){
					
					//echo"<p>hii 5</p>";
					
					 echo "<table border=\"1\">"; 
					echo "<tr>" 
				 ."<th scope=\"col\">EOINumber</th>"
				 ."<th scope=\"col\">RefNo</th>" 
				 ."<th scope=\"col\">First_name</th>" 
				 ."<th scope=\"col\">Last_name</th>" 
				 ."<th scope=\"col\">Email_address</th>" 
				 ."<th scope=\"col\">Phone_number</th>" 
				 ."<th scope=\"col\">Street_address</th>" 
				 ."<th scope=\"col\">Suburb</th>" 
				 ."<th scope=\"col\">State</th>" 
				 ."<th scope=\"col\">Postcode</th>" 
				 ."<th scope=\"col\">Skills</th>" 
				 ."<th scope=\"col\">Other_skills</th>" 
				 ."</tr>";
				 
				 while ($row2 = mysqli_fetch_assoc($result2)){ 
			 echo "<tr>"; 
			 echo "<td>",$row2["EOINumber"],"</td>";
			 echo "<td>",$row2["Job_Reference_number"],"</td>"; 
			 echo "<td>",$row2["First_name"],"</td>"; 
			 echo "<td>",$row2["Last_name"],"</td>"; 
			 echo "<td>",$row2["Email_address"],"</td>"; 
			 echo "<td>",$row2["Phone_number"],"</td>";
			 echo "<td>",$row2["Street_address"],"</td>"; 
			 echo "<td>",$row2["Suburb"],"</td>"; 
			 echo "<td>",$row2["State"],"</td>";
			 echo "<td>",$row2["Postcode"],"</td>"; 
			 echo "<td>",$row2["Skills"],"</td>"; 
			 echo "<td>",$row2["Other_skills"],"</td>"; 
			 echo "</tr>"; 
												}
				 
				 
				 echo"</table>";
					
					
					}else{
					
					echo"<p>Enter Valid Job reference number</p>";
					
					}
				
				}else{
				
						echo"<p>Please provide job reference number</p>";
				}
	}
	}
	
					if(isset($_POST['show3'])) {
	
				//echo"<p>wassup3</p>";
		$display3 = trim($_POST['show3']);
	
	
	if($display3 == 'Display3'){
	
	$first_name = trim($_POST['firstname']);
		$last_name = trim($_POST['lastname']);
	
			if(($first_name != " ") || ($last_name != " ")){
	
					$sql_table="EOI";
						
						$query3 = "Select * from EOI where ((First_name = '$first_name') || (Last_name = '$last_name'))";
						
						$result3 = mysqli_query($conn, $query3); 
	
						
						if($result3){
					
					echo "<table border=\"1\">"; 
					echo "<tr>" 
				 ."<th scope=\"col\">EOINumber</th>"
				 ."<th scope=\"col\">RefNo</th>" 
				 ."<th scope=\"col\">First_name</th>" 
				 ."<th scope=\"col\">Last_name</th>" 
				 ."<th scope=\"col\">Email_address</th>" 
				 ."<th scope=\"col\">Phone_number</th>" 
				 ."<th scope=\"col\">Street_address</th>" 
				 ."<th scope=\"col\">Suburb</th>" 
				 ."<th scope=\"col\">State</th>" 
				 ."<th scope=\"col\">Postcode</th>" 
				 ."<th scope=\"col\">Skills</th>" 
				 ."<th scope=\"col\">Other_skills</th>" 
				 ."</tr>";
 // retrieve current record pointed by the result pointer 
 
	while ($row3 = mysqli_fetch_assoc($result3)){ 
			 echo "<tr>"; 
			 echo "<td>",$row3["EOINumber"],"</td>";
			 echo "<td>",$row3["Job_Reference_number"],"</td>"; 
			 echo "<td>",$row3["First_name"],"</td>"; 
			 echo "<td>",$row3["Last_name"],"</td>"; 
			 echo "<td>",$row3["Email_address"],"</td>"; 
			 echo "<td>",$row3["Phone_number"],"</td>";
			 echo "<td>",$row3["Street_address"],"</td>"; 
			 echo "<td>",$row3["Suburb"],"</td>"; 
			 echo "<td>",$row3["State"],"</td>";
			 echo "<td>",$row3["Postcode"],"</td>"; 
			 echo "<td>",$row3["Skills"],"</td>"; 
			 echo "<td>",$row3["Other_skills"],"</td>"; 
			 echo "</tr>"; 
												}
 echo "</table>";
					
					
					}else{		
				echo"<p>There's no data available for selected First name and Last name.</p>";
				
				}
						}else{
				
						echo"<p>Please provide First name or Last name.</p>";
				}
	}
	}
	
								if(isset($_POST['show4'])) {
	
				//echo"<p>wassup3</p>";
		$display4 = trim($_POST['show4']);
						
						
					if($display4 == 'Display4'){
					
					$refno1 = trim($_POST['RefNo1']);
					
							if($refno1 != 0){
	
							$sql_table="EOI";
						
							$query4 = "Delete from EOI where Job_Reference_number = $refno1";
						
							$result4 = mysqli_query($conn, $query4); 
						
							
										if($result4){
										echo"<p>Successfully Deleted</p>";
							
							
							}
								
							
							}else{
								echo"<p>Please provide Reference no.</p>";
							}
						
						}
	}
	
	}

		mysqli_close($conn);
include_once("footer.php");
?>

		

</body>


</html>