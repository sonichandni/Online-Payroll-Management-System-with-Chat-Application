<?php
session_start();

define("ADMIN_URL","http://localhost/Online-Payroll-Management-System-with-Chat-Application/");

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_database_name = "payrollmanage";

$connection_obj = mysqli_connect($db_host,$db_username,$db_password,$db_database_name) or die("Database not connected".mysql_error());

define("TBL_EMPLOYEE","employee");
define("TBL_BRANCH","branch");
define("TBL_EMPLOYEE_INFO","employee_info")
?>
