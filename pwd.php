<?php
	include_once 'config/config.php';
	
	var_dump($_POST);
	$opwd=$_POST['opwd'];
	$npwd=$_POST['npwd'];
	$cpwd=$_POST['cpwd'];
	$eid=$_POST['eid'];
	$check="select * from employee where `Employee_id`=".$eid.";";
	$check_status=mysqli_query($connection_obj,$check);
	$data=mysqli_fetch_assoc($check_status);
	$cnt=0;


	
		//$opwd=$_POST['opwd'];
		if($opwd==$data['Password'])
		{
			$cnt=1;
		}
		else
		{
			echo "<script type='text/javascript'>alert('old Password does not matched')</script>";
			header("location:erroroldpwd.php");
	
		}
	
	if($cnt==1)
	{

		$q="update employee set Password='$npwd',Confirm_password='$cpwd' where Employee_id='$eid'";
		echo $q;
     
		$status = mysqli_query($connection_obj,$q);
		if($status)
		{
			echo "<script type='text/javascript'>alert('Password changed successfully!')</script>";
			header("location:confirmpassword.php");
		//echo "error".mysqli_error($connection_obj);
		
		}
		else
		{
			echo "<script type='text/javascript'>alert('failed!')</script>";
		//echo "error".mysqli_error($connection_obj);
		
		
		}
	}
?>