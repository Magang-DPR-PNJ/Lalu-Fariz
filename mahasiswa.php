<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Mahasiswa1</title>
</head>
 
<body>
<a href="mahasiswaadd.php">Add New User</a><br/><br/>
 
    <!-- <table width='80%' border=1>
 
    <tr>
        <th>Name</th> <th>Nim</th> <th>Mobile</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['nim']."</td>";
        echo "<td>".$user_data['mobile']."</td>";    
        echo "<td><a href='mahasiswaedit.php?id=$user_data[id]'>Edit</a> | <a href='mahasiswadelete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table> -->
 
    
</body>
</html>