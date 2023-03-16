<?php
$con = mysqli_connect("localhost","root","","login");
session_start();


// Displaying the data
$id = $_SESSION['id'];
$email = $_SESSION['email'];


$sql = "SELECT * FROM users WHERE id = '$id' && email = '$email'";
$result = mysqli_query($con,$sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>ROSE PIZZA</title>
     <!-- for font icons -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
 
<body style="margin:0">

<!-- Start Header -->
<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="WHITE   ">
  <tr>
     <td>
        <table border="0" width="85%" cellpadding="15" cellspacing="0" align="center">
           <tr>
               <td>
                  <font face="arial" color="DARK" size="5">
                   <strong>ROSE PIZZA</strong>
                  </font>
               </td>
               <td width="30%">&nbsp;</td>
               <td><a href="#home">
                  <font face="arial" color="DARK" size="3">
                   Home
                 </font></a>
               </td>
               <td><a href="#about">
                     <font face="arial" color="DARK" size="3">
                     About
                    </font></a>
                </td>
               <td><a href="#services">
                <font face="arial" color="DARK" size="3">
                   Services
                </font></a>
               </td>
               <td><a href="#portfolio">
                 <font face="arial" color="DARK" size="3">
                  Flavor
              </font></a>
              </td>
               <td><a href="#team">
                <font face="arial" color="DARK" size="3">
                Menu
                </font></a>
               </td>
               <td><a href="logout.php">LOGOUT</a>
               
                

               
            
                </font></a>
               </td>
           </tr>
        </table>
     </td>
  </tr>
</table>
<!-- End Header -->


<!-- Start About -->
<table border="0" id="about" width="100%" cellpadding="0" cellspacing="0" bgcolor="#353535">
  <tr>
     <td>
        <table border="0" width="85%" cellpadding="15" cellspacing="0" align="center">
            <!-- Heading Start-->
           <tr>
              <td height="160" align="center" valign="middle" colspan="2">
                 <font face="arial" size="6" color=" #f3971b">
                    ALL U NEED IS PIZZA
                </font>
                <hr width="70" color="#f3971b">
              </td>
           </tr>
           <!-- Heading  End-->
           <tr>
               <td width="35%">
                  <img src="https://comfortel.com.au/wp-content/uploads/2021/05/3-Coastal-Salon-Furniture-Interior-Design-Salon.jpg" width="100%" alt="me" />
               </td>
               <td width="65%" valign="top">
                  <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
                      <tr>
                         <td height="40">
                            <font face="arial" size="4" color=" #ffffff">
                             WELCOME TO OUR RESTAURANT
                            </font>
                         </td>
                      </tr>
                      <tr>
                         <td>
                            <font face="arial" size="5" color=" #ffffff">
                            NUMBER 1 PIZZA IN MUNTINLUPA
                            </font>
                        </td>
                      </tr>
                      <tr>
                        <td>
                            <p>
                                <font face="arial" size="3" color="#c2c0c3">
                                    A beauty salon or beauty parlor is an establishment that provides cosmetic treatments for people. Other variations of this type of business include hair salons, spas, day spas, and medical spas.
                            </font>
                            </p>
                            <p>
                                <font face="arial" size="3" color="#c2c0c3">
                                A shop where you can get a particular service, especially connected with beauty or fashion: a beauty salon. a hairdressing/hair salon.
                            </font>
                            </p>
                            <hr noshade>
                            <br/>
                            <button type="button">
                              <font face="arial" size="5">      
                              ORDER NOW
                            </font>
                            </button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="button">
                               <font face="arial" size="5">     
                                CHOOSE FLAVOR
                               </font>
                            </button>
                        </td>
                      </tr>
                  </table>  
               </td>
           </tr>
          <!-- section padding bottom -->
           <tr>
              <td height="60" colspan="2">
                 
              </td>
           </tr>
          <!-- section padding bottom End-->
        </table>
      </td>
   </tr>
</table>
<!-- End About -->
                   
          
        <!-- section padding bottom -->
           <tr>
              <td height="60" colspan="3">
                 
              </td>
           </tr>
          <!-- section padding bottom End-->
        </table>
     </td>
  </tr>
</table>
<!-- End Services -->


                       
         <!-- section padding bottom -->
           <tr>
              <td height="10" colspan="2">
                 
              </td>
           </tr>
          <!-- section padding bottom End-->
       </table>
    </td>
   </tr>
</table>
<!-- End Skills -->


<!-- Start Portfolio -->
<table border="0" id="portfolio" width="100%" cellpadding="0" cellspacing="0" bgcolor="#292929">
  <tr>
     <td>
        <table border="0" width="85%" cellpadding="15" cellspacing="0" align="center">
        <!-- Heading Start-->
          <tr>
              <td height="160" align="center" valign="middle" colspan="3">
                 <font face="arial" size="6" color=" #f3971b">
                    A pizza lover would be like a match made in pizza heaven.
                </font>
                <hr width="70" color="#f3971b">
              </td>
          </tr>
        <!-- Heading  End-->
         <tr>
            <td width="33.33%" valign="top">
              <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#353535">
                <tr>
                    <td>
                        <font face="arial" size="5" color="#ffffff">
                            Cheese Pizza
                       </font>
                       <br/>
                       <br/>
                       <font face="arial" size="4" color="#f3971b">
                        Cheese pizza is one of the most popular choices. 
                       </font>
                       <br/><br/>
                       <img src="https://www.ezcater.com/lunchrush/wp-content/uploads/sites/2/2017/10/shutterstock_623344781.jpg.webp" width="100%"/>
                    </td>
                </tr>
              </table>  
            </td>
            
            <td width="33.33%" valign="top">
              <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#353535">
                <tr>
                    <td>
                        <font face="arial" size="5" color="#ffffff">
                            Veggie Pizza
                       </font>
                       <br/>
                       <br/>
                       <font face="arial" size="4" color="#f3971b">
                        Everything from peppers and mushrooms
                       </font>
                       <br/><br/>
                       <img src="https://www.ezcater.com/lunchrush/wp-content/uploads/sites/2/2017/10/shutterstock_570541132.jpg.webp" width="100%"/>
                    </td>
                </tr>
              </table>  
            </td>

            <td width="33.33%" valign="top">
              <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#353535">
                <tr>
                    <td>
                        <font face="arial" size="5" color="#ffffff">
                            Pepperoni Pizza
                       </font>
                       <br/>
                       <br/>
                       <font face="arial" size="4" color="#f3971b">
                        There’s a reason this is one of the most popular types of pizza
                       </font>
                       <br/><br/>
                       <img src="https://www.ezcater.com/lunchrush/wp-content/uploads/sites/2/2017/10/shutterstock_514457074.jpg.webp" width="100%"/>
                    </td>
                </tr>
              </table>  
            </td>
         </tr>
          <tr>
            <td width="33.33%" valign="top">
              <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#353535">
                <tr>
                    <td>
                        <font face="arial" size="5" color="#ffffff">
                            Meat Pizza
                       </font>
                       <br/>
                       <br/>
                       <font face="arial" size="4" color="#f3971b">
                        A meat pizza is a perfect and popular choice
                       </font>
                       <br/><br/>
                       <img src="https://www.ezcater.com/lunchrush/wp-content/uploads/sites/2/2017/10/shutterstock_548340295.jpg.webp" width="100%"/>
                    </td>
                </tr>
              </table>  
            </td>
            
            <td width="33.33%" valign="top">
              <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#353535">
                <tr>
                    <td>
                        <font face="arial" size="5" color="#ffffff">
                            Margherita Pizza
                       </font>
                       <br/>
                       <br/>
                       <font face="arial" size="4" color="#f3971b">
                        Deceptively simple
                       </font>
                       <br/><br/>
                       <img src="https://www.ezcater.com/lunchrush/wp-content/uploads/sites/2/2017/10/shutterstock_347791016.jpg.webp" width="100%"/>
                    </td>
                </tr>
              </table>  
            </td>

            <td width="33.33%" valign="top">
              <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#353535">
                <tr>
                    <td>
                        <font face="arial" size="5" color="#ffffff">
                            BBQ Chicken Pizza
                       </font>
                       <br/>
                       <br/>
                       <font face="arial" size="4" color="#f3971b">
                        If you love BBQ chicken and you love pizza,
                       </font>
                       <br/><br/>
                       <img src="https://www.ezcater.com/lunchrush/wp-content/uploads/sites/2/2017/10/shutterstock_184944413.jpg.webp" width="100%"/>
                    </td>
                </tr>
              </table>  
            </td>
         </tr>
        <!-- section padding bottom -->
           <tr>
              <td height="60" colspan="3">
                 
              </td>
           </tr>
          <!-- section padding bottom End-->
       </table>
     </td>
   </tr>
</table>
<!-- End Portfolio -->





<!-- Start Footer -->
 <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#353535">
  <tr>
     <td>
        <table border="0" width="85%" cellpadding="15" cellspacing="0" align="center">
        
        <tr>
            <td width="33.33%" valign="top">
               <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center">
                 <tr>
                    <td align="center" valign="top">
                        <font color="#f3971b" size="6">
                            <span class="fa fa-phone"></span>
                        </font>
                        <br/><br/>
                        <font color="#ffffff" size="5" face="arial">
                        Phone No
                        </font>
                        <p>
                          <font color="#c2c0c3" size="3" face="arial">
                            +9605102955
                         </font>
                        </p>
                    </td>
                 </tr>
               </table>
            </td>

            <td width="33.33%" valign="top">
               <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center">
                 <tr>
                    <td align="center" valign="top">
                        <font color="#f3971b" size="6">
                            <span class="fa fa-envelope"></span>
                        </font>
                        <br/><br/>
                        <font color="#ffffff" size="5" face="arial">
                        Email
                        </font>
                        <p>
                          <font color="#c2c0c3" size="3" face="arial">
                            rosepizza@gmail.com
                         </font>
                        </p>
                    </td>
                 </tr>
               </table>
            </td>

            <td width="33.33%" valign="top">
               <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center">
                 <tr>
                    <td align="center" valign="top">
                        <font color="#f3971b" size="6">
                            <span class="fa fa-map-marker"></span>
                        </font>
                        <br/><br/>
                        <font color="#ffffff" size="5" face="arial">
                        Location
                        </font>
                        <p>
                          <font color="#c2c0c3" size="3" face="arial">
                            Muntinlupa, National Highway, Brgy. Tunasan, Muntinlupa, 1773 Metro Manila
                         </font>
                        </p>
                    </td>
                 </tr>
               </table>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <hr noshade>
            </td>
        </tr>
        <tr>
            <td colspan="3" height="100" valign="top">
                <table border="0" width="30%" cellpadding="0" cellspacing="0" align="center">
                    
                    <tr>
                         <td width="25%" align="center">
                            <table border="0" width="50" cellpadding="0" cellspacing="0" align="center" height="50" bgcolor="#f3971b">
                                <tr>
                                    <td align="center" valign="middle">
                                        <a href="">
                                        <font size="5" color="#ffffff">
                                        <span class="fa fa-facebook"></span>
                                       </font>
                                        </a>
                                    </td>
                                </tr>
                            
                            </table>
                         </td>
                         <td width="25%" align="center">
                            <table border="0" width="50" cellpadding="0" cellspacing="0" align="center" height="50" bgcolor="#f3971b">
                                <tr>
                                    <td align="center" valign="middle">
                                        <a href="">
                                        <font size="5" color="#ffffff">
                                        <span class="fa fa-skype"></span>
                                       </font>
                                    </a>
                                    </td>
                                </tr>
                            
                            </table>
                         </td>
                         <td width="25%" align="center">
                            <table border="0" width="50" cellpadding="0" cellspacing="0" align="center" height="50" bgcolor="#f3971b">
                                <tr>
                                    <td align="center" valign="middle">
                                        <a href="">
                                        <font size="5" color="#ffffff">
                                        <span class="fa fa-linkedin"></span>
                                       </font>
                                       </a>
                                    </td>
                                </tr>
                            
                            </table>
                         </td>
                         <td width="25%" align="center">
                            <table border="0" width="50" cellpadding="0" cellspacing="0" align="center" height="50" bgcolor="#f3971b">
                                <tr>
                                    <td align="center" valign="middle">
                                        <a href="">
                                        <font size="5" color="#ffffff">
                                        <span class="fa fa-google-plus"></span>
                                       </font>
                                       </a>
                                    </td>
                                </tr>
                            
                            </table>
                         </td>
                    </tr>
                </table>
            </td>
        </tr>
        </table>
    </td>
  </tr>
 </table>
<!-- End Footer -->
</body>
</html>