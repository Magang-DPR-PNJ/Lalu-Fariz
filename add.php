<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Asal Sekolah</td>
				<td><input type="text" name="asal_sekolah"></td>
			</tr>
			<tr> 
				<td>Mobile</td>
				<td><input type="text" name="mobile"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$nama = $_POST['nama'];
		$asalsekolah = $_POST['asal_sekolah'];
		$mobile = $_POST['mobile'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO crud(nama,asal_sekolah,mobile) VALUES('$nama','$asalsekolah','$mobile')");
		
		// Show message when user added
		echo "User added successfully. <a href='siswa.php'>View Users</a>";
	}
	?>
</body>
</html>