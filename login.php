


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="icon" href="insta.png">
    <link rel="stylesheet" href="logstyle.css">

</head>
<body>
    <div class="title">
    <p  class="menu" onclick="window.location.href='index.html';" >HOME</p>
    <p onclick="window.location.href='login.php';" class="login" >Log In</p>
    <p onclick="window.location.href='sign.php';" class="sign" >Sign Up</p>
    </div>

    <div class="loginbox">

        <h1>Login Here</h1>
            <form autocomplete="off" action="process.php" method="post"  >
                <p>Username</p>
                <input type="text" id="username" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" id="password" name="password" placeholder="Enter Password">
                <input type="submit" name="" value="Login" id="submit">
            </form>

    </div>
</body>
</html>





