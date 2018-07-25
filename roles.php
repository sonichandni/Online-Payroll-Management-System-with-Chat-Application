<?php
	include_once 'config/config.php';
?>

<?php
if($_SESSION['rolecode']==1)
{
	include_once 'left-panel.php';
}
else if ($_SESSION['rolecode']==2)
{
	include_once 'left-panel_hr.php';
}
else if ($_SESSION['rolecode']==3)
{
	include_once 'left-panel_emp.php';
}
else
{
	header("location:./index.php");
}
?>