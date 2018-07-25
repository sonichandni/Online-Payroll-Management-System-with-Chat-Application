
<?php
   	include_once 'config/config.php';
	//var_dump($_POST);
    	$id=$_GET['id'];
    	
  		$q = "DELETE FROM employee WHERE Employee_id = '$id'";
		$status = mysqli_query($connection_obj,$q);
		if($status)
		{
			//confirm('Are u sure want to delete?');
			header("location:./employee_view.php");
		}
		else
		{
			header("location:./500.php");
		}
	
?>