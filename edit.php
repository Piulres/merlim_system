<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
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

	} else { 

		//updating the table
		$result = mysql_query("
			UPDATE merlim_system_users 
			SET nick = '$nick', name = '$name', email = '$email', zipcode = '$zipcode', street_address = '$street_address', city = '$city', state = '$state', country = '$country', avatar_url = '$avatar_url', treatment = '$treatment', admin_level = '$admin_level', description = '$description', document_number = '$document_number', document_type = '$document_type' 
			WHERE id=$id"
			);
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysql_query('SELECT * FROM users WHERE id=$id');

while($res = mysql_fetch_array($result))
{
	$nick = $res['nick'];
	$name = $res['name'];
	$email = $res['email'];
	$zipcode = $res['zipcode'];
	$street_address = $res['street_address'];
	$city = $res['city'];
	$state = $res['state'];
	$country = $res['country'];
	$avatar_url = $res['avatar_url'];
	$treatment = $res['treatment'];
	$admin_level = $res['admin_level'];
	$description = $res['description'];
	$document_number = $res['document_number'];
	$document_type = $res['document_type'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">

			<tr>
				<td>nick</td>
				<td><input type="text" name="nick" value=<?php echo $nick;?>></td>
			</tr>

			<tr>
				<td>name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>

			<tr>
				<td>email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>

			<tr>
				<td>zipcode</td>
				<td><input type="text" name="zipcode" value=<?php echo $zipcode;?>></td>
			</tr>

			<tr>
				<td>street_address</td>
				<td><input type="text" name="street_address" value=<?php echo $street_address;?>></td>
			</tr>

			<tr>
				<td>city</td>
				<td><input type="text" name="city" value=<?php echo $city;?>></td>
			</tr>

			<tr>
				<td>state</td>
				<td><input type="text" name="state" value=<?php echo $state;?>></td>
			</tr>

			<tr>
				<td>country</td>
				<td><input type="text" name="country" value=<?php echo $country;?>></td>
			</tr>

			<tr>
				<td>avatar_url</td>
				<td><input type="text" name="avatar_url" value=<?php echo $avatar_url;?>></td>
			</tr>

			<tr>
				<td>treatment</td>
				<td><input type="text" name="treatment" value=<?php echo $treatment;?>></td>
			</tr>

			<tr>
				<td>admin_level</td>
				<td><input type="text" name="admin_level" value=<?php echo $admin_level;?>></td>
			</tr>

			<tr>
				<td>description</td>
				<td><input type="text" name="description" value=<?php echo $description;?>></td>
			</tr>

			<tr>
				<td>document_number</td>
				<td><input type="text" name="document_number" value=<?php echo $document_number;?>></td>
			</tr>

			<tr>
				<td>document_type</td>
				<td><input type="text" name="document_type" value=<?php echo $document_type;?>></td>
			</tr>


			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
