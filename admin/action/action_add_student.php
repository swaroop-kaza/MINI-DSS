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

$STUDENT_ID=$_POST['STUDENT_ID'];
$F_NAME=$_POST['F_NAME'];
$L_NAME=$_POST['L_NAME'];
$SEM=$_POST['SEM'];
$FA_ID=$_POST['FA_ID'];
$GENDER=$_POST['GENDER'];
$EMAIL=$_POST['EMAIL'];
$DOB=$_POST['DOB'];
$PH_NO=$_POST['PH_NO'];
$PASSWORD=$_POST['PASSWORD'];
$sql = "INSERT INTO student (STUDENT_ID,F_NAME,L_NAME,SEMESTER,FA_ID,GENDER,EMAIL,DOB,PH_NO) VALUES ('$STUDENT_ID','$F_NAME',$L_NAME','$SEM','$FA_ID','$GENDER','$EMAIL','$DOB','$PH_NO');";
$result = $conn->query($sql);

$sql = "INSERT INTO student_login (stu_id,password) VALUES ('$STUDENT_ID','$PASSWORD');";
$result = $conn->query($sql);

?>
<script type="text/javascript">
alert("INSERTED SCUSSEFULLY");
window.location.href = "../admin_home.php";
</script>
<?php
$conn->close();
?>  