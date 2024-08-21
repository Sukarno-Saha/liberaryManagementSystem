<?php
include('../connect.php');
?>

<!DOCTYPE html>
<html>
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
  padding: 250px 160px;
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
        <a href="issue_book.php" style="color:black;" class="active">Issue Book</a>
        <a href="request_book_master.php">requested book</a>
        <i class="fa-solid fa-arrow-right-from-bracket"></i>
    </div>
        <div id="user" class="tabcontent">
        <h1>Issue Book</h1>
<form action="" method="post">
<div class="txt_field">
<input type="text" name="user_id" required>
<span></span>
<label>user_id</label>
</div>
<div class="txt_field">
<span></span>
<select class="form-control" type="text" name="book_name">
<option><-Select Book Name-></option>
<?php 
$sql="SELECT `book_name` FROM `book`";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res)){
?>
<option><?php echo $row['book_name'];?></option>
<?php
}
?>
</select>
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
<input type="submit" value="Issue Book" name="submit">
</form>
        </div>  
    </body>
</html>
<?php
if(isset($_POST['submit']))
{
$user_id=$_POST['user_id'];
$book_name=$_POST['book_name'];
$issued_date=$_POST['issued_date'];
$return_date=$_POST['return_date'];
$sql="INSERT INTO `issued_book` VALUES ('$user_id','$book_name','$issued_date','$return_date')";
$res=mysqli_query($conn,$sql);
if($res)
{
$_SESSION['status']="Records Added Successfully";
header('Location:issue_book.php');
$sql1="select quantity from book where book_name='$book_name'";
$res1=mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($res1);
$quantity=$row['quantity'];
    if($quantity>0){
 // echo $quantity;
 $quantity=$quantity-1; 
 $sql2="update book set quantity='$quantity' where book_name='$book_name'";
 $res=mysqli_query($conn,$sql2);
    }
?>
<script>
window.alert ("requested SucessfullY");
</script>
<?php
}
else
{
$_SESSION['status']="Records Not Added ";
header('Location:issue_book.php');
?>
<script>
window.alert ("Failed");
</script>
<?php
}
}
?>