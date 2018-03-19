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

$FACULTY_ID=$_SESSION["USERNAME"];
$STUDENT_ID=$_POST['STUDENT_ID'];

$flag=0;

$sql = "SELECT FA_ID FROM student WHERE STUDENT_ID='$STUDENT_ID';";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
  $row = $result->fetch_assoc(); 
		if( $row['FA_ID']==$FACULTY_ID) 
		{        
			$flag=1;			
		}
}
	
if($flag==1)
{

	$COURSE_ID=$_POST['COURSE_ID'];
	$SEM=$_POST['SEM'];
	$GRADE=$_POST['GRADE'];
	$CREDITS=$_POST['CREDITS'];
	
	$sql = "SELECT PRI_FAC_ID FROM secondary_faculty WHERE COR_ID='$COURSE_ID';";
	$result = $conn->query($sql);

	if($result->num_rows > 0)
	{
		$row = $result->fetch_assoc();
			$FAC_ID=$row['PRI_FAC_ID'];
		
	}

	$sql = " INSERT INTO course_taken(STU_ID,COR_ID,SEM,GRADE,CREDITS,FAC_ID) VALUES ('$STUDENT_ID','$COURSE_ID','$SEM','$GRADE','$CREDITS','$FAC_ID');";


	if (mysqli_query($conn, $sql) === TRUE)
	 {
	    echo "New record created successfully";
			
		header('Location:../FA_home.php');
	}
		
}


if($flag==0) 
{
   ?>
<script type="text/javascript">
alert("YOU ARE NOT THE FA FOR THAT GUY");
window.location.href = "../FA_home.php";
</script>
<?php

}

$conn->close();

?>