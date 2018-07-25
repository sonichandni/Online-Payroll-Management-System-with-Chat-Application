<?php
	include_once 'header_h.php';
?>
<?php
	include_once 'roles.php';
?>
<?php
/*
  if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
   $sc=$_SESSION['counter'];
   //if ($sc>=1) 
   //{
       //echo "<input name="b1" disabled="">";
   //}*/
?>
<!--
<script type="text/javascript">
    $(input).click(function (event) {if($(this).hasClass('disabled')){alert('clicked');}else {alert('not disabled.=)');}});
</script>-->
<form action="#" method="post" id="ar">
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <b>ACCEPT/REJECT LEAVES LIST</b>
                            </h2>
                            
                        
                        <!--div class="col-sm-12 ">
                                <div class="dataTables_filter" id="DataTables_Table_0_filter">
                                <label>Search:
                                      <input class="form-control" aria-controls="DataTables_Table_0" type="search" placeholder="">
                                </label>
                              -->
                        <div class="body table-responsive">
                            <table class="table table-bordered" name="acceptrejectleaveslist">
                                <thead>
                                    <tr>
                                        <th>EMPLOYEE ID</th>
                                        <th>EMPLOYEE NAME</th>
                                        <th>LEAVE TYPE</th>
                                        <th>LEAVE REASON DESCRIPTION</th>
                                        <th>LEAVE FROM DATE</th>
                                        <th>LEAVE TO DATE</th>
                                        <th>ACTION TAKEN BY ID</th>
                                       <!-- <th>BALANCE SICK LEAVES</th>>-->
                                       <!-- <th>BALANCE CASUAL LEAVES </th>>-->
                                        <!--<th>HALF DAY LEAVE</th>-->
                                        <th>ACCEPT / REJCT</th>

                                    </tr>
                                </thead>
         
                                <tbody>
            <?php
            
         $q="Select * from employee_leaves";

         $status = mysqli_query($connection_obj,$q);
         $eid=$_SESSION['employee_id'];
        if($status)
        {
            
             while ($row = mysqli_fetch_assoc($status))
            {
              if($row['Status'] == '0' AND $row['Employee_id']!=$eid)
              {
                echo "<tr>";
                        echo "<td><b>".$row['Employee_id']."</b></td>";
                        echo "<td><b>".$row['Employee_name']."</td>";
                        echo "<td><b>".$row['Leave_type']."</b></td>";
                        echo "<td><b>".$row['Leave_reason_description']."</b></td>";
                         echo "<td><b>".$row['Leave_from_date']."</td>";
                        echo "<td><b>".$row['Leave_to_date']."</td>";
                        echo "<td><b>".$row['Action_taken_by_id']."</td>";
                        //echo "<td>".$row['Balance_sick_leave']."</td>";
                       // echo "<td>".$row['Balance_casual_leave']."</td>";
                        //echo "<td>".$row['Half_day_leave']."</td>";
                        $_SESSION['lr']=$row['Leave_reason_description'];


                        echo "<div class='row clearfix demo-icon-container'>";

                        
                        echo "<td> <a href=accept.php?id=".$row['Employee_id']."><button  type='button' name='accept' class='btn btn-primary waves-effect'>Accept  </button><br>";

                        echo "<a href=reject.php?id=".$row['Employee_id']."><button  type='button' name='reject' class='btn btn-primary waves-effect'>REJECT</button></td>";
                      }
                    }
            
       
               echo " </div></td>
                                        <th></th>
                                        
                                    </tr>
                                    
                                </tbody> </table>";

 

           
        }
        else
        {
            echo " error";
        }

        ?>
                   
        
                       
       
                           
                    </div>
                </div>
                </div>
        </div>
       <center>
                      <input class="btn btn-primary waves-effect" name="close" type="submit" value="CLOSE" formaction="./home_page.php">
                      

                       </center>
                
    </section>

</form>

<?php
	include_once 'footer_h.php';
?>