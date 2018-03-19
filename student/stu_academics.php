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
    <title>NITC STUDENT HOME</title>
    <link rel="icon" href="../images/nitc_image.jpg">
    <link rel="stylesheet" type="text/css" href="../css/stu_home.css">
  </head>
    <body>
        <div>
            <div class="div1">
                <a href="stu_home.php"><img src="../images/nitc_image.jpg"></a>
                <h2 class="header">NITC DSS STUDENT LOGIN</h2>
                <div class="link">
                  <a href="../lib/logout.php">LOGOUT</a>
                </div>
            </div>
            <div class="div3">
              <h3>
                
              </h3>
            </div>
            <div class="div2">
                <div>
                        <a href="stu_details.php"><button>STUDENT DETAILS</button></a><br>
                        <a href="stu_academics.php"><button>ACADEMIC DETAILS</button></a><br>
                        <a href="sem_marksatt.php"><button>CURRENT SEM MARKS AND ATTENDENCE</button></a><br>
                        
                </div>
                <div>



<?php


$STUDENT_ID=$_SESSION["USERNAME"];

$sql = "SELECT * FROM stu_academics WHERE STU_ID='$STUDENT_ID';";
$result = $conn->query($sql);

$x=0;


if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
        if($row['STU_ID']==$STUDENT_ID) {                    
            if($row['S1']!=0) {
				echo  "SEMESTER1 : " . $row["S1"] ."<br>";
				?>
				<a href="stu_aca1.php">S1</a>
				<br>
				<br>
				<?php
			}
			  
			if($row['S2']!=0) {
				echo  "SEMESTER2 : " . $row["S2"] ."<br>";
				$_SESSION["SEM"] = 2;
				?>
				<a href="stu_aca2.php">S2</a>
				<br>
				<br>
				<?php
			}
			  
			if($row['S3']!=0) {
			  	echo  "SEMESTER3 : " . $row["S3"] ."<br>";
				$_SESSION["SEM"] = 3;
				?>
				<a href="stu_aca3.php">S3</a>
				<br>
				<br>
				<?php
			}
			
			if($row['S4']!=0) {
			  	echo  "SEMESTER4 : " . $row["S4"] ."<br>";
				$_SESSION["SEM"] = 4;
				?>
				<a href="stu_aca4.php">S4</a>
				<br>
				<br>
				<?php
			}
			  
			if($row['S5']!=0) {
			  	echo  "SEMESTER5 : " . $row["S5"] ."<br>";
			  	$_SESSION["SEM"] = 5;
			  	?>
				<a href="stu_aca5.php">S5</a>
				<br>
				<br>
				<?php
			}
			  
			if($row['S6']!=0) {
			  	echo  "SEMESTER6 : " . $row["S6"] ."<br>";
				$_SESSION["SEM"] = 6;
				?>
				<a href="stu_aca6.php">S6</a>
				<br>
				<br>
				<?php
			}
			  
			if($row['S7']!=0) {
			  	echo  "SEMESTER7 : " . $row["S7"] ."<br>";
				$_SESSION["SEM"] = 7;
				?>
				<a href="stu_aca7.php">S7</a>
				<br>
				<br>
				<?php
			}
			
			if($row['S8']!=0) {
			  	echo  "SEMESTER8 : " . $row["S8"] ."<br>";
				$_SESSION["SEM"] = 8;
				?>
				<a href="stu_aca8.php">S8</a>
				<br>
				<br>
				<?php
			}
			
			echo  "CURRENT CGPA : " . $row["CGPA"] ."<br>";
			  
			echo  "TOTAL CREDITS ACQUIRED : " . $row["ACC_CRE"] ."<br>";  
        }
	}
$conn->close();

?>

                </div>
            </div>
        </div>
    </body>
</html>