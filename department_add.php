
<?php
    	
	include_once 'config/config.php';
	//var_dump($_POST);
	
    	
    	$departmentid=$_POST['departmentid'];
  
    $departmentname=$_POST['departmentname'];
    
    $createddate=$_POST['createddate'];
    $modifieddate=$_POST['modifieddate'];
    $status=$_POST['status'];


     $q="INSERT INTO department(`Department_id`,`Department_name`, `Created_date`, `Modified_date`, `Status`) values('".$departmentid."','".$departmentname."','".$createddate."','".$modifieddate."','".$status."')";
	
    
	
      if(mysqli_affected_rows($connection_obj) > 0)
	
	{
			$department_data = mysqli_fetch_assoc($q);
			header("location:./department_count.php");

	}
	else
	{
		header("location:./500.php");
	}		

	$status = mysqli_query($connection_obj,$q);
	if($status)
	{
		
		header("location:./department_count.php");

	}
	else
	{
		header("location:./500.php");
	}




?>