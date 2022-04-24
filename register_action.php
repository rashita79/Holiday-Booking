<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
//include 'register.php';
$con = mysqli_connect('localhost', 'root', '','holiday');

$dest = $_POST['dest'];
$dept = $_POST['dept'];
$pname = $_POST['pname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$tdate = $_POST['tdate'];
$hotel = $_POST['hotel'];
$nights = $_POST['nights'];
$person= $_POST['person'];


$sql="Insert into form(dest , dept , pname , phone , email , tdate , hotel , nights , person) values ('$dest' , '$dept' , '$pname', '$phone', '$email', '$tdate','$hotel','$nights','$person')";
// echo $sql;
if(mysqli_query($con, $sql) == true)
{
	echo "<center><h1><b>You have been sucessfully registered<b> </h1></center><br><br>";
	<a href="register.php">GO BACK FOR NEW REGISTRATION</a>
	// echo '<center><table><tr><td><A href="sindex.php"><button style="background-color:black; border-color:black"><span style="color:white">Sign in ! </span></button></a></td></tr></table></center>';
}
else
{
	echo "<center><h1><b>Registration Unsucessful , try again with different credentials<b> </h1></center><br><br>";
echo '<center><table><tr><td><A href="register.php"><button style="background-color:black; border-color:black"><span style="color:white">Register&nbsp&nbspAgain</span></button></a></td></tr></table></center>';}

?>