<?php
include('connection.php');

session_start();






?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($username) ||empty($password)){
        echo "both username and password is required";
    }
    else{
        $resul=mysqli_query($conn,"INSERT INTO users VALUES(null,'$username','$password')");
    }
    if($result){
        echo "<script>alert(''well logged in);
        window.location.href='home.php'
        </script>";
    }
    else{
        echo "not well logged in";
    }
}

?>

    <form action="" method="POST">
        <label for="username">username:</label>
        <input type="text" name="username">
        <label for="password">password:</label>
        <button type="submit" name="login">login</button>
    </form>
    
</body>
</html>