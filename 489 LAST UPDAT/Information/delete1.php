<?php
include "db_connection1.php";
$id = $_GET['id'];
$sql = "DELETE FROM invoices WHERE id = $id";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: ListOfInvoices.php?msg=Record deleted successfully");
}
else {
    echo "Failed: " . mysqli_error($conn);
   }
   ?>