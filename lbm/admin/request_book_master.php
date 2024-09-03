<?php
include('../connect.php');
?>

<!DOCTYPE html>
<html>
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>JSP Page</title>
         <style>
             body img{
        position: absolute;
        left:80%;
        top:60%;
    }
 table, tr, td
            {
                margin: auto;
                padding: 10px;
                border: 3px solid darkblue;
                border-collapse: collapse;
                width: 50%;
            }
th
            {
                padding: 10px;
                border: 3px solid darkblue;
                border-collapse: collapse;
                color: black;
 }

.tab {
  float: left;
  border: 1px solid black;
  background-color: rgb(25 ,25 ,124);
  width: 25%;
  height: 100%;
  position: fixed;
}
.tab h1{
  text-align: center;
}
.tab i{
  padding: 0px 160px;
  font-size: 32px;
}

 /*Style the buttons that are used to open the tab content*/ 
.tab a {
  display: block;
  background-color: inherit;
  color: white;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.6s;
  font-size: 20px;
}
.tab a{
 text-decoration: none;
 color:white;
}


/* Change background color of buttons on hover */
.tab a :hover {
  background-color:rgb(70, 70, 233);
  border: 2px solid black;
  border-radius: 5px;

}

 /*Style the tab content*/ 
.tabcontent {
  float: right;
  padding: 50px 12px;
  width: 75%;
  border-left: none;
  height: 100%;
  
}
.tab .active {
  background-color: white;
  border: none;
  border-right: none;
  border-top-left-radius: 30px;
  border-bottom-left-radius: 30px;
  text-align: center;
  color: black;
  border-top-right-radius: 0px;
}

</style>
<script>
            function funDelete()
            {
                if (confirm("Are you sure you want to delete the record?") === true)
                    return true;
                else
                    return false;
            }
        </script>
        

    </head>
    <body>
        
    <div class="tab">
        <h1 style="color: #fff;">DASHBOARD<hr></h1>
        <a href="user_master.php" >user Table</a>
        <a href="book_master.php">book Table</a>
        <a href="issued_book_master.php">Isuued Book Table</a>
        <a href="book_insert.php">Book Insert</a>
        <a href="issue_book.php">Issue Book</a>
        <a href="request_book_master.php" style="color:black;" class="active">requested book</a>
        <a href="../index.php"> <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
    </div>
    <div id="book" class="tabcontent">
 <h1>Book Status</h1>
<div>
<?php
//if($_SESSION['status']!=" " or $_SESSION['status'])
?>
<!--<h2><?php echo $_SESSION['status']?> </h2>-->
<?php
unset($_SESSION['status']);?>
<table class="table">
<thead>
<th>user_id</th>
<th>book_name</th>
<th>author_name</th>
<th>issue</th>
</thead>
<tbody>
<?php
$sql="select * from request_book";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res))
{
?>
<tr>
<td><?php echo $row['user_id']?></td>
<td><?php echo $row['book_name']?></td>
<td><?php echo $row['author_name']?></td>
<td>
<form action="issue_book_admin.php" method="POST">
<input type="text" hidden value="<?php echo $row['user_id']?>" name="user_id">
<input type="text" hidden value="<?php echo $row['book_name']?>" name="book_name">
<input type="text" hidden value="<?php echo $row['author_name']?>" name="author_name">
<input type="submit" value="Issue" class="btn btn-danger"name="issue">
</form>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
</div> </div>
 </body>
</html>
<!-- <?php
if(isset($_POST['book_del_btn']))
{
 $user_id=$_POST['user_id'];
 $book_name=$_POST['book_name'];
 $sql="delete from request_book where user_id='$user_id' and 
book_name='$book_name'";
 $res=mysqli_query($conn,$sql);
 if($res)
 {
 $session['status']="deletion sucessfull";
 header('Location:request_book_master.php');
 }
 else
 {
 $session['status']="deletion not sucessfull";
 header('Location:request_book_master.php');
 }
}
?>