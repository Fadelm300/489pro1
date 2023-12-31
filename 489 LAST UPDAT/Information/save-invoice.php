<?php
include "db_connection1.php";

if (isset($_POST["submit"])) {
    $date = $_POST["Date"];
    $invoice_number = $_POST["invoice_number"];
    $patient_name = $_POST["patient_name"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];
    
   
   
    
    $sql = "INSERT INTO invoices (id, date, invoice_number, patient_name, quantity, price) VALUES(NULL, '$date','$invoice_number','$patient_name','$quantity','$price')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: ListOfInvoices.php?msg=New record created successfully");
        
       }
    else {
        echo "Failed: " . mysqli_error($conn);
       }
}
?>
