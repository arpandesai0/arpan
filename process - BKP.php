
<?php




    $server = "localhost";
    $userrname = "root";
    $password="";
    $db = "signdata";
    $conn = mysqli_connect($server,$userrname,$password,$db);





    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username==""||$password==""){
    exit("login failed");}

    $result = mysqli_query($conn,"SELECT * FROM data WHERE username='$username' && password='$password'");
    $row = mysqli_fetch_array($result);
    echo $row;
    if($row['username']==$username && $row['password']==$password){
    $conn->close();
    header("Location: welcome.html");}
    else{echo"login failed";}


    $conn->close();


?>





