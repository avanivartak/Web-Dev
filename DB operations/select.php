<?php
include 'conn.php';
if(isset($_POST["select"]))

{

$res=mysqli_query($link,"select * from employee"); echo "<table border=2>";
echo "<tr>";

echo "<th>";echo "empId"; echo "</th>"; echo "<th>";echo "empName"; echo "</th>";
echo "<th>";echo "empDesigtn"; echo "</th>"; echo "<th>";echo "empDept"; echo "</th>"; echo "<th>";echo "empSalary"; echo "</th>"; echo "</tr>"; while($row=mysqli_fetch_array($res))
 
{

echo "<tr>";

echo "<td>";echo $row["empId"]; echo "</td>"; echo "<td>";echo $row["empName"]; echo "</td>";
echo "<td>";echo $row["empDesigtn"]; echo "</td>"; echo "<td>";echo $row["empDept"]; echo "</td>"; echo "<td>";echo $row["empSalary"]; echo "</td>"; echo "</tr>";
}

}

?>

