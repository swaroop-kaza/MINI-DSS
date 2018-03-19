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
                <a href="admin_home.php"><img src="../images/nitc_image.jpg"></a>
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
                  
                </div>
            </div>
        </div>
    </body>
</html>
