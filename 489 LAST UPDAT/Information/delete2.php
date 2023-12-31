<?php
include "db_connection2.php";
$id = $_GET['id'];
$sql = "DELETE FROM stock WHERE id = $id";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: StockReport.php?msg=Record deleted successfully");
}
else {
    echo "Failed: " . mysqli_error($conn);
   }
   ?>