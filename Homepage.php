<!DOCTYPE html>
<html lang="en">
<head>
    <title>Track Web</title>
<link rel="stylesheet" href="Hompage.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">AUTO<br>TRACKING</h2>
                </div>
    <div class="menu">
    <ul>
    <li><a href="Signup.php">Sign Up</a></li>
</ul> 
</div>

<div class="search">
    <input class="srch" name="" placeholder="Type To Text">
    <a href="#"> <button class="btn">search</button></a>
</div>

</div>
<div class="content">
    <h1>Tracking Center & Web <br><span>Design</span> <br>Easy Recovery</h1>
    <p class="par">We welcome you to our platform & where you can safe keep and <br> regain your devices such as Your phone and Vehicle</p>
<button class="cn"><a href="Signup.php">Be Part Of US</a></button>
</div>
<footer class="footer">
  <div class="Container">
    <div class="row">
      <div class="footer-col">
        <h4>Company</h4>
      <ul>
        <li><a href="#">About Us</a></li>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Details</a></li>
      </ul>
</div>
<div class="footer-col">
        <h4>Contact Us</h4>
      <ul>
        <li><a href="#">Our Services</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">About us</a></li>
      </ul>
</div>
<div class="footer-col">
        <h4>Follow Us</h4>
      <ul>
        <div class="social-links">

        <br><br>
          <a href="#"><i class="fab fa-facebook-f"></i></a> 
          <a href="#"><i class="fab fa-twitter"></i></a> 
          <a href="#"><i class="fab fa-instagram"></i></a> 
          <a href="#"><i class="fab fa-linkedin-in"></i></a> 
</ul>
</div>
</div>
</div>

<br><br>
 <p>Copyright &copy; 2023 Your Website. All rights reserved.<span class="Designer">De New Guy</span></p>
    </div>
</footer>



<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

</script>




<!-- The form -->
<div class="form-popup" id="myForm">
  <form action="/dasboard.php" class="form-container">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>


<script>
    function showLoginPopup() {
        document.getElementById('loginPopup').style.display = 'block';
    }

    function hideLoginPopup() {
        document.getElementById('loginPopup').style.display = 'none';
    }
</script>
</div>
</body>
</html>