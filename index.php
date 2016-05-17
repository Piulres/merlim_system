<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = mysql_query("SELECT * FROM merlim_system_users ORDER BY id DESC");
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>nick</td>
		<td>name</td>
		<td>email</td>
		<td>zipcode</td>
		<td>street_address</td>
		<td>city</td>
		<td>state</td>
		<td>country</td>
		<td>avatar_url</td>
		<td>treatment</td>
		<td>admin_level</td>
		<td>description</td>
		<td>document_number</td>
		<td>document_type</td>
		<td>Update</td>
	</tr>
	<?php 
	while($res = mysql_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['nick']."</td>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['email']."</td>";
		echo "<td>".$res['zipcode']."</td>";
		echo "<td>".$res['street_address']."</td>";
		echo "<td>".$res['city']."</td>";
		echo "<td>".$res['state']."</td>";
		echo "<td>".$res['country']."</td>";
		echo "<td>".$res['avatar_url']."</td>";
		echo "<td>".$res['treatment']."</td>";
		echo "<td>".$res['admin_level']."</td>";
		echo "<td>".$res['description']."</td>";
		echo "<td>".$res['document_number']."</td>";
		echo "<td>".$res['document_type']."</td>";
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
