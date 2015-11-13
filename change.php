
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
<!--Assignment 1 Student ID - 4949773 Name - Ronak Shah-->
<body>

<?php
include("headernav.php");
?>

<h2>To delete the application you will have to enter EOINumber which would had been provided while you registered. <br/> Also for security purpose you will have to enter your last name</h2>

<form method = "post" action= "change.php">

<p><label for = "EOIno">EOINumber</label></p>
<input type ="text"  id = "EOIno" name = "EOIno"  required = "required"/>


<p><label for = "lname">Last Name:</label></p>
<input type = "text" name = "lastname" id = "lname" required = "required"/>

<p>
<input type = "submit" value = "Remove" name = "Delete"/>


<input type = "submit" value = "Edit" name = "change"/>
</p>

</form>

<?php
		
		
		
		require_once("settings.php");

		$conn = @mysqli_connect($host, $user, $pwd, $db);
			
	if(!$conn){
	
				echo"<p>Unable to connect to database</p>";
				
	}else{
				
				if(isset($_POST['Delete'])){
				
			if((isset($_POST['EOIno'])) && (isset($_POST['lastname']))){
			
			$EOI_NO = trim($_POST['EOIno']);
			$l_name = trim($_POST['lastname']);
			$delete = trim($_POST['Delete']);
					
					
					if($delete == 'Remove')
					{
							$querySelectEOI = "select * from EOI where EOINumber = '$EOI_NO)'";
							
							$resultSelectEOI = mysqli_query($conn,$querySelectEOI);
							
							$rowEOI = mysqli_fetch_assoc($resultSelectEOI);
							
							if($rowEOI != 0 ){
							
								$querySelectEOI_LName = "select * from EOI where EOINumber = '$EOI_NO' And Last_name = '$l_name' ";
							
								$resultSelectEOI_LName = mysqli_query($conn, $querySelectEOI_LName);
								
								$rowEOI_LName = @mysqli_fetch_assoc($resultSelectEOI_LName);
							
								if($rowEOI_LName != 0 ){
								
									
									$queryDelete = "Delete from EOI where EOINumber = '$EOI_NO' And Last_name = '$l_name'";
								
									$resultDelete = mysqli_query($conn, $queryDelete);
									
									echo"<p>Successfully Deleted</p>";
								
								
								}else{
								
								echo"<p>EOINumber or Last Name is wrong please check.</p>";
								}	
										
							}else{
							
							echo"<p>EOINumber does not exist, enter valid EOINumber.</p>";
							
							}
					
										}
										}
										}
										
										
										if(isset($_POST['change'])){
										
										if((isset($_POST['EOIno'])) && (isset($_POST['lastname']))){
										
										$EOI_NO = trim($_POST['EOIno']);
										$l_name = trim($_POST['lastname']);
										$edit	= trim($_POST['change']);
										
										if($edit == 'Edit')
					{
							$querySelectEOI1 = "select * from EOI where EOINumber = '$EOI_NO)'";
							
							$resultSelectEOI1 = mysqli_query($conn,$querySelectEOI1);
							
							$rowEOI1 = mysqli_fetch_assoc($resultSelectEOI1);
							
							if($rowEOI1 != 0 ){
							
								$querySelectEOI_LName1 = "select * from EOI where EOINumber = '$EOI_NO' And Last_name = '$l_name' ";
							
								$resultSelectEOI_LName1 = mysqli_query($conn, $querySelectEOI_LName1);
								
								
							
								if($resultSelectEOI_LName1){
								
								 echo "<table border=\"1\">"; 
					echo "<tr>" 
				 ."<th scope=\"col\">EOINumber</th>"
				 ."<th scope=\"col\">Job_Reference_number</th>" 
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
 
	?>
											<form method="post" action="change.php">
								
													<?php while($row=mysqli_fetch_assoc($resultSelectEOI_LName1))
													{?>
														<tr>															
														<td><input type="text" name="update_Eoi"  readonly value="<?php echo  $row['EOINumber'];?>  "/></td>
														<td><input type="text" name ="update_Job_Reference" value="<?php echo $row['Job_Reference_number'];?>"/></td>
														<td><input type="text" name ="update_Fname" value="<?php echo $row['First_name'];?>"/></td>
														<td><input type="text" name ="update_Lname" value="<?php echo $row['Last_name'];?>"/></td>
														<td><input type="text" name ="update_Email" value="<?php echo $row['Email_address'];?>"/></td>
														<td><input type="text" name ="update_Phone_Number" value="<?php echo $row['Phone_number'];?>"/></td>
														<td><input type="text" name ="update_Street" value="<?php echo $row['Street_address'];?>"/></td>
														<td><input type="text" name ="update_Suburb" value="<?php echo $row['Suburb'];?>"/></td>
														<td><input type="text" name ="update_State" value="<?php echo $row['State'];?>"/></td>
														<td><input type="text" name ="update_PostCode" value="<?php echo $row['Postcode'];?>"/></td>
														<td><input type="text" name ="update_Skills" value="<?php echo $row['Skills'];?>"/></td>
														<td><input type="text" name ="update_Other_Skills" value="<?php echo $row['Other_skills'];?>"/></td>
														</tr>
													
														<tr><td><input type="submit" name="update" value="Update"/></td></tr>
													<?php
													}
											?>				
											
											</form>
												
									<?php
								
								
								
								}else{
								
								echo"<p>EOINumber or Last Name is wrong please check.</p>";
								}	
										
							}else{
							
							echo"<p>EOINumber does not exist, enter valid EOINumber.</p>";
							
							}
					
										}
										
										
										
										}
										
										}

mysqli_close($conn);
}
?>

<?php
		//updating the details after editing
		
			require_once("settings.php");

		$conn = @mysqli_connect($host, $user, $pwd, $db);
			
	if(!$conn){
	
				echo"<p>Unable to connect to database</p>";
				
	}else{
			
							if((isset($_POST['update'])))
							{						
								$update = trim($_POST['update']);
										 $Eoi_Number=$_POST['update_Eoi'];
										 $job_Ref=trim($_POST['update_Job_Reference']);
										 $first_Name = htmlspecialchars(trim($_POST['update_Fname']));
										 $last_Name = htmlspecialchars(trim($_POST['update_Lname']));
										 $email_Id = trim($_POST['update_Email']);
										 $phone_No = trim($_POST['update_Phone_Number']);
										 $street = htmlspecialchars(trim($_POST['update_Street']));
										 $suburb = htmlspecialchars(trim($_POST['update_Suburb']));
										 $state = trim($_POST['update_State']);
										 $postcode = trim($_POST['update_PostCode']);
										 $skills = $_POST['update_Skills'];
										 $other_Skills = htmlspecialchars(trim($_POST['update_Other_Skills']));
								$query_update = "update  EOI set
								Job_Reference_number ='$job_Ref',
								First_name ='$first_Name',
								Last_name ='$last_Name',
								Email_address = '$email_Id',
								Phone_number = '$phone_No',
								Street_address = '$street',
								Suburb = '$suburb',
								State = '$state',
								Postcode = '$postcode',
								Skills = '$skills',
								Other_Skills = '$other_Skills'
								 where EOInumber='$Eoi_Number'";
								
								// execute the query to insert the form data into database.

								$result_update = @mysqli_query($conn,$query_update);
								// check if the data was inserted.
								
								if($result_update)
												{
													echo"<p>Data Updated</p>";
													
														$query_select= "select * from EOI where EOINumber = '$Eoi_Number' And Last_name = '$last_Name'";
												
														// execute the query
														 $result_select = mysqli_query($conn,$query_select);
														 
																// making the table to show only EOI number
																
																if($result_select){
																
																 echo "<table border=\"1\">"; 
																	echo "<tr>" 
																 ."<th scope=\"col\">EOINumber</th>"
																 ."<th scope=\"col\">Job_Reference_number</th>" 
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
															while($row= mysqli_fetch_assoc($result_select))
															{
																echo"<tr>";
																echo"<td>",$row["EOINumber"],"</td>";
																echo"<td>",$row["Job_Reference_number"],"</td>";
																echo"<td>",$row["First_name"],"</td>";
																echo"<td>",$row["Last_name"],"</td>";
																echo"<td>",$row["Email_address"],"</td>";
																echo"<td>",$row["Phone_number"],"</td>";
																echo"<td>",$row["Street_address"],"</td>";
																echo"<td>",$row["Suburb"],"</td>";
																echo"<td>",$row["State"],"</td>";
																echo"<td>",$row["Postcode"],"</td>";
																echo"<td>",$row["Skills"],"</td>";
																echo"<td>",$row["Other_skills"],"</td>";
																echo"</tr>";
																
															}
															echo"</table>";
									
												}
												}
								else{
									echo"<p>oops something went wrong could not update the details in data base</p>";
								}				
}
							
					}
		?>					




<hr/>
<?php
include_once('footer.php');
?>
</body>
</html>