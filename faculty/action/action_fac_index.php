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
$PASSWORD=$_POST['PASSWORD'];


$sql = "SELECT * FROM faculty_login where FAC_ID= '$USERNAME' AND PASSWORD='$PASSWORD';";
$result = mysqli_query($conn,$sql);


if (mysqli_num_rows($result) > 0) {

      $_SESSION["USERNAME"] = $USERNAME;


      $sql = "SELECT FA_NFA FROM faculty_status WHERE FAC_ID= '$USERNAME' ;";
	  $result = mysqli_query($conn,$sql);

      if($result->num_rows > 0){

      	$row = $result->fetch_assoc();
      		if($row['FA_NFA']=='Y'){
      			header('Location:../FA_home.php');
      		}
      		else{
      			header('Location:../NFA_home.php');
      		}
      }
}
else{
   ?>
<script type="text/javascript">
alert("WRONG PASSWORD");
window.location.href = "../../index.php";
</script>
<?php

}
$conn->close();

?>  
