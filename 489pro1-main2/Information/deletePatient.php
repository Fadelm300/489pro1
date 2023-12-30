


<?PHP

include "connection.php";


//delet  Patient  
$username= $_GET['PDEEL'];
$query = "DELETE FROM patient WHERE username ='".$username."'";
$result=mysqli_query($con,$query);
if($result){
    header("Location: viewPatient.php?msg=Record deleted successfully");
}
else {
    echo "Failed: " . mysqli_error($conn);
   }


?>
