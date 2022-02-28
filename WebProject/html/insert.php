<?php
$userName=$_POST['userName'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];


if(!empty($userName)||!empty($email)||!empty($phone)||!empty($message))
{
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="datab";
	
	
	//connection
	$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
	
	if(mysqli_connect_error())
	{
		die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
	}
	else
	{
		$SELECT="SELECT email FROM forma WHERE email=? Limit 1";
		$INSERT="INSERT Into forma(userName,email,phone,message) values(?,?,?,?)";
		
		$stmt=$conn->prepare($SELECT);
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum=$stmt->num_rows;
		
		if($rnum==0)
		{
			$stmt->close();
			
			$stmt=$conn->prepare($INSERT);
			$stmt->bind_param("ssis",$userName,$email,$phone,$message);
			$stmt->execute();
			echo "New record is inserted successfully. Thank you!";
		}
		else
		{
			echo "Someone already register using this email";
		}
		$stmt->close();
		$conn->close();
	}

}
else
{
	echo "All field are required";
	die();
}
	






?>
<!DOCTYPE html>
<html>
<head>
</head>
<style>
a:link{
text-decoration:none;}
</style>
<body>
<h4><a href="contact-us.html">Go back to the page...</h4>
</body>
</html>
