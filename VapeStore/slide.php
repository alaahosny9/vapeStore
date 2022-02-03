<!DOCTYPE html>

<html>
    <head>
        <title>Gallery</title>
        <link rel="stylesheet" href="slide.css">
        <script src="slid.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>


    <body>
        <h1>SLideshow</h1>
        <section class="header">
			<nav>
				<a href="Home.html"> <img src="images/21484812.jpg" alt="vape logo" width="80" height="110"></a>
				<div class="nav-links">
					<ul>
						<li><a href="Home.html">HOME</a></li>
						<li><a href="aboutUs.html">ABOUT</a></li>
						<li><a href="contactUs.html">CONTACT</a></li>
						<li><a href="login.html">LOGIN</a></li>
						<li><a href="reg.html">REGISTER</a></li>
						<li><a href="slide.html">GALLERY</a></li>
					</ul>
				</div>
			</nav>
		 </section>

        <div id="slideshowContainer">
            <div>
                <img src="sImages/1.jpg" alt="" id="slideshow">
            </div>
            <a class="next" onclick="next()"> &#10095 </a>
            <a class="prev" onclick="prev()"> &#10094 </a>
        </div>
    </body>
</html>