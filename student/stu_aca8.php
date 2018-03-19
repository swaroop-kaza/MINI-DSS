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
$SEM=5;

$sql = "SELECT * FROM course_taken WHERE STU_ID='$STUDENT_ID';";
$result= mysqli_query($conn, $sql);

$x=0;


if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
        if($row['SEM']==$SEM)
		{       

				echo "GRADE : ".$row['GRADE']."<br>" ;
				echo "CREDITS : ".$row['CREDITS']."<br>" ;
				              
              $COURSE_ID=$row['COR_ID'];
                echo "COURSE ID : ".$row['COR_ID']."<br>" ;
			  $sql = "SELECT COURSE_NAME FROM dept_courses WHERE COURSE_ID='$COURSE_ID';  ";
			  $result1= mysqli_query($conn, $sql);
			  
              if (mysqli_num_rows($result1) > 0) 
			  	{
				    $row = mysqli_fetch_assoc($result1);
				                            
				             echo "COURSE NAME : ".$row['COURSE_NAME']."<br>" ."<br>"; 
				}
				
				
				
				
        }  
                                    
	}
}






mysqli_close($conn);
?> 


                </div>
            </div>
        </div>
    </body>
</html>
