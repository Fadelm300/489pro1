<?PHP
include "connection.php";


//delet  pharmacist
$Employee_ID= $_GET['DEEL'];
$query = "DELETE FROM pharmacist WHERE Employee_ID='".$Employee_ID."'";
$result=mysqli_query($con,$query);
if($result){
    header("Location: viewStaff.php?msg=Record deleted successfully");
}
else {
    echo "Failed: " . mysqli_error($conn);
   }

?>