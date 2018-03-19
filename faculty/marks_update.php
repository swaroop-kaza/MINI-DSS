<?php
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
                  <form action="action/action_marks_update.php" method="POST">
                  <div>
                      STUDENT ID:
                      <input type="text" name='STUDENT_ID' placeholder="STUDENT ID" />
                      <br>
                      <br>
                      COURSE ID:
                      <input type="text" name='COURSE_ID' placeholder="COURSE ID" />
                      <br>
                      <br>
                      EXAM TYPE:
                      <input type="text" name='EXAM' placeholder="EXAM TYPE" />
                      <br>
                      <br>
                      MARKS:
                      <input type="text" name='MARKS' placeholder="MARKS" />
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
