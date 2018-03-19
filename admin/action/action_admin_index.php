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


$sql = "SELECT * FROM admin_login where USERNAME= '$USERNAME' AND PASSWORD='$PASSWORD';";
$result = mysqli_query($conn,$sql);


if (mysqli_num_rows($result) > 0) {
      $_SESSION["USERNAME"] = $USERNAME;
      header('Location:../admin_home.php');
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
