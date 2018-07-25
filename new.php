<?php
include_once 'config/config.php';

$row = 1;
$i1=0;
$i2=0;
$i3=0;
$i4=0;
$i5=0;
$value= array( array( ) );
if (($handle = fopen("bio.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo  $c." ".$data[$c] . "<br />\n";
           // $value[$c]=$data[$c];
            $row1=$data[0];
            $row2=$data[1];
            $row3=$data[2];
            $row4=$data[3];
            $row5=$data[4];
        }
            $q="INSERT INTO employee_attendance (`Employee_attendance_id`, `Date`, `Bio_metric_id`, `Checkin_time`, `Checkout_time`) values('".$row1."','".$row2."','".$row3."','".$row4."','".$row5."')";
            $status = mysqli_query($connection_obj,$q);
            echo $q;
	if($status)
	{
		

		header("location:./new.php");
	}
	else
	{
		
		
		echo "insert error".mysqli_error($connection_obj);
	}

          
        
       }
       fclose($handle);

      }
   /*   for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
      echo "row:".$row."<br>";
for($c=0;$c<$row-1;$c++)
{

$eid=$value[0];
//echo "eid".$eid."<br>";
    $dat=$value[1];//echo "date". $dat."<br>";
    $bio=$value[2];//echo "bio".$bio."<br>";
    $intime=$value[3];//echo "in".$intime."<br>";
    $outtime=$value[4];//echo "out".$outtime."<br>";


     $q="INSERT INTO employee_attendance (`Employee_attendance_id`, `Date`, `Bio_metric_id`, `Checkin_time`, `Checkout_time`) values('".$eid."','".$dat."','".$bio."','".$intime."','".$outtime."')";
	
   /*  $i1++;
     $i2++;
     $i3++;
     $i4++;
     $i5++;
     /*if(mysqli_affected_rows($connection_obj) > 0)
	{
			$employee_data = mysqli_fetch_assoc($connection_obj);
	}
	else
	{
		echo "insert error".mysqli_error($connection_obj);
		//header("location:./500.php");
	}	

	$status = mysqli_query($connection_obj,$q);
	if($status)
	{
		//echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
		

		header("location:./new.php");
	}
	else
	{
		//echo "<script type='text/javascript'>alert('failed!')</script>";
		
		echo "insert error".mysqli_error($connection_obj);
	}



}*/

    
    


?>