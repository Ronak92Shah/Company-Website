<!DOCTYPE html>
<html lang = "en">

<head>

<meta charset = "utf-8"/>

</head>

<body>
<?php



		require_once("settings.php");

		$conn = @mysqli_connect($host, $user, $pwd, $db);
			
			if($conn){
		
		$query = "CREATE TABLE EOI(
			EOINumber					INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
			Job_Reference_number		INT(5) NOT NULL,
			First_name					CHAR(15) NOT NULL,
			Last_name					CHAR(25) NOT NULL,
			Street_address				VARCHAR(50) NOT NULL,
			Suburb						VARCHAR(25) NOT NULL,
			State						VARCHAR(5) NOT NULL,
			Postcode					INT(4) NOT NULL,
			Email_address				VARCHAR(50) NOT NULL,
			Phone_number				INT(10) NOT NULL,
			Skills						VARCHAR(20),
			Other_skills				VARCHAR(200)
							)";


		$result = mysqli_query($conn,$query);
			
			echo "<p>Connection Successful </p>";
			}else{
			
			echo "<p>Connection Unsuccessful </p>";
			}
			
			$ref_no = trim($_POST["RefNo"]);
			$f_name = trim($_POST["firstname"]);
			$l_name = trim($_POST["lastname"]);
			$d_o_b = trim($_POST["dob"]);
			$email_addrs = trim($_POST["email"]);
			$phone_no = trim($_POST["phoneNo"]);
			$street_addr = trim($_POST["streetaddr"]);
			$sub = trim($_POST["suburb"]);
			$states = trim($_POST["state"]);
			$post_code = trim($_POST["postcode"]);
			$skill=implode(',', $_POST["skills"]);
			$other_skills = trim($_POST["otherskills"]);
			
			//-------------------------------------------------------------------------------------------------------------------------------
			
			$errMessage = "";								/* stores the error message */
	$result = true;	
	/* assumes no errors */
	
	
			$firstName = strlen($f_name);
		if($firstName>15)
		{
			$errMessage=$errMessage."First Name too long should be 15 letters maximum\n";
			$result=false;
		}
		if(!ctype_alpha($f_name))
		{
			$errMessage=$errMessage."First Name should contain only alphabets\n";
			$result=false;
		}
		
		$lastName =strlen($l_name);
		if($lastName>25)
		{
			$errMessage=$errMessage."Last Name too long should be 15 letters maximum\n";
			$result=false;
		}
		if(!ctype_alpha($l_name))
		{
			$errMessage=$errMessage."Last Name should contain only alphabets\n";
			$result=false;
		}
		
		
		/*Validates the date of birth
		
		$d_o_b=dateOfBirth.split("/");
		if($d_o_b[0] > 31 || $d_o_b[0] < 1 || $d_o_b[1] < 1 || $d_o_b[1] > 12 || $d_o_b[2] < 1 || $d_o_b[2] >9999)
		{
			$errMessage=$errMessage."Invalid date\n";
			$result=false;
		}
		*/
		
		/*validate gender
		
	
		$male = document.getElementById("male").checked;		
			var female = document.getElementById("female").checked;
			
			if(! male && ! female)
			{
				errMessage=$errMessage."Select Gender\n";
				result=false;
			}
*/
		
		$street = strlen($street_addr);
		if($street>50)
		{
				$errMessage=$errMessage."Street name too long provide a specific one\n";
				$result=false;
		}
		
		$suburb = strlen($sub);
		if($suburb>25)
		{
				$errMessage=$errMessage."Suburb name too long provide a specific one\n";
				$result=false;
		}
		
		
		if($states=="Select")
		{
			$errMessage=$errMessage."Please select a state\n";
			$result=false;
		
		}
		$postcode = strlen($post_code);
		if(!($postcode == 4))
		{
			$errMessage=$errMessage."Post code must be 4 digit \n";
				$result=false;
		}
		/*validating state and the post code*/
		
		$postCodeFirstDigit = substr($postcode,0,1);
						if($states == "VIC")
						{
						
							if(!($postCodeFirstDigit == 3 || $postCodeFirstDigit==8))
								{
									//alert("hello" +postCodeFirstDigit);
									$errMessage=$errMessage."Postcode and state not matching select the correct one\n";
									$result = false;
								}
						
				}

				if($states == "NSW"){
				if(!(postCodeFirstDigit== 1 || postCodeFirstDigit == 2))
				{
				$errMessage=$errMessage. "Postcode and state not matching select the correct one\n";
				$result = false;
				}
				}

				if($states == "QLD")
				{
					if(!($postCodeFirstDigit== 4 || $postCodeFirstDigit== 9))
					{
					$errMessage=$errMessage."Postcode and state not matching select the correct one\n";
					$result = false;
					}
				}

				if($states == "NT" || $states == "ACT")
				{
				if(!($postCodeFirstDigit== 0))
				{
				$errMessage=$errMessage."Postcode and state not matching select the correct one\n";
				$result = false;
				}
				}

				if($states == "WA"){
				if(!($postCodeFirstDigit== 6)){
				$errMessage=$errMessage."Postcode and state not matching select the correct one\n";
				$result = false;
				}
				}

				if($states == "SA"){
				if(!($postCodeFirstDigit== 5)){
				$errMessage=$errMessage."Postcode and state not matching select the correct one\n";
				$result = false;
				}
				}

				if($states == "TAS"){
				if(!($postCodeFirstDigit== 7)){
				$errMessage=$errMessage."Postcode and state not matching select the correct one\n";
				$result = false;
				}
				}
	/* validate email address
	
	var emailFormat= /^\w+([A-Za-z]\w+)*@\w+([A-Za-z]\w+)*.\w+[A-Za-z]+$/;
	
	var email=document.getElementById('email').value;
	if(!email.match(emailFormat))
	{
		//alert("inside email");
		errMessage+= "Please provide a valid emaila address\n";
				result = false;	
	}
	*/
		/*validating phone number*/
		
		
		if(preg_match('/^[0-9]/',$phone_no))
    {
			$phoneNumber = strlen($phone_no);
			if(!($phoneNumber ==10))
			{
				$errMessage=$errMessage." Phone number must contain 10 digits\n";
						$result=false;
			}
		}else{
		$errMessage=$errMessage." Phone number must contain 10 digits\n";
						$result=false;
		}
		
		
		
			
			/*
		
			
			if($otherSkill == true){
				if(strlen($otherSkilltext) < 1 ){
				errMessage+= "Please type other skills corresponding to the other skill selected chech box";
				result = false;}}
*/

		
		if(!$result)
		{
			echo "<p> $errMessage </p>";
		}
		
		
else{

			
			
			
			//--------------------------------------------------------------------------------------------------------------------------------
			
			
			$query1 = "insert into EOI (EOINumber, Job_Reference_number, First_name, Last_name, Email_address, Phone_number, Street_address, Suburb, State, Postcode, Skills, Other_skills) values ('NULL', '$ref_no', '$f_name', '$l_name', '$email_addrs', '$phone_no', '$street_addr', '$sub', '$states', '$post_code', '$skill', '$other_skills')"; 
			
			// execute the query -we should really check to see if the database exists first. 
			$result1 = mysqli_query($conn, $query1); 
		
			
				// close the database connection 
			
			 $sql_table="EOI"; 
 
				// Set up the SQL command to add the data into the table 
			$queryEOINumber = "select EOINumber from EOI where Email_address = '$email_addrs' "; 
 
				// execute the query and store result into the result pointer 
			$resultEOI = @mysqli_query($conn, $queryEOINumber); 
			
			if(!$resultEOI){
					
					echo "<p>Something is wrong with the system</p>";
					
					}else{
					
					echo "<table border=\"1\">"; 
					echo "<tr>" 
						."<th scope=\"col\">EOINumber</th>" 
						."</tr>";
			
						while ($row = mysqli_fetch_assoc($resultEOI)){ 
							echo "<tr>"; 
							echo "<td>",$row["EOINumber"],"</td>"; 
  
							echo "</tr>"; 
							}
							echo"</table>";
							mysqli_free_result($resultEOI); 
								 // if successful query operation 
 
			}
			
			
		mysqli_close($conn);
}
?>			
</body>
</html>