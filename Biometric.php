
<?php
include_once "header_h.php";
?>
<?php
include_once "roles.php";
?>
<?php
include_once "config/config.php";
?>

<form action="bio_add.php" method="post" enctype="multipart/form-data">
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>BIOMETRIC</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                       
                    
                            
                           
                                <h2 class="card-inside-title">Enter bio file name:<br>(With extension)</h2>
                                <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="biofile" class="form-control" />
                                        </div>
                                    </div>     

                           <!-- <h2 class="card-inside-title">Biometric Id:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">

                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="biometricid" class="form-control"	/>
                                        </div>
                                    </div>
                               

                                <h2 class="card-inside-title">Employee Id:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="employeeid" class="form-control"	/>
                                        </div>
                                    </div>
                              
                                

                                <h2 class="card-inside-title">Employee Name:</h2>
                                <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="employeename" class="form-control"	/>
                                        </div>
                                    </div>
                            
                                
                                <h2 class="card-inside-title">Arrival Time:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group">
                                            <div class="form-line">
                                            <input type="Time" class="form-control time12" placeholder="Ex: 00:00:00" name="arrivaltime">
                                         
                                            </div>

                                    </div>
                                   

                              <h2 class="card-inside-title">Departure Time:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group">
                                            <div class="form-line">
                                            <input type="Time" class="form-control time12" placeholder="Ex: 00:00:00" name="departuretime">
                                         
                                            </div>

                                    </div>



                                     <h2 class="card-inside-title">Created Date:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group">
                                        <div class="form-line">
											<input type="date" class="form-control date" name="createddate" placeholder="Ex: 30/07/2016">                                       
										 </div>
                                    </div>

                                     <h2 class="card-inside-title">Modified Date:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group">
                                        <div class="form-line">
											<input type="date" class="form-control date" name="modifieddate" placeholder="Ex: 30/07/2016">                                       
										 </div>
                                    </div>

                                    <h2 class="card-inside-title">Status:</h2>
                                <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="status" class="form-control" />
                                        </div>
                                    </div>
                            

-->
                                   
                             
                            
              
<center>
                    
	                   <input class="btn btn-primary waves-effect" name="submit" type="submit" value="IMPORT"><br><br><br>
                      
                      
                                         
                        </center>
 
                      
                       </section>




</form>

<?php
	include_once 'footer_h.php';
?>

