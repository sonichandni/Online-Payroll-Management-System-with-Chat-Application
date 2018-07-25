<?php
	include_once 'header_h.php';
?>
<?php
	include_once 'roles.php';
?>
<script language="javascript" src="validation.js"></script>
<script language="javascript">
function str_check(event)
    {
      code=event.keyCode;
        if(!((code>=65 && code<=90) || (code>=97 && code<=122) || (code==32)))
      {
        alert("Please Enter Only Characters");
        event.keyCode=0;
      }
    }
function validate_form(f1)
  {
      if(isEmpty(f1.designationname.value,"Designation Name"))
      {
        alert(errMsg);
        f1.designationname.focus();
        return (false);
      }
     if(isEmpty(f1.superid.value,"Super ID"))
      {
        alert(errMsg);
        f1.superid.focus();
        return (false);
      }
     if(isEmpty(f1.superidname.value,"Super Id Name"))
      {
        alert(errMsg);
        f1.superidname.focus();
        return (false);
      }
     
      if(isEmpty(f1.createddate.value,"Created Date"))
      {
        alert(errMsg);
        f1.createddate.focus();
        return (false);
      
      }
      if(isEmpty(f1.modifieddate.value,"Modified Date"))
      {
        alert(errMsg);
        f1.modifieddate.focus();
        return (false);
      }
      if(isEmpty(f1.status.value,"Status"))
      {
        alert(errMsg);
        f1.status.focus();
        return (false);
      }
      
  }
  
</script>

<form action="designation_add.php" method="post" onSubmit="return validate_form(this)">
 
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DESIGNATION</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                       
                        <div class="body">

                                           
                             <input type="hidden" name="designationid" class="form-control" />

                                <h2 class="card-inside-title">Designation Name:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="designationname" class="form-control" onKeyPress="str_check(event)"	/>
                                        </div>
                                    </div>

                                    <h2 class="card-inside-title">Super Id:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="superid" class="form-control"  />
                                        </div>
                                    </div>

                                    <h2 class="card-inside-title">Super Id Name:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="superidname" class="form-control" onKeyPress="str_check(event)" />
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
                                            
                                          <input type="text" name="status" class="form-control"  />
                                       
                                             </div>
                                    </div>

                                 
                                    </div>
                              </div>
                            </div>
 						 </div>
                       </div>
                        <center>
                         <input class="btn btn-primary waves-effect" name="submit" type="submit" value="SUBMIT"  >
                      
                       <input type="reset" name="close" class="btn btn-primary waves-effect" value="RESET" >
                          
                       </center>
                       </section>


</form>

<?php
	include_once 'footer_h.php';
?>

