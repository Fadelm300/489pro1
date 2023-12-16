<?php
include_once 'db_connection.php';
$total = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <title>Sales Summary</title>
    <link rel="stylesheet" href="SalesSummaryStyle.css">
    <script src="https://kit.fontawesome.com/ba22c05506.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="headercards"> 
        <div class="p1up">
                  <div class="card1"><img src="Images2/icon1.png" ></div>
                  <div class="card2"> <label for="date-filter"><b>Date:</b> <input type="date" id="date-filter"></label>
                    <br>
                    <label for="time-filter"><b>Time:</b> <input type="time" id="time-filter"></label></div>
          </div>

                <div class="p1down">

                     <div class="card3">
                                  <div class="navbutton">
                                             <i class="fa-solid fa-bars fa-2x"></i>

                                      <div class="dropdown-box">
                                              <div class="navbutton">
                                                      <a href="#">HOME</a>
                                              </div>

                                              <div class="navbutton">
                                                      <a href="#">add medicine </a>
                                              </div>

                                              <div class="navbutton">
                                                      <a href="#">Edit medicine </a>
                                              </div>
                                              
                                              <div class="navbutton">
                                                  <a href="#">Account</a>
                                          </div>

                                          </div>
                              
                                  </div>
                              
                                  
                              </i>
                              <a class="aIcon" href="exit.html">
                                        <i class="fa-solid fa-house fa-2x"></i>
                                  </a>

                             <a class="aIcon" href="exit.html">
                                        <i class="fa-solid fa-circle-question fa-2x"></i>
                                  </a>
                                  
                              <a class="aIcon" href="exit.html">
                                      <i class="fa-solid fa-user fa-2x"></i>
                                 </a>
                  
                       </div>
                  
                  
                     <div class="cardnull2"></div>
                     <div class="card4"><a class="aIcon" href="exit.html"><i class="fa-solid fa-arrow-right-from-bracket fa-2x"></i></a></div>
</div>
  </div>
  <br>
    <h1>Sales Summary</h1>
    <div class="container">

         <?php
         if(isset($_GET['msg'])) {
              $msg = $_GET['msg'];
              echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
              '.$msg.'
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
         }
         ?>
        
        <form action="add_sale.php" method="post">
            <div class="form-group">
            <input type="date" class="Date" name="Date" placeholder="Date" required>
            </div>
            <div class="form-group">
            <input type="text" class="invoice_number" name="invoice_number" placeholder="Invoice Number" required>
            </div>
            <div class="form-group">
            <input type="text" class="medicine-name" name="medicine_name" placeholder="Medicine Name" required>
            </div>
            <div class="form-group">
            <input type="number" class="price" name="price" placeholder="Price" required>
            </div>
            <div class="form-group">
            <input type="number" class="qty" name="quantity" placeholder="Quantity" required>
            </div>
            <div class="form-group">
            <input type="submit" class="Add-sale" value="Add Sale" name="submit">
            </div>
        </form>
        </div>
        <br>
        <br>

      <form class="form-inline" method="POST" action="">
			<input type="date" class="form-control" placeholder="Start"  name="date1" value="<?php echo isset($_POST['date1']) ? $_POST['date1'] : '' ?>" />
			<input type="date" class="form-control" placeholder="End"  name="date2" value="<?php echo isset($_POST['date2']) ? $_POST['date2'] : '' ?>"/>
			<button class="btn btn-primary" name="search"><span class="glyphicon glyphicon-search"></span></button> <a href="index.php" type="button" class="btn btn-success"><span class = "glyphicon glyphicon-refresh"><span></a>
		  </form>
      
    <section id="my-section">
    <table id="table" width="100%">
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Invoice Number</th>
            <th>Medicine Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Remove</th>
        
        </tr>
      <?php
      include "db_connection.php";
      $sql = "SELECT * FROM sales";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        $date = $row['date'];
        $invoice_number = $row['invoice_number'];
        $medicine_name = $row['medicine_name'];
        $price = $row['price'];
        $quantity = $row['quantity'];
        ?>


           <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['invoice_number']; ?></td>
            <td><?php echo $row['medicine_name']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['quantity']; ?></td>
            <td><?php echo $row['price'] * $row['quantity']; 
                             $pro = $row['price'] * $row['quantity'];
                             $total = $total + $pro;?></td>
            
            <td>
              <a href="delete1.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-trash
              fs-5 me-3"></i></a>
            </td>
            </tr>
            
            
        <?php
      }
    
  
        ?>
          
     
        </table>
       
        <h3><b>Total:</b> <span><b><?php echo $total; ?></b></span></h3>
        
    </section>
    <select id="exportType">
  <option value="pdf">PDF</option>
  <option value="word">Word</option>
  <option value="csv">CSV</option>
</select>
<button class="export-btn" onclick="exportData()"><b>Export</b></button>
    <button onclick="window.print()" id="generate-btn" class="generate-btn"><b>Generate Report</b></button>




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

<!--Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>