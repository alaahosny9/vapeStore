<!<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="log.js"></script>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display:  inline-block;
  border: none;
  background: #f1f1f1;
}

input[type = submit] {
  background-color: darkblue;
  color: white;
  padding: 14px 20px;
  margin: 8px 150;
  border: none;
  cursor: pointer;
  width: 40%;
}


button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.container {
  padding: 10px;
}

span.psw {
  float: right;
  padding-top: 25px;
}

nav{
    display: flex;
    padding: 2% 3%;
    justify-content: space-between;
    align-items: center;
}

nav img{
    width: 200px;
    padding: 5% 5%;
}

.nav-links{
    flex: 1;
    text-align: right;
}

.nav-links ul li{
    list-style: none;
    display: inline-block;
    padding: 8px 12px;
    position: relative;
}

.nav-links ul li a{
    color: black;
    font-weight: bold;
    text-decoration: none;
    font-size: 13px;
    font-family: 'Poppins', sans-serif;
}

.nav-links ul li::after{
    content: '';
    width: 0%;
    height: 2px;
    background: #f44336;
    display: block;
    margin: auto;
    transition: 0.5s;
}

.nav-links ul li:hover::after{
    width: 100%;
}


</style>
    <title> Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
  </head>
  <body>
    <form onsubmit="return login()" method= "post" name="logForm" action = "loginHandler.php">

      <section class="header">
        <nav>
            <a href="Home.html"> <img src="images/21484812.jpg" alt="vape logo" width="80" height="110"></a>
            <div class="nav-links">
                <ul>
                <li><a href="Home.php">HOME</a></li>
						<li><a href="aboutUs.php">ABOUT</a></li>
						<li><a href="contactUs.php">CONTACT</a></li>
						<li><a href="login.php">LOGIN</a></li>
						<li><a href="reg.php">REGISTER</a></li>
						<li><a href="slide.php">GALLERY</a></li>
                </ul>
            </div>
        </nav>
     </section>

    <div class="container">
      <label for="emm"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="emm">
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw">

      <input type="submit" value="Login" />
        <input type="checkbox" checked="checked" name="remember"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="cancelbtn">Cancel</button>

      <span class="psw"><a href="#">Forgot password?</a></span>
    </div>
    </form>
  </body>
</html>