<!DOCTYPE html>

<?php

    session_start();
    if(!isset($_SESSION["loggedUser"])){
        header('Location: login.php');
    }

?>

<html>
    <head>
        <meta name="viewport" content="with = device-width, initial-scale=1.0">

        <title>Viper Store</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    </head>

    <body>
        <section class="header">
           <nav>
               <a href="Home.html"> <img src="images/logo.png" alt="vape logo" width="80" height="110"></a>
               <div class="nav-links">
                   <ul>
                    <li><a href="Home.php">HOME</a></li>
                    <li><a href="aboutUs.php">ABOUT</a></li>
                    <li><a href="contactUs.php">CONTACT</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="reg.php">REGISTER</a></li>
                    <li><a href="logout.php">LOG OUT</a></li>
                    <li><a href="slide.php">GALLERY</a></li>
                   </ul>
               </div>
           </nav>
           <div class="text">
               <h1>Welcome To Viper Store</h1>
               <p>This Website will help you to know alot about vapes and its models</p>
           </div> 
        </section>

        <section class="products">
            <h1>Products We Offer</h1>
            <p>we have many products of vapes you need to take a look at them</p>
            <div class="products-row">
                <div class="products-col">
                    <h3>New vapes</h3>
                    <p>here you can browse alot of new vapes that we have</p>
                </div>
                <div class="products-col">
                    <h3>Used vapes</h3>
                    <p>here you can browse Used vapes that we have</p>
                </div>
                <div class="products-col">
                    <h3>Accessories</h3>
                    <p>here you can browse Accessories that we have</p>
                </div>
            </div>
        </section>

        <section class="new-vapes">
            <h1>New Vapes</h1>
            <p>Here you can find the new vapes</p>

            <div class="vape-row">
                <div class="vapes-col">
                    <a href="vopoo.html"> <img src="images/VooPoo-DRAG-2-Refresh-Edition_0003_Ink.jpg" alt="vape"></a>
                    <h3>VooPoo Drag 2 Refresh Edition</h3>
                    <p>Discover the VOOPOO DRAG 2 177 Refresh Edition Kit</p>
                </div>

                <div class="vapes-col">
                    <a href="smokDetails.html"> <img src="images/Smok-Thallo-S-Release-Date-750x930-1.jpg" alt="vape" height="222" > </a>
                    <h3>Smok Thallo XL PODS</h3>
                    <p>Discover a smok thallo xl pods</p>
                </div>

                <div class="vapes-col">
                    <a href="morph.html"> <img src="images/prism-rainbow-smok-morph-2-vape-starter-kit-600x600.jpg" alt="vape" height="220" > </a>
                    <h3>SMOK MORPH 2 VAPE KIT</h3>
                    <p>Check out the SMOK MORPH 2 230W Starter Kit</p>
                </div>

            </div>
        </section>

        <section class="used-vapes">
            <h1>Used Vapes</h1>
            <p>Here you can find the used vapes</p>

            <div class="vape-row">
                <div class="vapes-col">
                    <a href="Geek2.html"> <img src="images/geekvape_aegis_x_product_images_classic_silver.jpg" alt="vape"></a>
                    <h3>Geek Vape Aegis X Zeus Kit <br> Classic Silver</h3>
                    <p>Geekvape Aegis X Zeus Kit included <br> Aegis X Box Mod and Zeus Sub Ohm Tank</p>
                </div>

                <div class="vapes-col">
                    <a href="productDetails.html"> <img src="images/geekvape_aegis_mini_kit__8.jpg" alt="vape" height="225" > </a>
                    <h3>Geekvape Aegis Mini Kit 2200mah with Cerberus Tank</h3>
                    <p>Geekvape Aegis Mini Kit, including <br> an Aegis Mini Mod</p>
                </div>

                <div class="vapes-col">
                    <a href="vapo.html"> <img src="images/color-bronze-coral.png" alt="vape" height="220" > </a>
                    <h3>Vaporesso LUXE II</h3>
                    <br>
                    
                    <p>Discover the Vaporesso LUXE II 2 220W Starter Kit</p>
                </div>

            </div>
        </section>

        <section class="drip">
            <h1>You can browse alot of drip tips</h1>
            <a href="" class="btn">Click Here</a>
        </section>

        <section class="customers">
            <h1>What Our Customers Says</h1>
            <p>Here you can see the reviews of our services we provide</p>
            <div class="cust-row">
                <div class="cust-col">
                    <img src="images/user1.jpg" alt="Customer image">
                    <div>
                        <p>This Vape store is so helpful and their prices are very good you are my favourite</p>
                        <h3>Nada Ahmed</h3>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                </div>

                <div class="cust-col">
                    <img src="images/user2.jpg" alt="Customer image">
                    <div>
                        <p>My favorite place to buy from it any vape i want</p>
                        <h3>sameh mohamed</h3>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact">
            <h1>Don't hesitate to contact us if you tend to buy from <br> our products or need to know anything</h1>
            <a href="contactUs.html" class="btn">CONTACT US</a>
        </section>

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h3>Download Our App</h3>
                        <p>Download App for Android and ios mobile phone.</p>
                        <div class="logo">
                            <img src="images/play-store.png" alt="">
                            <img src="images/app-store.png" alt="">
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <h3>Powered by &reg;Alaa Hosni</h3>
                    </div>
                    <div class="footer-col-3">
                        <h3>Useful Links</h3>
                        <ul>
                            <li>Offers</li>
                            <li>Return Policy</li>
                            <li>Instagram</li>
                            <li>Instagram</li>
                        </ul>
                    </div>
                    <div class="footer-col-4">
                        <h3>Follow Us</h3>
                        <ul>
                            <li>Facbook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                            <li>Instagram</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>