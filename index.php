<?php
	include_once 'header.php';
?>
<?php

	/*if(!empty($_SESSION['employee_id'])){
		header("location:./dashboard.php");
	}*/
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
          
 
            $user_name =$_POST['username'];
            $password = $_POST['password'];

            $check_query = "
			SELECT 
				*
			FROM ".TBL_EMPLOYEE."
			WHERE
				Email='".$user_name."' AND 
				Password='".$password."'
		";

            $db_obj = mysqli_query($connection_obj, $check_query);

            if (mysqli_num_rows($db_obj) > 0) {
                $employee_data = mysqli_fetch_assoc($db_obj);
                if (!empty($employee_data) && is_array($employee_data) && count($employee_data) > 0) {
                    $store_seesion = array(
                    "employee_email" => $employee_data['Email'],
                    "employee_id" => $employee_data['Employee_id'],
                    "rolecode" => $employee_data['Roles'],
                    "emp_name" => $employee_data['Employee_name']
                    
                   // "statuscode"=>$employee_data['Status']
                );
            
        
                    $_SESSION = $store_seesion;
                    header("location:./dashbord.php");
                }
            } else {
                ## Session to store errors for wrong credentials
                $_SESSION['wrong_credentials'] = 'These credentials do not match our records';
                ## The following header is not needed as it will return to the same page
                //header("location:./index.php");
            }
        }
    }
?>
<div class="login-box">
        <div class="logo">
           <font color="#2196F3" size=5><b><center>PAYROLL MANAGEMENT SYSTEN</b></font>
            
        </div>  
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <?php 
## Check if the sessions for wrong credentials are stored 

  if (isset($_SESSION['wrong_credentials'])) {
## Show Errors Here if user Credentials does not match the records in the database
      echo '<div class="alert alert-danger" role="alert">';
      echo '<i class="fa-regular fa-bell"></i>';
      echo '<strong> Hello there!</strong> You have some feedbacks,';
       
      echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
      echo '<span aria-hidden="true">&times;</span>';
      echo '</button>';
## Show Sessions here      
      echo $_SESSION['wrong_credentials'];    
## destroy the session
      session_destroy();
      echo '</div>';
## Validation Errors for wrong Credentials Ends Here
  }

    ?>


                <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                   
                        <br>

                        
                           <button class="btn btn-block bg-blue waves-effect" type="submit">SIGN IN</button>
                       
                    </div>
                    <div class="row m-t-15 m-b--20">
                        
                        <div class="col-xs-6 align-right">
                                
                   
                </form>
            </div>
        </div>
    </div>
<?php
	include_once 'footer.php';
?>


            
  
