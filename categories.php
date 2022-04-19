<?php
include 'config.php';

//STARTING DATABASE CONNECTION

$result = mysqli_query($conn,"SELECT categoryName FROM bookcategories");

echo "<table border='1'>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";

echo "<td>" . $row['categoryName'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>