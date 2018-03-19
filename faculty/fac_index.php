<!doctype html>
<html>
	<head>
    <title>NITC FACULTY DSS</title>
    <link rel="icon" href="../images/nitc_image.jpg">
    <link rel="stylesheet" type="text/css" href="../css/stu_index.css">
  </head>
  <body>
    <div>
      <div class="header">
        <a href="http://www.nitc.ac.in/"><img src="../images/nitc_image.jpg"></a>
        <div class="div1">
          <h2>NATIONAL INSTITUTE OF TECHNOLOGY CALICUT</h2>
          <br>
          <h2>DECISION SUPPORT SYSTEM</h2>
        </div>
      </div>
      <div class="div2">
        <form action="action/action_fac_index.php" method="POST">
          <div>
              FACULTY USER NAME:
              <input type="text" name='USERNAME' placeholder="USER NAME" />
              <br>
              <br>
              PASSWORD:
              <input type="password" name='PASSWORD' placeholder="PASSWORD" />
              <br>
              <br>
              <a href="../forgot_password_faculty.php" id="forgot_pw">Forgot Password</a>
              <br>
              <br>
          </div>
          <button>login</button>
        </form>
      </div>
    </div>
  </body>
</html>