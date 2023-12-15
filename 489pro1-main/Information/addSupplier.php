<?php
require ("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3Edit medicine .css">

    <script src="https://kit.fontawesome.com/ba22c05506.js" crossorigin="anonymous"></script>
    <title> add Supplier  </title>
</head>
<body>
<div class="container">
            
    <div class="headercards"> 
          <div class="p1up">
                    <div class="card1"><img src="Images2/icon1.png" ></div>
                    <div class="card2"><p>add Supplier </p> </div>
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
            

            <div class="body2" >
                
            <form enctype="multipart/form-data" method="post">
    <?php

    extract($_POST);
    if (isset($createA)) { //if the user hit the create the auction button
        try {
            $db = new PDO('mysql:host=localhost;dbname=pharmacyq1;charset=UTF8', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO supplier VALUES ('$Supplier_id','$password','$FName','$LName','$Email','$key','$PhoneNO','$description') "; // add the supplier from the user input to the table
            $r = $db->exec($sql);



            $db = null; //close the database connection
            header("location:exit.html"); //To redirect the user to the main page after creating the auction
        } catch (PDOException $x) {
            die($x->getmessage());
        }
    }
    ?>        
                       <div class="containerInsid">

                                    <div class="h4"><h4>   Edit medicine</h4></div>

                        <div class="firscontent1">

                                    <div class="inputwrapper">
                                        <label for=" Supplier_id" class="newline" >Supplie ID :</label><br/>
                                        <input   autocomplete="off" type="number" name="Supplier_id" id="Supplier_id" placeholder="Supplier_id" style="width:300px ; height:40px " required>
                                    </div>

                                    <div class="inputwrapper">
                                        <label for="password" class="newline">password :</label> <br/>
                                        <input  autocomplete="off" type="password" name="password" id="password" placeholder="password" style="width:300px ; height:40px " required >   
                                     </div>
                                    


                                   
                         </div>


 
                                <div class="firscontent2">

                                    

                                     <div class="inputwrapper">
                                        <label for="FName " class="newline" >Supplie  first Name :</label><br/>
                                        <input   autocomplete="off" type="text" name="FName" id="FName" placeholder="FName" style="width:300px ; height:40px " required min="1">
                                    </div>

                                    <div class="inputwrapper">
                                        <label for="LName " class="newline" >Supplie Last Name :</label><br/>
                                        <input   autocomplete="off" type="text" name="LName" id="LName" placeholder="LName" style="width:300px ; height:40px " required min="1">
                                    </div>
            

                                    </div>


                                    
                 

                                        <div class="firscontent2">

                                            <div class="inputwrapper">
                                                <label for="theProducer" class="newline"> Email :</label> <br/>
                                                <input autocomplete="off" type="Email" name="Email" id="Email" placeholder="Email " 
                                                style="width:300px ; height:40px "  required >   
                                             </div>

                                             
                                             <div class="inputwrapper">
                                                <label for="Supplierphonenumber" class="newline">Supplier phone number </label> <br/>
                                                
                                                <input autocomplete="off" type="number" name="key" required min="1" id="pet-select"style="width:60px ; height:40px ">
                                                <input autocomplete="off" type="number" name="PhoneNO" id="PhoneNO" placeholder="xxx xxx xxx"style="width:240px ; height:40px "required>   
                                            </div>
        
                                            
                                            </div>
                                        
    
                                    
                                    


                                <div class="h4"><h4>description:</h4></div>
                                <div class="conction">
                                
                                            <label for="description drp">Enter your description:</label><br/>
                                            <input  autocomplete="off" type="text" id="description" name="description" placeholder="  Enter your description.."style="width:500px ; height:120px " required >
 

                                            <button type="submit" name="createA"><i class="fa-solid fa-circle-plus fa-3x  "></i><br>add</button>
                                            


                                </div>


</div>
</form>

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
</body>
</html>
