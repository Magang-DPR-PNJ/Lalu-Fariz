<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['nama'];
	$asalsekolah=$_POST['asal_sekolah'];
	$mobile=$_POST['mobile'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE crud SET nama='$name',asal_sekolah='$email',mobile='$mobile' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: siswa.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM crud WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['nama'];
	$asalsekolah = $user_data['asal_sekolah'];
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
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Asal Sekolah</td>
				<td><input type="text" name="asal_sekolah" value=<?php echo $asalsekolah;?>></td>
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