 



<?PHP

include "connection.php";




// delet admin 
$Employee_ID= $_GET['ADEEL'];
$query = "DELETE FROM admin WHERE Employee_ID='".$Employee_ID."'";
$result=mysqli_query($con,$query);
if($result){
    header("Location: viewAdmin.php?msg=Record deleted successfully");
}
else {
    echo "Failed: " . mysqli_error($conn);
   }


?>
