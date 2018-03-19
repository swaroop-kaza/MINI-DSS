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
$COURSE_ID=$_POST['COURSE_ID'];

$flag=0;

$sql = "SELECT COURSE_ID FROM dept_courses WHERE PRI_FACULTY_ID='$FAC_ID';";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
  while($row = $result->fetch_assoc()) 
  {
		if( $row['COURSE_ID']==$COURSE_ID) 
		{        
			$flag=1;
					
		}
    }
}
if($flag==1)
{
	$var=$_POST['EXAM'];
	$STU_ID=$_POST['STUDENT_ID'];
	$marks=$_POST['MARKS'];
	echo $var;
	echo $STU_ID;
	echo $marks;
	if($var=='T1')
	{

		$sql1 = "UPDATE sem_marks SET T1='$marks' WHERE COR_ID='$COURSE_ID ' AND STU_ID='$STU_ID'; ";
		if ($conn->query($sql1) == TRUE )
		{


		

		    echo "Record updated successfully";
			header('Location:../NFA_home.php');
		} 
	}
	if($var=="T2")
	{
		$sql1 = "UPDATE sem_marks SET T2='$marks' WHERE COR_ID='$COURSE_ID' AND STU_ID='$STU_ID';";
		if ($conn->query($sql1))
		 {
		    echo "Record updated successfully";
			header('Location: ../NFA_home.php');
		} 
	}
	if($var=="PRO_ASS")
	{
		$sql1 = "UPDATE sem_marks SET PROJECT='$marks' WHERE COR_ID='$COURSE_ID' AND STU_ID='$STU_ID'; ";
		if ($conn->query($sql1))
		 {
		    echo "Record updated successfully";
			header('Location: ../NFA_home.php');
		} 
	}
	if($var=="END_SEM")
	{
		$sql1 = "UPDATE sem_marks SET END_SEM='$marks' WHERE COR_ID='$COURSE_ID'AND STU_ID='$STU_ID';";
		if ($conn->query($sql1))
		 {
		    echo "Record updated successfully";
			header('Location:../NFA_home.php');
		} 
	}
	
}


if($flag==0) {
   ?>
<script type="text/javascript">
alert("THIS COURSE IS NOT TAKEN BY YOU");
window.location.href = "../NFA_home.php";
</script>
<?php

}
//echo $passcheck;

$conn->close();

?>  