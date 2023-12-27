<?php
include "db_connection.php";
$id = $_GET['id'];
$sql = "DELETE FROM sales WHERE id = $id";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: SalesSummary.php?msg=Record deleted successfully");
}
else {
    echo "Failed: " . mysqli_error($conn);
   }
   ?>