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


$FACULTY_ID=$_POST['STUDENT_ID'];
$FACULTY_NAME=$_POST['FACULTY_NAME'];
$QUALIFICATIONS=$_POST['QUALIFICATIONS'];
$GENDER=$_POST['GENDER'];
$EMAIL=$_POST['EMAIL'];
$PH_NO=$_POST['PH_NO'];
$OFFICE_ID=$_POST['OFFICE_ID'];
$ROOM_NO=$_POST['ROOM_NO'];
$BUILDING=$_POST['BUILDING'];
$PASSWORD=$_POST['PASSWORD'];

$sql = "INSERT INTO dept_faculty (FACULTY_ID,FACULTY_NAME,QUALIFICATIONS,GENDER) VALUES ('$FACULTY_ID','$FACULTY_NAME','$QUALIFICATIONS','$GENDER');";
$result = $conn->query($sql);

$sql = "INSERT INTO faculty_office_address (FAC_ID,OFFICE_ID,BUILDING,ROOM_NO) VALUES ('$FACULTY_ID','$OFFICE_ID','$BUILDING','$ROOM_NO');";
$result = $conn->query($sql);


$sql = "INSERT INTO faculty_contact (FAC_ID,FACULTY_EMAIL,FACULTY_PH_NO,OFF_ID) VALUES ('$FACULTY_ID','$EMAIL','$PH_NO','$OFFICE_ID');";
$result = $conn->query($sql);

$sql = "INSERT INTO faculty_login (FAC_ID,PASSWORD) VALUES ('$FACULTY_ID','$PASSWORD');";
$result = $conn->query($sql);


?>
<script type="text/javascript">
alert("INSERTED SCUSSEFULLY");
window.location.href = "../admin_home.php";
</script>
<?php
$conn->close();


?>  