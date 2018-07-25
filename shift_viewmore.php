<?php
	include_once 'header_h.php';
?>
<?php
	include_once 'roles.php';
?>

<?php


include_once 'config/config.php';



  $id=$_GET['id'];

$q="SELECT * from shift where Shift_id=".$id.";";
 $status = mysqli_query($connection_obj,$q);
       
         echo "   <form action=shift_view.php method=post >
    <section class=content>
        <div class=container-fluid>
         <div class=row clearfix>
                <div class=col-lg-12 col-md-12 col-sm-12 col-xs-12>
                    <div class=card>
                       
                        <div class=body>";
                            
                                    
             
             if($status)
        {
            while ($row = mysqli_fetch_assoc($status))
            { 
              	
              	echo "<b>Shift ID:</b>".$row['Shift_id']."<br>";
              	 echo  "<b>Shift Name:</b>".$row['Shift_name']."<br>";
              	echo   "<b>Shift In Time:</b>".$row['In_time']."<br>";
              	 echo   "<b>Shift Out time:</b>".$row['Out_time']."<br>";
              	
             	        echo "<b>Created Date:</b>".$row['Created_date']."<br>";
              	        echo "<b>Modified Date:</b>".$row['Modified_date']."<br>";
                        
              	        echo "<b>Status:</b>".$row['Status']."<br>";
              	        echo "<br><br><br><br>";

              	       
            }
           }
            
            ?>
       
          <input class="btn btn-primary waves-effect" name="submit" align="center" type="submit" value="BACK" formaction="./shift_view.php">
</section>
</form>

<?php
	include_once 'footer_h.php';
?>

