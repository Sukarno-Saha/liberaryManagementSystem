<?php
include('connect.php');

if(isset($_POST['book_del_btn']))
{
    $book_id=$_POST['book_id'];
    $sql="delete from book where book_id='$book_id'";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
        $session['status']="deletion sucessfull";
        header('Location:book_master.php');
    }
    else
    {
        $session['status']="deletion  not sucessfull";
        header('Location:book_master.php');

    }
}
if(isset($_POST['book_edit_btn']))
{
$book_id=$_POST['book_id'];
$book_name=$_POST['book_name'];
$author_name=$_POST['author_name'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$dept=$_POST['dept'];
$sem=$_POST['sem'];

    $sql="update book set book_name='$book_name',author_name='$author_name',price='$price',quantity='$quantity' ,sem='$sem' ,dept='$dept' where book_id='$book_id'";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
        $_SESSION['status']="Modification sucessfull";
        header('Location:book_master.php');
    }
    else
    {
        $_SESSION['status']="Modification  not sucessfull";
        header('Location:book_update.php');

    }
}


?>