<?php
include('../connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8"> 
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="../css/form.css">
 <style>
 body{
 background:URL("images/walpaper1.jpg");
 background-size:100% 100%;
 }
 .container1{
 overflow:hidden;
 background-color: #ffffffbd;
 width: 400px;
 height: 450px;
 display: flex;
 justify-content: center;
 align-items: center;
 border-radius: 20px;
 }
 .container1 img{
 object-fit:cover;
 height: 100%;
 width:100%;
 }
 .container1 form{
 box-sizing: border-box;
 display:flex;
 flex-direction: column;
 place-items:center;
 }
 form .txt_field{
 width: 300px;
 }
 input[type="submit"]{
 margin-bottom: 30px;
 }
 a{
 color:silver;
 text-decoration:none;
 margin-bottom:5px;
 }
 a:hover{
 color:#2691d9;
 }
 hr{
 width: 50%;
 border: 0;
 border-bottom: 2px solid black;
 margin: 25px auto;
 }
 .container1 h1{
 margin-top:50px;
 }
 </style>
 <title>admin signin</title>
</head>
<body>
 <div class="container1">
 <div>
 <center><h1>Admin Login</h1></center>
 <hr>
 <img src="../images/admin.png" >
 </div>
 </div>
 <div class="container1">
 <form action="" method="POST">
 <div class="txt_field">
 <input type="text" name="email" required>
 <span></span>
 <label>Username</label>
 </div>
 <div class="txt_field">
 <input type="password" class="password" name="password" required >
 <span></span>
 <label>Password</label>
 </div>
 <input type="submit" value="Login" name="submit">
 </form> 
 </div>
</body>
</html> 
<?php
if(isset($_POST['submit']))
{
 $email=$_POST['email'];
 $password=$_POST['password'];
 $sql="select * from admin where email='$email' and password='$password'";
 $res=mysqli_query($conn,$sql);
 if($res)
 {
 $count=mysqli_num_rows($res);
 if($count>0)
 {
 echo "Pass Ok";
 ?>
 <script>
 alert ("Password is ok, Login Sucessfull");
 </script>
 <?php
 $_SESSION['email']=$email;
 header('Location:../admin/user_master.php');
 }
 else
 {
 echo "Pass Not Ok";
 ?>
 <script>
 alert ("Password is Wrong, Login not Done");
 </script>
 <?php
 header('Location:admin_signin.php');
 }
 }
}
?>