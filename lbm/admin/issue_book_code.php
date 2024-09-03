<?php
include('../connect.php');

if(isset($_POST['del_btn']))
{
    $user_id=$_POST['user_id'];
    $book_name=$_POST['book_name'];
    $sql="delete from issued_book where user_id='$user_id' and book_name='$book_name'";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
        $_SESSION['status']="Records Added Successfully";
header('Location:issued_book_master.php');
$sql1="select quantity from book where book_name='$book_name'";
$res1=mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($res1);
$quantity=$row['quantity'];
 $quantity=$quantity+1; 
 $sql2="update book set quantity='$quantity' where book_name='$book_name'";
 $res=mysqli_query($conn,$sql2);
    }
    else
    {
        $session['status']="deletion  not sucessfull";
        header('Location:issued_book_master.php');

}

}

?>