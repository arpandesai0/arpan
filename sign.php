
<?php

if(isset($_POST['name'])){

    $server = "sql12.freemysqlhosting.net";
    $userrname = "sql12366566";
    $password="zbNSYpLgD4";
    $db = "sql12366566";
    $conn = mysqli_connect($server,$userrname,$password,$db);
    if(!$conn){echo "not connected";}
    else{echo "connected";}



    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $sql = "INSERT INTO `data`(`name`,`username`,`password`,`email`) VALUES ('$name','$username','$password','$email')";
    mysqli_query($conn,$sql);



    $conn->close();
    header("Location: login.php");
    }
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signstyle.css">
</head>
<body>
<!NAVIGATION BAR>
        <div class="title">
          <p  class="menu" onclick="window.location.href='index.html';"  >HOME</p>
          <p onclick="window.location.href='login.php';" class="login" >Log In</p>
          <p onclick="window.location.href='sign.php';" class="sign" >Sign Up</p>
        </div>


<!SIGNUP BOX>
        <div class="signbox">

         <h1 id = "signuptext">Sign Up</h1>
         <form method="post" autocomplete="off" id="form"  >
             <p>Name</p>
             <input autocomplete="off" id="name" name="name" placeholder="Enter Name" type="text" spellcheck="false">
             <p>Username</p>
             <input autocomplete="off" id="username" name="username" placeholder="Enter Username">
             <p>Password</p>
             <input autocomplete="off" id="password" name="password" placeholder="Create Password" type="password">
             <p>Email</p>
             <input autocomplete="off" id="email" name="email" placeholder="Enter Name" type="email">
             <button type="submit" id="submitbutton">Sign Up</button>
         </form>
         </div>




</body>
</html>