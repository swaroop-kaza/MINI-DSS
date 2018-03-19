<?php
session_start();
?>
<!doctype html>
<html>
	<head>
    <title>NITC STUDENT DSS</title>
    <link rel="icon" href="images/nitc_image.jpg">
    <link rel="stylesheet" type="text/css" href="css/stu_index.css">
  </head>
  <body>
    <div>
      <div class="header">
        <a href="http://www.nitc.ac.in/"><img src="images/nitc_image.jpg"></a>
        <div class="div1">
          <h2>NATIONAL INSTITUTE OF TECHNOLOGY CALICUT</h2>
          <br>
          <h2>DECISION SUPPORT SYSTEM</h2>
        </div>
      </div>
      <div class="div2">
        <form action="action_forgot_password.php" method="POST">
          <div>
              ROLL NUMBER:
              <input type="text" name='USERNAME' placeholder="ROLL NUMBER" />
              <br>
              <br>
              DATE OF BIRTH:
              <input type="date" name='DOB' placeholder="DOB" />
              <br>
              <br>
          </div>
          <button>SUBMIT</button>
        </form>
      </div>
    </div>
  </body>
</html>