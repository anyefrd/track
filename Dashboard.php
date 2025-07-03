<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="Dashboard.css">
    <style>
        /* Dashboard styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url(Track.png);
            background-position:center;
            background-size:cover;
        }

        .dashboard {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 200px;
            background-color:#000000ce;;
            color: #fff;
            padding: 20px;
        }

        .sidebar h2 {
            margin-top: 0;
            padding-bottom: 10px;
            border-bottom: 1px solid #fff;
            color: green;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 20px 0;
        }

        .sidebar li {
            margin-bottom: 10px;
        }

        .sidebar li a {
            color: aliceblue;
            text-decoration: none;
            display: flex;
            align-items: center;
            margin: 50px 0;
        }

        .sidebar li a i {
            margin-right: 10px;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .content h2 {
            margin-top: 0;
            font-weight: bold;
            color: lightgreen;
        }
        .content h1 {
            margin-top: 117px;
            color: #000000ce;;
            font-size:5rem;
            padding:12px;
            
        }

        .content p {
            font-size:2rem;
            margin-top:2rem;
            color:#000;
        }

        .header {
            background-color: #f2f2f2;
            padding: 10px;
            margin-bottom: 20px;
        }
        
        .navbar {
            width: 1000px;
            height: 75px;
            margin: auto;
            display: flex;
            padding-top: 15px; 
            padding-bottom: 5px;
            background-color: #000000ce;
            border-radius:2rem;
            
        }
        .navbar ul li{
            display: inline-block;
            color: lightgreen;
        }
        
        .navbar ul li a{
             text-align: center;
            font-size: 15px;
            text-decoration:none;
            background-color:aliceblue;
            cursor: pointer;
            color:#000;
            display: flex;
            padding-left: 20px;
            padding-right:20px;
            padding-top:10px;
            padding-bottom:10px;
            border-radius:2rem;
            margin-left:8rem;


        }
        .navbar ul li a:hover{
            color: aliceblue;
            background-color:green;
            text-transform:uppercase;
        }

        .form-container {
            text-align: center;
            background: url(tech.jpg);
            background-size: cover;
        }

        .form-container label {
            display: block;
            margin-bottom: 10px;
        }

        .form-container input[type="password"] {
            padding: 8px;
            font-size: 16px;
        }

        .form-container .error-message {
            color: red;
            margin-bottom: 10px;
        }

        /* Login Popup styles */
        .overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
        }

        .popup {
            background-color: Sandybrown;
            padding: 20px;
            border-radius: 23px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            max-width: 353px;
            width: 100%;
        }

        .popup h2 {
            margin-top: 0;
            font-weight: bold;
        }

        .popup p {
            line-height: 1.5;
        }

        .popup label {
            display: block;
            margin-bottom: 10px;
        }

        .popup input[type="password"] {
            padding: 8px;
            font-size: 16px;
        }

        .popup .error-message {
            color: red;
            margin-bottom: 10px;
        }

        .popup .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        .popup .close {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        color: #fff;
        background-color: #333;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 16px;
    }

    .popup .close:hover {
        background-color: #555;
    }

        .avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #ccc;
            margin-bottom: 10px;
            position: relative;
        }
        .avatar {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 10px;
}
.button-btyn{
    position: relative;
    display: flex;
    margin-left:30rem;
    padding: 20px;
}
.button-btyn button{
    padding: 18px;
    border-radius:2rem;
    background-color:#000000ce;
    color:aliceblue;
    cursor: pointer;
    transition:.5s;
    font-size:12px;
}
.button-btyn button:hover{
background-color:green;
color:aliceblue;
text-transform:uppercase;
font-size:12px;
}
    </style>
</head>
<body>

    <div class="dashboard">
        <div class="sidebar">
            <h2>Sidebar</h2>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i> Dashboard</a></li>
                <li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
                <li><a href="#" onclick="openLoginPopup('Car Track')"><i class="fas fa-sign-in-alt"></i> Car Track Login</a></li>
                <li><a href="#" onclick="openLoginPopup('Mobile Track')"><i class="fas fa-sign-in-alt"></i> Mobile Track Login</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="header">
<!-- Sorry, it seems like the HTML code got cut off. Here's the continuation: -->

<!-- ```html -->
                <div class="navbar">
                    <ul>
                        <li><a href="Homepage.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
           <center> <h1>Welcome to the Dashboard</h1>
            <p>This is the main content of the dashboard.</p></center>
            <div class="button-btyn">
            <button type="submit" <a href="#" onclick="openLoginPopup('Car Track')"><i class="fas fa-sign-in-alt"></i></a> Car Track Login</button>
                <button type="submit" <a href="#" onclick="openLoginPopup('Mobile Track')"><i class="fas fa-sign-in-alt"></i></a>Mobile Track Login</button> 
                </div>
        </div>
        
    </div>
       
    <div class="overlay" id="overlay">
        <div class="popup">
            <span class="close" onclick="closeLoginPopup()">&times;</span>
            <center><h2>Login</h2></center>
            <div class="form-container">
                <label for="username">Username:</label>
                <input type="text" id="username" required>
                <label for="Formal Position">Previous Location:</label>
                <input type="text" id="PLocation" required>
                <label for="password">Password:</label>
                <input type="password" id="password" required>
                <label for="Formal Position">Current Location:</label>
                <input type="text" id="PLocation" required>
                <br><br>
                <button onclick="login()"><a href="Contact.php">Track Now</a></button>
                <p class="error-message" id="error-message"></p>
            </div>
        </div>
    </div>

    <script>
        function openLoginPopup(trackType) {
            document.getElementById("overlay").style.display = "flex";
            document.getElementById("error-message").innerText = "";
            document.getElementById("username").value = "";
            document.getElementById("password").value = "";
            document.getElementById("username").focus();
            document.getElementById("overlay").setAttribute("data-track-type", trackType);
        }

        function closeLoginPopup() {
            document.getElementById("overlay").style.display = "none";
        }

        function login() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var trackType = document.getElementById("overlay").getAttribute("data-track-type");

            if (username === "admin" && password === "password") {
                document.getElementById("error-message").innerText = "";
                alert("Login successful for " + trackType);
                closeLoginPopup();
            } else {
                document.getElementById("error-message").innerText = "Invalid username or password.";
            }
        }
    </script>
    
</body>
</html>