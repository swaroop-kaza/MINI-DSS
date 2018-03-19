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
                    $sql = "SELECT * FROM student WHERE STUDENT_ID= '$STUDENT_ID' ;";
                    $x=0;
                    $result = mysqli_query($conn,$sql);
                    if (mysqli_num_rows($result) > 0) {
                          $row = mysqli_fetch_assoc($result);
                            if($row['STUDENT_ID']==$STUDENT_ID)
                            {
                            $x=1;              
                                  $FACULTY_ID=$row["FA_ID"];        
                                  echo  "ROLL NUMBER    : " . $row["STUDENT_ID"]."<br>";
            echo  "FIRSTNAME      : " . $row["F_NAME"]. "<br>";
            echo  "LASTNAME       : " . $row["L_NAME"]. "<br>";
            echo  "GENDER         : " . $row["GENDER"]."<br>";
            echo  "EMAIL          : " . $row["EMAIL"]."<br>";
            echo  "DATE OF BIRTH  : " . $row["DOB"]."<br>";
            echo  "PHONE_NO       : " . $row["PH_NO"]."<br>"; 
                            } 
                                                        
                        }
                        if($x==1)
                    {
                        $sql = "SELECT FACULTY_NAME FROM dept_faculty WHERE FACULTY_ID='$FACULTY_ID';";
                        $result= mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($result) > 0) 
                        {
                            $row = mysqli_fetch_assoc($result);
                            
                                    echo  "FACULTYADVISOR NAME : " . $row["FACULTY_NAME"]  . "<br>" ; 
                        }
                    } 
                $conn->close();
                ?>
                </div>
            </div>
        </div>
    </body>
</html>