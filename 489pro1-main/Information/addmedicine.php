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
    <title>add medicine  </title>
</head>
<body>
<div class="container">
            
    <div class="headercards"> 
          <div class="p1up">
                    <div class="card1"><img src="Images2/icon1.png" ></div>
                    <div class="card2"><p>add medicine  </p> </div>
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
            $sql = "INSERT INTO medicine VALUES ('$medicine_ID','$medicine_name','$price','$quantity','$dateOfCreate','$dateOfEnd','$theProducer','$key','$Supplierphonenumber','$description') "; // add the info from the user input to the table
            $r = $db->exec($sql);



            $db = null; //close the database connection
            header("location:exit.html"); //To redirec t the user to the main page after creating the auction
        } catch (PDOException $x) {
            die($x->getmessage());
        }
    }
    ?>        
                       <div class="containerInsid">

                                    <div class="h4"><h4>   add medicine</h4></div>

                        <div class="firscontent1">

                                    <div class="inputwrapper">
                                        <label for="medicineId medicine_ID" class="newline" >medicine ID :</label><br/>
                                        <input   autocomplete="off" type="number" name="medicineId medicine_ID" id="medicineId medicine_ID" placeholder="medicineId" style="width:300px ; height:40px " required>
                                    </div>

                                    <div class="inputwrapper">
                                        <label for="medicineIdName medicine_name " class="newline" >medicine Name :</label><br/>
                                        <input   autocomplete="off" type="text" name="medicineIdName medicine_name" id="medicineIdName medicine_name" placeholder="medicineId Name" style="width:300px ; height:40px " required min="1">
                                    </div>

                                   
                         </div>



                                <div class="firscontent2">

                                    <div class="inputwrapper">
                                        <label for="price" class="newline">price :</label> <br/>
                                        <input  autocomplete="off" type="number" name="price" id="price" placeholder="price" style="width:300px ; height:40px " required >   
                                     </div>

                                     <div class="inputwrapper">
                                        <label for="quantity" class="newline">quantity :</label> <br/>
                                        <input autocomplete="off"  type="number" name="quantity" id="quantity" placeholder="quantity" style="width:300px ; height:40px " required min="1">   
                                     </div>
            

                                    </div>


                                    
                                    <div class="firscontent2">

                                        <div class="inputwrapper">
                                            <label for="dateOfCreate" class="newline">date Of Create :</label> <br/>
                                            <input autocomplete="off" type="date" name="dateOfCreate" id="dateOfCreate" placeholder="dateOfCreate " style="width:300px ; height:40px " required>   
                                         </div>
    
                                         <div class="inputwrapper">
                                            <label for="dateOfEnd" class="newline">date Of End :</label> <br/>
                                            <input autocomplete="off" type="date" name="dateOfEnd" id="dateOfEnd" placeholder="dateOfEnd" style="width:300px ; height:40px " required>   
                                         </div>


                                        </div>

                                        <div class="firscontent2">

                                            <div class="inputwrapper">
                                                <label for="theProducer" class="newline">the Producer :</label> <br/>
                                                <input autocomplete="off" type="text" name="theProducer" id="theProducer" placeholder="theProducer " 
                                                style="width:300px ; height:40px "  required>   
                                             </div>

                                             
                                             <div class="inputwrapper">
                                                <label for="Supplierphonenumber" class="newline">Supplier phone number </label> <br/>
                                                
                                                <input autocomplete="off" type="number" name="key" required min="1" id="pet-select"style="width:60px ; height:40px "placeholder="xxx">
                                                <input autocomplete="off" type="number" name="Supplierphonenumber" id="Supplierphonenumber" placeholder="xxx xxx xxx"style="width:240px ; height:40px "required>   
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
