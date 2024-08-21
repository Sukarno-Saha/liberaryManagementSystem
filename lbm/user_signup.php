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
    <title>user_signup</title>
    <style>
        body {
            background: URL("images/walpaper 2.webp");
            background-size: 100% 100%;
        }

        .container1 {
            overflow: hidden;
            background-color: #ffffffbd;
            width: 500px;
            height: 550px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
            object-fit: cover;
        }

        .container1 img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }

        .container1 form {
            box-sizing: border-box;
        }

        form .txt_field {
            width: 350px;
        }

        hr {
            width: 50%;
            border: 0;
            border-bottom: 2px solid black;
            margin: 25px auto;
        }
    </style>
</head>

<body style="background-color: red;">
    <div class="container1">
        <div>
            <center>
                <h1>User Signup</h1>
            </center>
            <hr>
            <img src="images/signup.png">
        </div>
    </div>
    <div class="container1">
        <!-- <h1>User Signup</h1> -->
        <form action="" method="POST" style="height:auto;">
            <div class="txt_field" style="margin:20px 0;">
                <input type="text" name="email" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field" style="margin:20px 0;" style="margin:20px 0;">
                <input type="text" name="full_name" required>
                <span></span>
                <label>Full Name</label>
            </div>
            <div class="txt_field" style="margin:20px 0;" style="margin:20px 0;">
                <input type="text" name="id" required>
                <span></span>
                <label>ID</label>
            </div>
            <div class="txt_field" style="margin:20px 0;">
                <input type="text" name="batch" required>
                <span></span>
                <label>Batch</label>
            </div>
            <div class="txt_field" style="margin:20px 0;">
                <input type="text" name="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="txt_field" style="margin:20px 0;">
                <input type="text" name="dob" required>
                <span></span>
                <label>DOB</label>
            </div>
            <div class="txt_field" style="margin:20px 0;">
                <input type="text" name="age" required>
                <span></span>
                <label>Age</label>
            </div>
            <input type="submit" value="Login" name="submit" style="margin-bottom: 10px">
        </form>
    </div>
</body>

</html>
<?php
if(isset($_POST['submit']))
{


$email=$_POST['email'];
$name=$_POST['full_name'];
$id=$_POST['id'];
$batch=$_POST['batch'];
$password=$_POST['password'];
// $c_password=$_POST['c_password'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$img="images/profile.png";
$sql="INSERT INTO user (email, name, id, batch, password, dob, age, img) VALUES ('$email', '$name', '$id', '$batch', '$password', '$dob', '$age', '$img')";
$res=mysqli_query($conn,$sql);
if($res)
{
    $_SESSION['status']="Records Added Successfully";
    $_SESSION['batch']=$batch;
    $_SESSION['id']=$id;
    header('Location:user_signin.php');
}
else
{
    $_SESSION['status']="Records Not Added ";
    header('Location:user_signup.php');  
}
}
?>