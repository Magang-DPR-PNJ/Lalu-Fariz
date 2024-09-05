<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['nama'];
	$nim=$_POST['nim'];
	$mobile=$_POST['mobile'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE mahasiswa SET nama='$name',nim='$nim',mobile='$mobile' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: mahasiswa.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['nama'];
	$nim = $user_data['nim'];
	$mobile = $user_data['mobile'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="mahasiswaedit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="nama" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Nim</td>
				<td><input type="text" name="nim" value=<?php echo $nim;?>></td>
			</tr>
			<tr> 
				<td>Mobile</td>
				<td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="update"></td>
			</tr>
		</table>
	</form>
</body>
</html>