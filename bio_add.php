
<?php

include_once 'config/config.php';
var_dump($_POST);
if (isset($_POST['submit']))
{
$bf=$_POST['biofile'];
echo $bf;
 $handle = fopen($bf, 'r');
    if ( ! $handle ) {
        echo 'File does not exists in this location';
        echo mysqli_error($connection_obj);
        exit;
    }

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
       $q="INSERT INTO employee_attendance (`Employee_attendance_id`,`Employee_id`, `Checkin_time`, `Checkout_time`, `Bio_date`) values('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."')";
       
           
            $status = mysqli_query($connection_obj,$q);

       
    }



  if($status)
  {
    

    header("location:./Biosuccess.php");
  }
  else
  {
    //header("location:./500.php");
    echo mysqli_error($connection_obj);
    
    
  }
}
   

?>