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

$FAC_ID=$_SESSION["USERNAME"];
$STUDENT_ID=$_POST['STUDENT_ID'];

$flag=0;
$sql = "SELECT FA_ID FROM student WHERE STUDENT_ID='$STUDENT_ID';";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{

  $row = $result->fetch_assoc();
		if($row['FA_ID']==$FAC_ID) 
		{        
			$flag=1;		
		}
    
}
echo $flag;

if($flag==1)
{
	$var=$_POST["SEM"];
	$SGPA=$_POST["SGPA"];
	$CGPA=$_POST["CGPA"];
	$CREDITS=$_POST["CREDITS"];
	if($var=="SEM1")
	{
		$sql1 = "UPDATE stu_academics SET S1='$SGPA' WHERE STU_ID='$STUDENT_ID'  ";
		if ($conn->query($sql1) == TRUE)
		 {
		    echo "Record updated successfully";
			header('Location:../FA_home.php');
		}
	}
	if($var=="SEM2")
	{
		$sql1 = "UPDATE stu_academics SET S2='$SGPA' WHERE STU_ID='$STUDENT_ID'  ";
		if ($conn->query($sql1) == TRUE)
		 {
		    echo "Record updated successfully";
			header('Location:../FA_home.php');
		}
	}
	if($var=="SEM3")
	{
		$sql1 = "UPDATE stu_academics SET S3='$SGPA' WHERE STU_ID='$STUDENT_ID'  ";
		if ($conn->query($sql1) == TRUE)
		 {
		    echo "Record updated successfully";
			header('Location:../FA_home.php');
		}
	}
	if($var=="SEM4")
	{
		$sql1 = "UPDATE stu_academics SET S4='$SGPA' WHERE STU_ID='$STUDENT_ID'  ";
		if ($conn->query($sql1) == TRUE)
		 {
		    echo "Record updated successfully";
			header('Location:../FA_home.php');
		}
	}
	if($var=="SEM5")
	{
		$sql1 = "UPDATE stu_academics SET S5='$SGPA' WHERE STU_ID='$STUDENT_ID'  ";
		if ($conn->query($sql1) == TRUE)
		 {
		    echo "Record updated successfully";
			header('Location:../FA_home.php');
		}
	}
	
	if($var=="SEM6")
	{
		$sql1 = "UPDATE stu_academics SET S6='$SGPA' WHERE STU_ID='$STUDENT_ID'  ";
		if ($conn->query($sql1) == TRUE)
		 {
		    echo "Record updated successfully";
			header('Location:../FA_home.php');
		}
	}
	if($var=="SEM7")
	{
		$sql1 = "UPDATE stu_academics SET S7='$SGPA' WHERE STU_ID='$STUDENT_ID'  ";
		if ($conn->query($sql1) == TRUE)
		 {
		    echo "Record updated successfully";
			header('Location:../FA_home.php');
		}
	}
	
	if($var=="SEM8")
	{
		$sql1 = "UPDATE stu_academics SET S8='$SGPA' WHERE STU_ID='$STUDENT_ID'  ";
		if ($conn->query($sql1) == TRUE)
		 {
		    echo "Record updated successfully";
			header('Location:../FA_home.php');
		}
	}
	$sql1 = "UPDATE stu_academics SET CGPA='$CGPA' WHERE STU_ID='$STUDENT_ID'  ";
		if ($conn->query($sql1) == TRUE)
		 {
		    echo "Record updated successfully";
			header('Location:../FA_home.php');
		} 
	$sql1 = "UPDATE stu_academics SET ACC_CRE=ACC_CRE+'$CREDITS' WHERE STU_ID='$STUDENT_ID'  ";
		if ($conn->query($sql1) == TRUE)
		 {
		    echo "Record updated successfully";
			header('Location:../FA_home.php');
		} 
}


if($flag==0) {
   ?>
<script type="text/javascript">
alert("YOU ARE THE NOT FA OF THAT GUY");
window.location.href = "../FA_home.php";
</script>
<?php

}
//echo $passcheck;

$conn->close();

?>  