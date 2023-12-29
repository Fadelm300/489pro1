<?php
require("connection.php");

$query="select * from supplier";
$result=mysqli_query($con,$query);

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3Edit medicine .css">

    <script src="https://kit.fontawesome.com/ba22c05506.js"  crossorigin="anonymous"></script>
    <title>admin pharmacist Information</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
</head>
<body>
<div class="container">
            
    <div class="headercards"> 
          <div class="p1up">
                    <div class="card1"><img src="Images2/icon1.png" ></div>
                    <div class="card2"><p>view Supplier</p> </div>
            </div>

                 
                

 <!--start of the sidebar-->
                  
 <div class="wrapper">
                <div class="section">
                    <div class="top_navbar">
                        <div class="hamburger">
                            <a href="#">
                                <i class="fas fa-bars"></i>
                            </a>
                        </div>
                    </div>
                     
                </div>
                <div class="sidebar">
                    <div class="profile">
                        <img src="Images2/icon1.png" alt="profile_picture">
                        <h3>parmacy</h3>
                        <p>BH</p>
                    </div>
                    <ul>
                        <li>
                            <a href="Interface489.html" class="active">
                                <span class="icon"><i class="fas fa-home"></i></span>
                                <span class="item">Home</span>
                            </a>
                        </li>
                      
                        <li>
                            <a href="addadmin.php">
                                <span class="icon"><i class="fas fa-user-friends"></i></span>
                                <span class="item">ADD admin</span>
                            </a>
                        </li>
                        <li>
                            <a href="addPatient.php">
                                <span class="icon"><i class="fas fa-user-friends"></i></span>
                                <span class="item">ADD Patient</span>
                            </a>
                        </li>
                        <li>
                            <a href="addstaff.php">
                                <span class="icon"><i class="fas fa-user-friends"></i></span>
                                <span class="item">ADD Staff</span>
                            </a>
                        </li>
                        <li>
                            <a href="addSupplier.php">
                                <span class="icon"><i class="fas fa-user-friends"></i></span>
                                <span class="item">ADD Supplier</span>
                            </a>
                        </li>
                        <li>
                            <a href="addmedicine.php">
                                <span class="icon"><i class="fas fa-user-friends"></i></span>
                                <span class="item">ADD Medicine</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="viewAdmin.php">
                                <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                                <span class="item">view Admin</span>
                            </a>
                        </li>
                        <li>
                            <a href="viewmedicine.php">
                                <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                                <span class="item">view Medecine</span>
                            </a>
                        </li>
                        <li>
                            <a href="viewStaff.php">
                                <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                                <span class="item">view  pharmacist</span>
                            </a>
                        </li>
                        <li>
                            <a href="viewsupplier.php">
                                <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                                <span class="item">view Supplier</span>
                            </a>
                        </li>
                        
                       
                        <li>
                            <a href="SalesSummary.php">
                                <span class="icon"><i class="fas fa-chart-line"></i></span>
                                <span class="item">Sales summary</span>
                            </a>
                        </li>
                        <li>
                            <a href="StockReport.php">
                                <span class="icon"><i class="fas fa-chart-line"></i></span>
                                <span class="item">Stock report</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="ListOfInvoices.php">
                                <span class="icon"><i class="fas fa-chart-line"></i></span>
                                <span class="item">List of invoices</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon"><i class="fas fa-cog"></i></span>
                                <span class="item">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="exit.html">
                                <span class="icon"><i class="fa-solid fa-arrow-right-from-bracket "></i></span>
                                <span class="item">exit</span>
                            </a>
                        </li>
                    </ul>
                </div>
                
            </div>


 <!--end of the sidebar-->










    </div>
    
            

            <div class="body2" >
            <form enctype="multipart/form-data" method="post">
      
            
                       

                       <?php /*

extract($_POST);
try {
    $db = new PDO('mysql:host=localhost;dbname=pharmacyq1;charset=UTF8', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // aaisha change sql statement
    $sql = "SELECT * FROM supplier";
    $r = $db->query($sql);
    $count= $r->rowCount();
    echo "<center>";
    echo "<br><br><h1>Total results are : ".$count."</h1>";
    
    $db = null;
} catch (PDOException $x) {
    die($x->getMessage());
}
?>
<div class="containerInsidoutput">

<hr>


<br><br>


<?php

while ($row = $r->fetch()) {
    echo "<table border=1 '>";
    echo "<tr>";
    echo "<th> <h4>Supplier ID:</h4> <h5> $row[0] </h5></th>";
    echo "<th> <h4>First Name:</h4> <h5> $row[2] </h5></th>";
    echo "<th> <h4> Last Name:</h4><h5> $row[3] </h5></th>";
    echo "<th> <h4> Email:</h4> <h5> $row[4] </h5> </th>";
    echo "<th>  <h4>PhoneNO:</h4><h6>( $row[5])$row[6] </h6> </th>";
    echo "<th>  <h4> description</h4><h6> $row[6] </h6>  </th>";

   
    echo " </tr>";
    echo " </table>";

   
    
}*/
?>






<table border=1>
    <tr >
        <th>Supplier ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email:</th>
        <th>PhoneNO:</th>
        <th>description</th>
        

       


    </tr>
                        <tr >
                        <?php

                            while($row = mysqli_fetch_assoc($result))
                        {?>
                        <td><?php echo $row['Supplier_id'] ?></td>

                        <td><?php echo $row['FName'] ?></td>

                        <td><?php echo $row['LName'] ?></td>

                        <td><?php echo $row['Email'] ?></td>
                        
                        <td>(<?php echo $row['key']?> )<?php echo $row['PhoneNO']  ?></td>

                        <td><?php echo $row['description'] ?></td>

                        <td><a href="#">Edit</a></td>

                        <td>
              <a href="delete3.php?SSDEEL=<?php echo $row['Supplier_id']?>" class="link-dark"><i class="fa-solid fa-trash
              fs-5 me-3"></i></a>
                        </td>                       



                                </tr>
                        <?php
                            }
                            ?>

                       


</table>
<br>
<br>
<br>

<button onclick="window.print();" id="print" class="generate-btn"><b>Generate Report</b></button>
                                </div>


</div>

            </div>
























                    

            <footer>

                <div class="footer-content">
                  <h3></h3>
                
                      <ul class="footerHelp">
                        <li>
                          <a href="#">contact us</a>
                          <i class=" fas fa-solid fa-phone"></i>
                        </li>
                
                        <li>
                          <a href="#">About Us</a>
                          <i class="fas fa-regular fa-address-card"></i>
                        </li>
                
                        <li>
                          <a href="#">Help</a>
                          <i class="fas fa-question"></i>
                        </li>
                      </ul>
                
                      <div class="footer-bottom">
                        <p>COpyriht 2024 .parmacy  System. All Right Reserved</p>
                      </div>
                
                
                </div>
                
                
                </footer>

</div>
<script>
           var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function(){
            document.querySelector("body").classList.toggle("active");
        })
      </script>
</body>
</html>





















