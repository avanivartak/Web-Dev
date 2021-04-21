<?php
include 'conn.php';
if(isset($_POST["update"]))

{

mysqli_query($link,"update employee set empName='$_POST[empId]' where empName='$_POST[empName]'");

}

?>
