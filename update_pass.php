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
?>
<!doctype html>
<html>
	<head>
    <title>NITC STUDENT DSS</title>
    <link rel="icon" href="images/nitc_image.jpg">
    <link rel="stylesheet" type="text/css" href="css/stu_index.css">
  </head>
  <body>
    <div>
      <div class="header">
        <a href="http://www.nitc.ac.in/"><img src="images/nitc_image.jpg"></a>
        <div class="div1">
          <h2>NATIONAL INSTITUTE OF TECHNOLOGY CALICUT</h2>
          <br>
          <h2>DECISION SUPPORT SYSTEM</h2>
        </div>
      </div>
      <div class="div2">
        <form action="action_update_pass.php" method="POST">
          <div>
              PASSWORD:
              <input type="password" name='PASSWORD' placeholder="PASSWORD" />
              <br>
              <br>
           </div>
          <button>submit</button>
        </form>
      </div>
    </div>
  </body>
</html>