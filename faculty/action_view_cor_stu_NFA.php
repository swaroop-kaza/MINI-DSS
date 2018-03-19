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
                <a href="NFA_home.php"><img src="../images/nitc_image.jpg"></a>
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
                        <a href="marks_update_NFA.php"><button>MARKS UPDATE</button></a><br>
                        <a href="att_update_NFA.php"><button>ATTENDENCE UPDATE</button></a><br>
                        <a href="view_cor_stu_NFA.php"><button>COURSES AND STUDENTS</button></a><br>
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
        $STUDENT_ID=$row["STU_ID"];
        
        $sql = "SELECT F_NAME FROM student WHERE STUDENT_ID='$STUDENT_ID';  ";
        $result1 = $conn->query($sql);

        if ($result1->num_rows > 0) {
            $row = $result1->fetch_assoc();
echo  "          STUDENT NAME   : "  .$row["F_NAME"]."<br>"."<br>"."<br>";
    }
    }
    }
}
if($x==0) {
   ?>
<script type="text/javascript">
alert("YOU ARE NOT FACULTY OF THAT COURSE");
window.location.href = "NFA_home.php";
</script>
<?php

}
$conn->close();

?>



                </div>
            </div>
        </div>
    </body>
</html>