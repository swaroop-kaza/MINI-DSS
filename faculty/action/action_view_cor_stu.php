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
    <title>NITC FACULTY MODE</title>
    <link rel="icon" href="../images/nitc_image.jpg">
    <link rel="stylesheet" type="text/css" href="../css/stu_home.css">
  </head>
    <body>
        <div>
            <div class="div1">
                <a href="FA_home.php"><img src="../images/nitc_image.jpg"></a>
                <h2 class="header">NITC DSS FACULTY LOGIN</h2>
                <div class="link">
                  <a href="../lib/logout.php">LOGOUT</a>
                </div>
            </div>
            <div class="div3">
              <h3>
                <?php
                 	$result1=$_SESSION["USERNAME"];
                 	echo $result1;
                ?>
              </h3>
            </div>
            <div class="div2">
                <div>
                        <a href="view_stu.php"><button>LIST OF STUDENTS</button></a><br>
                        <a href="marks_update.php"><button>MARKS UPDATE</button></a><br>
                        <a href="att_update.php"><button>ATTENDENCE UPDATE</button></a><br>
                        <a href="view_cor_stu.php"><button>COURSES AND STUDENTS</button></a><br>
                        <a href="gpa_update.php"><button>GPA_UPDATE</button></a><br>
                        <a href="grade_update.php"><button>GRADE_UPDATE</button></a><br>
                </div>
                <div>
<?php


$FACULTY_ID=$_SESSION["USERNAME"] ;
$COURSE_ID=$_POST['COURSE_ID'];
$x=0;
$sql = "SELECT COURSE_ID FROM dept_courses WHERE PRI_FACULTY_ID='$FACULTY_ID';  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){                    
    	if($row['COURSE_ID']==$COURSE_ID){
            $x=1;
          }
    }
}
if($x==1)
{
	$sql = "SELECT STU_ID FROM sem_marks WHERE COR_ID='$COURSE_ID';  ";
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){                    
    	echo  "          STUDENT ID   : "  .$row["STU_ID"]."<br>";
    }
}
}
$conn->close();

?>



                </div>
            </div>
        </div>
    </body>
</html>