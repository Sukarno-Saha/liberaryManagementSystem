<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <style>
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                URL("images/background1.jpg");
            object-fit: cover;
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }

        .container1 {
            overflow: hidden;
            background-color: #ffffffbd;
            width: 400px;
            height: 450px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
        }

        .container1 img {
            object-fit: cover;
            height: 90%;
            width: 90%;
        }

        .container1 form {
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            place-items: center;
        }

        form .txt_field {
            width: 300px;
        }

        input[type="submit"] {
            margin-bottom: 30px;
        }

        a {
            color: black;
            text-decoration: none;
            margin-bottom: 5px;
        }

        a:hover {
            color: #2691d9;
        }

        hr {
            width: 50%;
            border: 0;
            border-bottom: 2px solid black;
            margin: 25px auto;
        }
    </style>
    <title>user signin</title>
</head>

<body>
    <div class="container1">
        <div>
            <center>
                <h1>User Signin</h1>
            </center>
            <hr>
            <img src="images/php-login.png">
        </div>
    </div>
    <div class="container1">
        <form action="" method="POST">
            <div class="txt_field">
                <input type="email" class="email" name="email" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" class="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <input type="submit" value="Login" name="submit">
            <a href="forget_pass.php">Forget Password?<a>
                    <a href="user_signup.php"> New User? Sign Up<a>
                            <a href="admin_signin.php">If You Are An Admin 'CLICK HERE' <a>
        </form>
    </div>

</body>

</html>
<?php
if(isset($_POST['submit']))
{
 $email=$_POST['email'];
 $password=$_POST['password'];
 $sql="select * from user where email='$email' and password='$password'";
 $res=mysqli_query($conn,$sql);
 if($res)
 {
 $count=mysqli_num_rows($res);
 if($count>0)
 {
 echo "Pass Ok";
 ?>
<script>
    alert("Password is ok, Login Sucessfull");
</script>
<?php
 $_SESSION['email']=$email;
 $id=$_SESSION['id'];
 header('Location:user_home.php');
 }
 else
 {
 echo "Pass Not Ok";
 ?>
<script>
    alert("Password is Wrong, Login not Done");
</script>
<?php
 }
 }
}
?>