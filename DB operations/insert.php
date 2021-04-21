<?php
 include 'conn.php';
if(isset($_POST["insert"]))

{

mysqli_query($link,"insert into employee values('$_POST[empId]','$_POST[empName]','$_POST[empDesigtn]','$_POST[empDept]','$_POST[empSalary]')");

}

?>
