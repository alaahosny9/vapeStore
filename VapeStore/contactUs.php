<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: lightblue;
  padding: 20px;
}

</style>
    <title> Contact Us </title>
  </head>
  <body>
    <h2>Contact Us</h2>
    <form>
      

    <div class="container">
      <form action="index.html" method="post">
        <label for="fName"> First Name</label>
        <input type="text" id = "fName" name="" placeholder="Enter Your First Name">

        <label for="sName"> Second Name</label>
        <input type="text" id = "sName" placeholder="Enter Your Second Name">

        <label for="country"> Country </label>
        <select id = "country" name="country">
          <option value="Egypt"> Egypt </option>
          <option value="USA"> USA </option>
          <option value="UA"> UA </option>
          <option value="UAE"> UAE </option>

        </select>

        <label for="subject">Subject</label>
			<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

		<input type="submit" value="Submit">

      </form>

    </div>

    </form>
  </body>
</html>
