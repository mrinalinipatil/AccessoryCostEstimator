<?php

$name1=$_POST["name"];
$email1=$_POST["email"];
$username1=$_POST["username"];
$pass=$_POST["password"];
$pass1=$_POST["password1"];

$db = mysqli_connect('localhost','root','','cardb')
 or die('Error connecting to MySQL server.');
if($pass==$pass1)
{
$order = "INSERT INTO car
			(name,email,username,password)
			VALUES
			('$name1',
			'$email1',
			'$username1',
			'$pass')";

$result = mysqli_query($db,$order);	
}
else
{
	echo ("Password does not match");
}
if($result){	
		header('Location: http://localhost/wp/login.html');
		echo '<script language="javascript">';
echo 'alert("Input data successful.")';
echo '</script>';
exit;
}
else{
	{	
		header('Location: http://localhost/wp/register.html');
		echo '<script language="javascript">';
echo 'alert("Input data unsuccessful.")';
echo '</script>';
exit;
}
}
/*
$sql = "select * from  car";

$result=mysqli_query($db,$sql);
while ($row = mysqli_fetch_array($result)) {
 echo $row['name'] ;
 echo $row['email'];
 echo $row['username'];
 echo $row['password'];
 

}
*/
?>
