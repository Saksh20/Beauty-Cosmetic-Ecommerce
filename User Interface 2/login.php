<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cosmetics";

	$conn=mysqli_connect($servername, $username, $password,$dbname);
	if (isset($_POST['uname'])) {
		
		$un=$_POST['uname'];
		$pw=$_POST['psw'];
		
		$sql="select * from registration where uname='$un' AND psw='$pw'";				
		
		
		$result=mysqli_query($conn ,$sql);
		
		$num=mysqli_num_rows($result);
		
		if($num >0){
			echo "You have successfully logged in !!";
			if(strcmp($un,'admin')==0){
				header("Location: http://localhost/admin_panel/index.php");
			}
			else{
				header("Location: http://localhost/Cosmetics/index.php");
			}
		}
		else {
			echo "You have entered incorrect Password.";
		}
	}

?>