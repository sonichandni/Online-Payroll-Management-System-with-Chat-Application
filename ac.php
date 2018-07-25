
<?php
    	
	include_once 'config/config.php';
	var_dump($_POST);
	
    	
    	
    	
     $from_id=$_SESSION['employeeid'];
     $get_id=$_GET['id'];
     $msg='leave accept';

     $q="INSERT INTO chat (`from_id`, `to_id`, `message`) values('".$from_id."','".$get_id."','".$msg."')";
	
     echo $q;
    // if(mysqli_affected_rows($db_obj) > 0)
      if(mysqli_affected_rows($connection_obj) > 0)
	
	{
			$shift_data = mysqli_fetch_assoc($q);

	}
	else
	{
		echo "insert error".mysqli_error($connection_obj);

	}


	$status = mysqli_query($connection_obj,$q);
	if($status)
	{
		
		header("location:./Accept_Reject.php");
	}
	else
	{
		echo "insert error";
	}


?>