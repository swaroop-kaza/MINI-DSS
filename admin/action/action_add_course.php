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


$COURSE_ID=$_POST['COURSE_ID'];
$COURSE_NAME=$_POST['COURSE_NAME'];
$PRI_FAC_ID=$_POST['PRI_FAC_ID'];
$SEC_FAC_ID=$_POST['SEC_FAC_ID'];
$CREDITS=$_POST['CREDITS'];
$SLOT=$_POST['SLOT'];
$GRADING_POLICY=$_POST['GRADING_POLICY'];

$sql = "INSERT INTO dept_courses (COURSE_ID,COURSE_NAME,PRI_FACULTY_ID,CREDITS,SLOT,GRADING_POLICY) VALUES ('$COURSE_ID','$COURSE_NAME','$PRI_FAC_ID','$CREDITS','$SLOT','$GRADING_POLICY');";
$result = $conn->query($sql);

$sql = "INSERT INTO secondary_faculty (PRI_FAC_ID,COR_ID,SEC_FAC_ID) VALUES ('$PRI_FAC_ID','$COURSE_ID','$SEC_FAC_ID');";
$result = $conn->query($sql);


?>
<script type="text/javascript">
alert("INSERTED SCUSSEFULLY");
window.location.href = "../admin_home.php";
</script>
<?php
$conn->close();


?>  