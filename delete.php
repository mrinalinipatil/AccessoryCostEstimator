<?php
$username=$_POST["username"];
$password=$_POST["password"];
$db = mysqli_connect('localhost','root','','cardb')
 or die('Error connecting to MySQL server.');
		
		//delete user	
		$sql = "SELECT * FROM car WHERE username='$username'";
$result=mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result)>0)
	{
		if($row['username']==$username && $row['password']==$password)
		{ 
		$sql = "DELETE FROM car
         WHERE username='$username'";
        $result=mysqli_query($db,$sql);	
			if($result){
	header('Location: http://localhost/wp/home.html');
		echo '<script language="javascript">';
echo 'alert("Account deleted.")';
echo '</script>';
exit;
}

 else{
	header('Location: http://localhost/wp/delete.html');
		echo '<script language="javascript">';
echo 'alert("Account deletion unsuccessful.")';
echo '</script>';
exit;
}
		}

			else 
		{
			header('Location: http://localhost/wp/delete.html');
		echo '<script language="javascript">';
echo 'alert("Invalid username or password.")';
echo '</script>';
exit;
}
	}
	else
	{
		header('Location: http://localhost/wp/delete.html');
		echo '<script language="javascript">';
echo 'alert("Invalid username or password.")';
echo '</script>';
exit;
}
			
			
			
			
			
			
			
			

?>










