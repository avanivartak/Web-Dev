<?php
include 'conn.php';
if(isset($_POST["delete"]))

{

mysqli_query($link,"delete from employee where empName='$_POST[empName]'");

}

?>
