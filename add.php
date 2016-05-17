<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) 
{	
	$nick = $_POST['nick'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$zipcode = $_POST['zipcode'];
	$street_address = $_POST['street_address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$avatar_url = $_POST['avatar_url'];
	$treatment = $_POST['treatment'];
	$admin_level = $_POST['admin_level'];
	$description = $_POST['description'];
	$document_number = $_POST['document_number'];
	$document_type = $_POST['document_type'];
		
	// checking empty fields
	if(empty($nick) || empty($name) || empty($email) || empty($zipcode) || empty($street_address) || empty($city) || empty($state) || empty($country) || empty($avatar_url) || empty($treatment) || empty($admin_level) || empty($description) || empty($document_number) || empty($document_type)) {
				
		if (empty($nick)) {
		  echo "<font color='red'>nick field is empty.</font></br>";
		}
		if (empty($name)) {
		  echo "<font color='red'>name field is empty.</font></br>";
		}
		if (empty($email)) {
		  echo "<font color='red'>email field is empty.</font></br>";
		}
		if (empty($zipcode)) {
		  echo "<font color='red'>zipcode field is empty.</font></br>";
		}
		if (empty($street_address)) {
		  echo "<font color='red'>street_address field is empty.</font></br>";
		}
		if (empty($city)) {
		  echo "<font color='red'>city field is empty.</font></br>";
		}
		if (empty($state)) {
		  echo "<font color='red'>state field is empty.</font></br>";
		}
		if (empty($country)) {
		  echo "<font color='red'>country field is empty.</font></br>";
		}
		if (empty($avatar_url)) {
		  echo "<font color='red'>avatar_url field is empty.</font></br>";
		}
		if (empty($treatment)) {
		  echo "<font color='red'>treatment field is empty.</font></br>";
		}
		if (empty($admin_level)) {
		  echo "<font color='red'>admin_level field is empty.</font></br>";
		}
		if (empty($description)) {
		  echo "<font color='red'>description field is empty.</font></br>";
		}
		if (empty($document_number)) {
		  echo "<font color='red'>document_number field is empty.</font></br>";
		}
		if (empty($document_type)) {
		  echo "<font color='red'>document_type field is empty.</font></br>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysql_query("
			INSERT INTO merlim_system_users 
			(nick, name, email, zipcode, street_address, city, state, country, avatar_url, treatment, admin_level, description, document_number, document_type) 
			VALUES('$nick', '$name', '$email', '$zipcode', '$street_address', '$city', '$state', '$country', '$avatar_url', '$treatment', '$admin_level', '$description', '$document_number', '$document_type')
			");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
