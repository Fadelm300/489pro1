<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">

    <script src="https://kit.fontawesome.com/ba22c05506.js" crossorigin="anonymous"></script>
    <title>admin pharmacist Information</title>
</head>
<body>
<div class="container">
            
    <div class="headercards"> 
          <div class="p1up">
                    <div class="card1"><img src="Images2/icon1.png" ></div>
                    <div class="card2"><p>admin Information</p> </div>
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
                                                        <a href="#">HELP</a>
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
            $sql = "INSERT INTO admin VALUES ('$Employee_ID','$administration_level','$speciality','$password','$Name','$dateOfBirth','$gender','$Email','$key','$PhoneNO','$numberflat_house','$road','$BLD','$governorate') "; // add the supplier from the user input to the table
            $r = $db->exec($sql);



            $db = null; //close the database connection
            header("location:exit.html"); //To redirect the user to the main page after creating  the auction
        } catch (PDOException $x) {
            die($x->getmessage());
        }
    }
    ?>    
            
                       <div class="containerInsid">

                                    <div class="h4"><h4>   admin information  :</h4></div>

                        <div class="firscontent1">
                                    
                                    <div class="inputwrapper">
                                        <label for="name" class="newline" >Employee_ID</label><br/>
                                        <input  autocomplete="off" type="text" name="Employee_ID" id="Eployee_ID" placeholder="Eployee ID" style="width:135px ; height:30px "required>
                                    </div>
                                    <div class="inputwrapper">
                                        <label for="Name " class="newline" >Name:</label><br/>
                                        <input   autocomplete="off" type="text" name="Name" id="Name" placeholder="Name" style="width:135px ; height:30px " required min="1">
                                    </div>

                                    <div class="inputwrapper">
                                        <label for="LName " class="newline" >administration_level:</label><br/>
                                        <input   autocomplete="off" type="text" name="administration_level" id="administration_level" placeholder="administration level" style="width:135px ; height:30px " required >
                                    </div>

                                    <div class="inputwrapper">
                                        <label for="speciality " class="newline" >speciality :</label><br/>
                                        <input   autocomplete="off" type="text" name="speciality" id="speciality" placeholder="speciality" style="width:135px ; height:30px " required >
                                    </div>
   

                                  
                         </div>



                                <div class="firscontent1">


                                     <div class="inputwrapper">
                                        <label for="password" class="newline">password :</label> <br/>
                                        <input  autocomplete="off" type="password" name="password" id="password" placeholder="password" style="width:180px ; height:30px " required >   
                                     </div>

                                    <div class="inputwrapper">
                                        <label for="dateOfBirth" class="contact-pref">date of birth</label><br/> 
                                        <input autocomplete="off" type="date" name="dateOfBirth" id="dateOfBirth" placeholder="dateOfBirth" style="width:180px ; height:30px "required>   
                                    </div>


                                        <div class="inputwrapper">
                                            <label for="gender" class="contact-pref" >gender </label> <br/>
                                            <form>
                                                <label for="male">Male</label>
                                                <input  autocomplete="off" type="radio" id="male" name="gender" value="male" style="width:15px ; height:15px ">
                                            
                                                <label for="female">Female</label>
                                                <input  autocomplete="off" type="radio" id="female" name="gender" value="female"style="width:15px ; height:15px ">
                                            </form >
                                        
                                        </div>
                               
                                    </div>
                                    
<h4>address</h4>
                         <div class="Assrss">
                                        
                                            <div class="inputwrapper">
                                                    <label for="numberflat_house" class="contact-pref">numberflat_house</label><br/>
                                                    <input autocomplete="off" type=" number" name="numberflat_house" id="numberflat_house" placeholder="numberflat_house" style="width:150px ; height:30px " required min="1">>
                                            </div>

                                            <div class="inputwrapper">
                                                <label for="road" class="contact-pref">road</label><br/>
                                                <input autocomplete="off" type=" number" name="road" id="nroad" placeholder="numberroad" style="width:150px ; height:30px " required min="1">>
                                             </div>
                                        <br/>
                                            <div class="inputwrapper">
                                                <label for="BLD" class="contact-pref">BLD</label><br/>
                                                <input autocomplete="off" type=" number" name="BLD" id="BLD" placeholder="numberBLD" style="width:150px ; height:30px " required min="1">>
                                             </div>

                                            <div class="inputwrapper">
                                                <label for="governorate" class="contact-pref">governorate</label><br/>
                                                <input autocomplete="off" type=" tex" name="governorate" id="governorate" placeholder="governorate" style="width:150px ; height:30px " required min="1">>
                                             </div>


                         </div>

                                <div class="h4"><h4>conction:</h4></div>
                                <div class="conction">
                                
                                            <label for="phone">Enter your phone number:</label><br/>

                                                <input autocomplete="off" type="number" name="key"  id="pet-select"style="width:60px ; height:40px " placeholder="xxx"required min="1">
                                                <input autocomplete="off" type="number" name="PhoneNO" id="PhoneNO" placeholder="xxx xxx xxx"style="width:240px ; height:40px "required>

                                                <div class="inputwrapper">
                                                <label for="theProducer" class="newline"> Email :</label> <br/>
                                                <input autocomplete="off" type="Email" name="Email" id="Email" placeholder="Email " 
                                                style="width:300px ; height:40px "  required >   
                                             </div>

                                            <button type="submit" name="createA" style=" font-size:25px;"><i class="fa-solid fa-circle-plus   "></i>  Sign Up</button>

                                            <button style=" font-size:25px;"><i class="fa-solid fa-xmark"></i> Cancel </button>

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
</body>
</html>
