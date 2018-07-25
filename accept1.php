<?php
    	
	include_once 'config/config.php';
	var_dump($_POST);
	
    	
    	

   //$lreason=$_POST['leavereason'];
   $superid=$_SESSION['employee_id'];
   //$lr=$_SESSION['lr'];
   //$stts="0";
   $eid=$_POST['employeeid'];
   $mymsg='Leave reject reason is ';
   $ctime=date("h:i:s");
   $cstts="2";
   //echo "jgvcshgc $eid khhbb <br>";
   //$q="UPDATE employee_leaves SET Action_taken_by_id='$superid' , Leave_reject_reason_description='$lreason' , Status='$stts' WHERE Employee_id='$eid'";
   $m="INSERT INTO chat (from_id,to_id,message,chattime,status) values('$superid','$eid','$mymsg','$ctime','$cstts')";
   //echo $q;
     
	$status = mysqli_query($connection_obj,$m);
	if($status)
	{
		
		header("location:./Accept_Reject.php");
	}
	else
	{
		echo "insert error";
	}
	}
?>