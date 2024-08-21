<?php
include('../connect.php');

if(isset($_POST['del_btn']))
{
    $user_id=$_POST['user_id'];
    $book_name=$_POST['book_name'];
    $author_name=$_POST['aythor_name'];
    $sql="delete from issued_book where user_id='$user_id' and book_name='$book_name' and author_name";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
        $session['status']="deletion sucessfull";
        header('Location:issued_book_master.php');
    }
    else
    {
        $session['status']="deletion  not sucessfull";
        header('Location:issued_book_master.php');

    }
}

?>