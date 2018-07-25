
<?php
	include_once 'config/config.php';
	
	//var_dump($_POST);
	$designationid=$_POST['designationid'];
	$designationname=$_POST['designationname'];
	$superid=$_POST['superid'];
	$superidname=$_POST['superidname'];
	
	$createddate=$_POST['createddate'];
	$modifieddate=$_POST['modifieddate'];
	$status=$_POST['status'];

	$q="update designation set Designation_id='$designationid',Designation_name='$designationname',Super_id='$superid',Super_id_name='$superidname',Created_date='$createddate',Modified_date='$modifieddate',Status='$status' where Designation_id=$designationid";
	
     if(mysqli_affected_rows($connection_obj) > 0)
	{
			$employee_data = mysqli_fetch_assoc($connection_obj);
	}
	else
	{
		header("location:./500.php");
	}		

	$status = mysqli_query($connection_obj,$q);
	if($status)
	{
		 "<script type='text/javascript'>alert('submitted successfully!')</script>";
		

		header("location:./designation_view.php");
	}
	else
	{
		header("location:./500.php");
	}
?>