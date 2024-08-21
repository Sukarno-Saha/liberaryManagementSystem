<?php
include('connect.php');
if(isset($_POST['s1'])){
    $book_name=$_POST['book_name'];
    $author_name=$_POST['author_name'];
    $sql1="select * from book where book_name='$book_name'";
    $res=mysqli_query($conn,$sql1);
    if($res)
    {
    $row=mysqli_fetch_assoc($res);
    $img=$row['img'];
    }
}
$email=$_SESSION['email'];
$sql="select * from user where email='$email'";
$res=mysqli_query($conn,$sql);
if($res)
{
 $row=mysqli_fetch_assoc($res);
 $id=$row['id'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
 <title>Document</title>
 <link rel="stylesheet" href="css/test.css">
 <style> 
        body{ 
        background-color: black;         height: 100vh;         width: 100%; 
        display: flex;         align-items: center;         justify-content: center;         background-color: #ffffffbd;     
    } 
        .container1{             overflow:hidden;             background: white;             width: 400px;             height: 450px;             display: flex; 
            flex-direction:column;             justify-content: center;             align-items: center;             border-radius: 20px;             border:1px solid black; 
        } 
        .container1 img{             height: 100%;             width:100%; 
        } 
        .container1 form{             box-sizing: border-box; 
            display:flex;             flex-direction: column;             place-items:center; 
        } 
        form .txt_field{             width: 300px; 
        } 
        input[type="submit"]{             margin-bottom: 30px; 
        }         a{ 
            color:silver; 
            text-decoration:none;             margin-bottom:5px; 
        } 
        a:hover{             color:#2691d9; 
        } 
        hr{ 
            width: 50%;             border: 0; 
            border-bottom: 2px solid black;             margin: 25px auto; 
        } 
        form .txt_field{             border-bottom: 2px solid black;             margin: 20px 0; 
        } 
        .txt_field input{             width: 100%;             height: 40px;             font-size: 20px;             border: none;             background: none;              outline: none; 
        } 
        .txt_field label{             top: -5px;             color: #2691d9; 
        } 
        .txt_field input{             width: 100%; 
        } 
        .submit, .back{             width: 200px;             height: 50px;             border: 1px solid;             background: #2691d9;             border-radius: 25px;             font-size: 18px;             color: #e9f4fb;             font-weight: 700;             cursor: pointer;             outline: none; 
        } 
    </style> 


</head>
<body>

<div class="container1"> 
        <img src="<?php echo $img ?>">            
    </div>
    <div class="container1">
        <form action="" method='POST'> 
                <table>
                    <TR><td>Id</td><td><input type="text" name='user_id' value="<?php echo $id; ?>"></td></TR>
                    <TR><td>Book Name</td><td><input type="text" name='book_name' value=<?php echo $book_name; ?> readonly></td></TR>
                    <TR><td>Author Name</td><td><input type="text" name='author_name' value=<?php echo $author_name; ?> readonly></td></TR>


                </table>
                <input type="submit" value="Request" name="submit" class="btn btn-info">
                <a href="user_home.php"><input type="submit" value="Back" class="btn btn-info"></a>
            </form>
    </div>
    

</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $user_id=$_POST['user_id'];
$author_name=$_POST['author_name'];
$book_name=$_POST['book_name'];
$sql="INSERT INTO `request_book` VALUES ('$user_id','$book_name','$author_name')";
$res=mysqli_query($conn,$sql);
if($res)
{
 $_SESSION['status']="Records Added Successfully";
 header('Location:user_home.php');
 ?>
 <script>
 window.alert ("Book Added SucessfullY, Thank You.");
 </script>
 <?php
}
else
{
 $_SESSION['status']="Records Not Added ";
 header('Location:issue_book_user.php');
 ?>
 <script>
 window.alert ("Failed");
 </script>
 <?php
}
}

?>

