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
                  
                </div>
            </div>
        </div>
    </body>
</html>
