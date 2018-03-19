<?php
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
                <?php
                 	$result1=$_SESSION["USERNAME"];
                 	echo $result1;
                ?>
              </h3>
            </div>
            <div class="div2">
                <div>
                        <a href="stu_details.php"><button>STUDENT DETAILS</button></a><br>
                        <a href="stu_academics.php"><button>ACADEMIC DETAILS</button></a><br>
                        <a href="sem_marksatt.php"><button>CURRENT SEM MARKS AND ATTENDENCE</button></a><br>
                        
                </div>
                <div>
                  
                </div>
            </div>
        </div>
    </body>
</html>
