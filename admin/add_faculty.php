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
                  <form action="action/action_add_faculty.php" method="POST">
                  <div>
                      FACULTY ID:
                      <input type="text" name='FACULTY_ID' placeholder="FACULTY ID" />
                      <br>
                      <br>
                      FACULTY NAME:
                      <input type="text" name='FACULTY_NAME' placeholder="FACULTY NAME" />
                      <br>
                      <br>
                      QUALIFICATIONS:
                      <input type="text" name='QUALIFICATIONS' placeholder="QUALIFICATIONS" />
                      <br>
                      <br>
                      FACULTY GENDER:
                      <input type="text" name='GENDER' placeholder="GENDER" />
                      <br>
                      <br>
                      FACULTY MAIL ID:
                      <input type="text" name='EMAIL' placeholder="EMAIL@.com" />
                      <br>
                      <br>
                      FACULTY PHONE NUMBER:
                      <input type="text" name='PH_NO' placeholder="PHONE NO" />
                      <br>
                      <br>
                      FACULTY OFFICE ID:
                      <input type="text" name='OFFICE_ID' placeholder="OFFICE ID EX: CSED101B" />
                      <br>
                      <br>
                      FACULTY ROOM NO:
                      <input type="text" name='ROOM_NO' placeholder="ROOM NO" />
                      <br>
                      <br>
                      FACULTY BULIDING NAME:
                      <input type="text" name='BULIDING' placeholder="BULIDING NAME" />
                      <br>
                      <br>
                      FACULTY LOGIN PASSWORD:
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
