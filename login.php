<?php
session_start();

$username=$_POST["name"];
$password=$_POST["password"];
$_SESSION['username'] =$username ;

$db = mysqli_connect('localhost','root','','cardb')
 or die('Error connecting to MySQL server.');


$sql = "select * from  car";
$result=mysqli_query($db,$sql);
while ($row = mysqli_fetch_array($result)) {
if($username==$row['username'] && $password==$row['password'])
   {
$p=1;
break;
   }
   else
   {
   $p=0;
  }

}
 
if($p==1)
{	
		header('Location: http://localhost/wp/carselect.html');
		echo '<script language="javascript">';
echo 'alert("Login Successful.")';
echo '</script>';
exit;
}
else if($p==0)
{
	header('Location: http://localhost/wp/login.html');
	echo '<script language="javascript">';
echo 'alert("Login UnSuccessful.")';
echo '</script>';

exit;
	}

?>