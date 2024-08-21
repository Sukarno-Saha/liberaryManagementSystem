<?php
include('../connect.php');
if(isset($_POST['issue'])){
$user_id=$_POST['user_id'];
 $book_name=$_POST['book_name'];
 $author_name=$_POST['author_name'];
 $sql1="select * from book where book_name='$book_name' and author_name='$author_name";
 $res=mysqli_query($conn,$sql1);
 if($res)
 {
 $row=mysqli_fetch_assoc($res);
 $img=$row['img'];
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.10.5/font/bootstrap-icons.css">
<title>Document</title>
<!-- <link rel="stylesheet" href="css/issueuser.css"> -->
<style>
 body{
 background-color: black;
 height: 100vh;
 width: 100%;
 display: flex;
 align-items: center;
 justify-content: center;
 background-color: #ffffffbd; 
 }
 .container1{
 overflow:hidden;
 background: white;
 width: 400px;
 height: 450px;
 display: flex;
 flex-direction:column;
 justify-content: center;
 align-items: center;
 border-radius: 20px;
 border:1px solid black;
 }
 .container1 img{
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
 form .txt_field{
 border-bottom: 2px solid black;
 margin: 20px 0;
 }
 .txt_field input{
 width: 100%;
 height: 40px;
 font-size: 20px;
 border: none;
 background: none; 
 outline: none;
 }
 .txt_field label{
 top: -5px;
 color: #2691d9;
 }
 .txt_field input{
 width: 100%;
 }
 .submit, .back{
 width: 200px;
 height: 50px;
 border: 1px solid;
 background: #2691d9;
 border-radius: 25px;
 font-size: 18px;
 color: #e9f4fb;
 font-weight: 700;
 cursor: pointer;
 outline: none;
 }
 </style>
</head>
<body>
<div class="container1"> 
 <img src="<?php echo $img ?>"> 
 </div>
 <div class="container1">
 <form action="" method='POST'>
 <div class="txt_field">
 <label>Id</label>
 <input type="text" name='user_id' value="<?php echo $user_id; ?>" readonly>
 <span></span>
 </div>
 <div class="txt_field">
 <label>Book Name</label>
 <input type="text" name='book_name' value=<?php echo $book_name; ?> readonly>
 <span></span>
 </div>
 <div class="txt_field">
 <label>Author Name</label>
 <input type="text" name='author_name' value=<?php echo $author_name; ?> readonly>
 <span></span>
 </div>
 <div class="txt_field">
<input type="date" name="issued_date" value="<?php echo date('y-m-d'); 
?>"required>
<span></span>
<label>issued_date</label>
</div>
<div class="txt_field">
<input type="date" name="return_date" value="<?php echo date('y-m-d');?>" 
required>
<span></span>
<label>return_date</label>
</div>
 <input type="submit" value="Request" name="submit" class="submit">
 </form>
 <a href="user_home.php"><input type="submit" value="Back" class="back"></a> 
 </div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
 $user_id=$_POST['user_id'];
$author_name=$_POST['author_name'];
$book_name=$_POST['book_name'];
$issued_date=$_POST['issued_date'];
$return_date=$_POST['return_date'];
$sql="INSERT INTO `issued_book` VALUES ('$user_id','$book_name','$issued_date','$return_date')";
$res=mysqli_query($conn,$sql);
if($res)
{
$_SESSION['status']="Records Added Successfully";
$sql1="delete from request_book where user_id='$user_id' and book_name='$book_name' and author_name='$author_name'";
    $res1=mysqli_query($conn,$sql1);
    if($res1)
    {
        $session['status']="deletion sucessfull";
        header('Location:request_book_master.php');
    }
    else
    {
        $session['status']="deletion  not sucessfull";
        header('Location:request_book_master.php');

    }
}
else
{
$_SESSION['status']="Records Not Added ";
header('Location:issue_book_admin.php');
?>
<script>
window.alert ("Failed");
</script>
<?php
}
}
?>