<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="reg.js"></script>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] , input[type=email]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus , input[type=email]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
input[type=submit] {
  background-color: rgb(15, 15, 48);
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
  opacity: 0.9;
}

input[type=button] {
  background-color: rgb(15, 15, 48);
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  margin-left: 20px;
  border: none;
  cursor: pointer;
  width: 10%;
  opacity: 0.9;
}


input[type=submit] {
  opacity: 1;
}

input[type=button] {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
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
    font-size: 13px;;
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

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
</head>
<body>

	<form onsubmit="return validation()" method= "post" name="regForm" action = "regHandler.php">

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
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

	<label for="fName"><b>First Name</b></label>
    <input type="text" placeholder="Enter Your First Name" name="fName" id="fName">

	<label for="lName"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Your Last Name" name="lName" id="lName">

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw">

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pswRepeat" id="pswRepeat">
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <input type="submit" value="Register"/>
	<a href="login.php"> <input type="button" value="Log In"/></a>
  </div>
  
  <!-- <div class="container signin">
    <p>Already have an account?in <a href="login.html"> <input type="button" value="Log In"/></a>.</p>
  </div> -->
</form>

</body>
</html>