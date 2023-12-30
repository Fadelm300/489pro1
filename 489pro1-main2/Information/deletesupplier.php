
<?PHP

include "connection.php";





//delet supplier
$Supplier_id= $_GET['SSDEEL'];
$query = "DELETE FROM supplier WHERE Supplier_id ='".$Supplier_id."'";
$result=mysqli_query($con,$query);
if($result){
    header("Location: viewsupplier.php?msg=Record deleted successfully");
}
else {
    echo "Failed: " . mysqli_error($conn);
   }


?>
