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


$STUDENT_ID=$_SESSION["USERNAME"] ;
$x=0;
$sql = "SELECT * FROM sem_marks WHERE STU_ID='$STUDENT_ID';  ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        if($row['STU_ID']==$STUDENT_ID){                    

            echo  "T1 MARKS 	: " . $row["T1"]."<br>";
			echo  "T2 MARKS		: "  .$row["T2"]."<br>";
			echo  "PROJECT 		: " . $row["PRO_ASS"]."<br>";
			echo  "END_SEM	 	: "  .$row["END_SEM"]."<br>";
  

            $COURSE_ID=$row['COR_ID'];
			$sql = "SELECT COURSE_NAME FROM dept_courses WHERE COURSE_ID='$COURSE_ID';  ";
			$result1 = $conn->query($sql);

			if ($result1->num_rows > 0) {
	
				$row = $result1->fetch_assoc(); 
    

				        echo "COURSE NAME : ".$row['COURSE_NAME'] ."<br>" ."<br>"; 				                                   
				}


				echo "ATTENDANCE FOR THIS COURSE" ."<br>";

			$sql = "SELECT * FROM sem_att WHERE COR_ID='$COURSE_ID'; ";
			$result2 = $conn->query($sql);
			if ($result2->num_rows > 0) {

				$row = $result2->fetch_assoc();  
			            echo "T1 ATTENDANCE 	: ".$row['BT1'] ."<br>";
						echo "T2 ATTENDANCE 	: ".$row['BT1_T2'] ."<br>";
						echo "ENDSEM ATTENDANCE : ".$row['BT2_END']."<br>" ;
						echo "TOTAL 			: ".$row['TOTAL'] ."<br>" ."<br>" ."<br>" ; 				           
				}
			
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