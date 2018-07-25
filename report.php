<?php
	include_once 'header_h.php';
?>
<?php
	include_once 'roles.php';
?>
<?php

                               
?>
<form method="post" action="#">
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>GENERATE REPORT</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                       
                        <div class="body">
                        <h3>
                            <h2 class="card-inside-title">Employee Id:</h2>
                            
                                     <?php echo $_POST['employeeid']; ?>
                                    
                                    <h2 class="card-inside-title">Employee Name:</h2>
                           
                                     <?php 
                                $eid=$_POST['employeeid'];
                                $c="SELECT * FROM employee WHERE Employee_id=$eid";
                                $c1=mysqli_query($connection_obj,$c);
                                if($c1)
                                {
                                  $c2=mysqli_fetch_assoc($c1);
                                }
                                echo $c2['Employee_name']; 
                                ?>
                                   
                            <h2 class="card-inside-title">Report</h2>
                            <table border="1">
                            	<tr><td width="50px"><b>Date</b></td>
                                        <td width="50px"><b>P/A</b>
                                        <td width="100px"><b>Arrival Time</b>
                                        <td width="100px"><b>Departure Time</b></tr>

                            		
                            	
                            		<?php 
                                    $eid=$_POST['employeeid'];
                                    $t="select * from employee_attendance where Employee_id='$eid'";
                                    $t_status=mysqli_query($connection_obj,$t);
                                    if($t_status)
                                    {
                                          while($row=mysqli_fetch_assoc($t_status))
                                         {
                                             
                                            echo "<tr width='50px'><td>".$row['Bio_date']."</td>";
                                            if (($row['Checkin_time']!='') AND ($row['Checkout_time'] !=''))
                                            {
                                                echo "<td width='30px'>P</td>";
                                            }
                                            else
                                            {
                                            echo "<td width='30px'>A</td>";
                                            }
                                           
                                            echo "<td width='100px'>".$row['Checkin_time']."</td>";
                                            echo "<td width='100px'>".$row['Checkout_time']."</td>";
                                            echo "</tr>";
                                        }
                                    }
                                    ?>
                            	
                            </table>
							<br>
							<br>	
                           <h2 class="card-inside-title"><b> P:PRESENT<br>A:ABSENT</b></h2>
                          <center>
                         <input class="btn btn-primary waves-effect" name="submit" type="submit" value="CLOSE" formaction="./home_page.php"  >
                      
                       </center>          

</form>


<?php
	include_once 'footer_h.php';
?>
