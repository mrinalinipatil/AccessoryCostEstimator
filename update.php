<?php
$password=$_POST["password"];
$new=$_POST["nusername"];

$db = mysqli_connect('localhost','root','','cardb')
 or die('Error connecting to MySQL server.');

$sql = "SELECT * FROM car WHERE password='$password'";
$result=mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result)>0)
	{
		if($row['password']==$password)
		{ 
		$sql = "UPDATE car
            SET username='$new'
            WHERE password='$password'";
        $result=mysqli_query($db,$sql);	
			if($result){	
		header('Location: http://localhost/wp/login.html');
		echo '<script language="javascript">';
echo 'alert("account updated successfully.")';
echo '</script>';
exit;
}

 else{	
		header('Location: http://localhost/wp/update.html');
		echo '<script language="javascript">';
echo 'alert("Account updation unsuccessful.")';
echo '</script>';
exit;
}
		}

			else 
		{	
		header('Location: http://localhost/wp/update.html');
		echo '<script language="javascript">';
echo 'alert("Invalid password.")';
echo '</script>';
exit;
}
	}
	else
	{	
		header('Location: http://localhost/wp/update.html');
		echo '<script language="javascript">';
echo 'alert("Invalid Password.")';
echo '</script>';
exit;
}
			
			
			
			

?>