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

$STUDENT_ID=$_SESSION["USERNAME"] ;
$PASSWORD=$_POST['PASSWORD'];

$sql = "UPDATE student_login SET password='$PASSWORD' WHERE stu_id='$STUDENT_ID'";

if ($conn->query($sql) == TRUE)
{
	?>
<script type="text/javascript">
alert("PASSWORD CHANGED");
window.location.href = "index.php";
</script>
<?php

} 
else{
   ?>
<script type="text/javascript">
alert("NOT REGISTERED");
window.location.href = "index.php";
</script>
<?php

}
$conn->close();
?>