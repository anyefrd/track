<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" href="Signup.css">
  <style>
    body {
    font-family: Arial, sans-serif;
    background: url(Track.png);
    background-position:center;
    background-size:cover;
   
  }

    /* Header styles */
    header {
       /* background-color: #f2f2f2;*/
        padding: 20px;
        background-color:#000000ce;
    }

    h1 {
        color: #333;
        margin: 0;
        position: center;
        background-color: aliceblue;
        color:#000000ce;
    }

    h2 {
        color:#000000ce;
        position: center;
        padding-right: 25px;
        padding-left: 200px;
        font-size: 40px;
        
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        margin-top: 15px;
        margin-bottom: 15px;
        padding-right: 40px;
        padding-left: 145px;
        

    }

    nav ul li {
        display: inline;
        margin-right: 25px;
    }

    nav ul li a {
        text-decoration: none;
        color: aliceblue;
        font-weight: bold;
    }
    input{
      margin-top: 1rem;
      
    }
    select{
      margin-top: 1rem;
    }
  </style>
</head>
<body>
  <header>
    <!-- Add your header content here -->
    <center><h1>Get Registered</h1></center>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <h2>Registration Form</h2>
  <form action="process_registration.php" method="POST" id="registrationForm">
    
    <input type="text" id="username" name="username" placeholder=" Enter username" required>

    
    <input type="email" id="email" name="email" placeholder=" Enter email" required>

   
    <input type="password" id="password" name="password" placeholder=" Enter password" required>

    
    <input type="password" id="confirm_password" name="confirm_password" placeholder=" Retype password"required>

    <input type="text" id="full_name" name="full_name" placeholder=" Enter Device name" required>

    
    <select id="device" name="device" placeholder=" Select Device" required>
      <option value="#">Select</option>
      <option value="VIN">V I N</option>
      <option value="IMEI">I M E I</option>
      <option value="other">Other</option>
    </select>

    <input id="address" name="address" placeholder=" Enter Address" required></textarea>

    <button type="button" onclick="validateForm()">Sign Up</button>
  </form>
  <script>
    function validateForm() {
      var form = document.getElementById("registrationForm");
      var isValid = form.checkValidity();

      if (isValid) {
        var password = document.getElementById("password").value;
        var confirm_password = document.getElementById("confirm_password").value;

        if (password !== confirm_password) {
          alert("Passwords do not match");
        } else {
          // Perform form submission or other necessary tasks
          redirectToDashboard();
        }
      } else {
        alert("Please fill in all the required fields");
      }
    }

    function redirectToDashboard() {
      // Redirect to the dashboard
      window.location.href = "dashboard.php";
    }
  </script>
</body>
</html>