<?php
$servername = 'localhost';
$username = 'root';
$password = "KSwaroop@2";
$dbname = "mini_dss";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

session_start();
$USERNAME=$_POST['USERNAME'];
$NAME=$_POST['NAME'];


$sql = "SELECT FACULTY_NAME FROM dept_faculty where FACULTY_ID= '$USERNAME' ;";
$result = mysqli_query($conn,$sql);
$x=0;

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result); 
        if($row['FACULTY_NAME']==$NAME)
		{              
              $x=1;
              $_SESSION["USERNAME"] = $USERNAME;
			  header('Location:update_pass_faculty.php');
        } 
}
if($x==0) {
   ?>
<script type="text/javascript">
alert("ENTER YOUR DETAILS CORRECTLY");
window.location.href = "index.php";
</script>
<?php

}
$conn->close();
?>  
