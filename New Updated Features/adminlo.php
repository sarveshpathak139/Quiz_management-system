<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<body bgcolor="#E6E">
    <div class="loginbox">
    <img src="avatar.png" class="">
        <h3>Admin login</h3>
        <form action="adminlo1.php" method="post">
            <p>Email</p>
            <input type="Email" name="Email" id="Email" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="password" name="password" id="password" pattern="(?=.*\d).{3,}"placeholder="Enter Password" required>
            <input type = "submit" value ="Login">
        </form>
        
    </div>

</body>
</head>
</html>