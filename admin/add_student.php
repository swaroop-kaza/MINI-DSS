<?php
	session_start();
?>
<!doctype html>
<html>
  <head>
    <title>NITC ADMIN HOME</title>
    <link rel="icon" href="../images/nitc_image.jpg">
    <link rel="stylesheet" type="text/css" href="../css/stu_home.css">
  </head>
    <body>
        <div>
            <div class="div1">
                <a href="stu_home.php"><img src="../images/nitc_image.jpg"></a>
                <h2 class="header">NITC DSS ADMIN LOGIN</h2>
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
                        <a href="add_student.php"><button>ADD STUDENT</button></a><br>
                        <a href="add_faculty.php"><button>ADD FACULTY</button></a><br>
                        <a href="add_course.php"><button>ADD COURSE</button></a><br>
                </div>
                <div>
                  <form action="action/action_add_student.php" method="POST">
                  <div>
                      STUDENT ID:
                      <input type="text" name='STUDENT_ID' placeholder="STUDENT ID" />
                      <br>
                      <br>
                      STUDENT FIRST NAME:
                      <input type="text" name='F_NAME' placeholder="FISRT NAME" />
                      <br>
                      <br>
                      STUDENT LAST NAME:
                      <input type="text" name='L_NAME' placeholder="LAST NAME" />
                      <br>
                      <br>
                      SEMESTER:
                      <input type="number" name='SEM' placeholder="SEMESTER" />
                      <br>
                      <br>
                      FACULTY ADVISOR ID:
                      <input type="number" name='FA_ID' placeholder="FACULTY ADVISOR ID" />
                      <br>
                      <br>
                      STUDENT GENDER:
                      <input type="text" name='GENDER' placeholder="GENDER" />
                      <br>
                      <br>
                      STUDENT MAIL ID:
                      <input type="text" name='EMAIL' placeholder="EMAIL@.com" />
                      <br>
                      <br>
                      STUDENT DOB:
                      <input type="date" name='DOB' placeholder="DOB" />
                      <br>
                      <br>
                      STUDENT PHONE NUMBER:
                      <input type="text" name='PH_NO' placeholder="PHONE NO" />
                      <br>
                      <br>
                      STUDENT LOGIN PASSWORD:
                      <input type="text" name='PASSWORD' placeholder="PASSWORD" />
                      <br>
                      <br>
                  </div>
                  <button>SUBMIT</button>
                </form>                  
                </div>
            </div>
        </div>
    </body>
</html>
