<?php  
		$sname='localhost';
		$uname='root';
		$password='';
		$dname='se';

        $conn = mysqli_connect($sname,$uname,$password,$dname);
		$conn = mysqli_connect('127.0.0.1','root','');
			if (!$conn)
			{
				echo "database fail ";
			}
			if (!mysqli_select_db($conn,'se')) {
				echo'database not connected';
			}
		$fname =$_POST['fname'];
		$lname =$_POST['lname'];
		$email=$_POST['email'];
		$pwd=$_POST['pass'];
		$sql ="INSERT INTO user (Firstname,Lastname,Email,Password) VALUES('$fname', '$lname'  ,'$email' ,'$pwd')";
		if(!mysqli_query($conn,$sql))
		{
			echo 'not inserted';
		}
		else
		{
			
		 header( "Location: welcome.php" );

		}

?>