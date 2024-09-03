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
        <a href="book_master.php" style="color:black;" class="active">book Table</a>
        <a href="issued_book_master.php">Isuued Book Table</a>
        <a href="book_insert.php">Book Insert</a>
        <a href="issue_book.php">Issue Book</a>
        <a href="request_book_master.php">requested book</a>
        <a href="../index.php"> <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
    </div>
        <div id="book" class="tabcontent">
        <h1>Book Status</h1>
<div>
 <a href="book_insert.php"><button class="btn btn-dark">Add New book</button></a>
 <?php
 //if($_SESSION['status']!=" " or $_SESSION['status'])
 ?>
 <!--<h2><?php echo $_SESSION['status']?> </h2>-->
 <?php
 unset($_SESSION['status']);?>
 <table class="table">
 <thead>
 <th>book_id</th>
 <th>book_name</th>
 <th>author_name</th>
 <th>price</th>
 <th>quantity</th>
 <th>dept</th>
 <th>sem</th>
 <th>edit</th>
 <th>delete</th>
 </thead>
 <tbody>
 <?php
 $sql="select * from book";
 $res=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_assoc($res))
 {
 ?>
 <tr>
 <td><?php echo $row['book_id']?></td>
 <td><?php echo $row['book_name']?></td>
 <td><?php echo $row['author_name']?></td>
 <td><?php echo $row['price']?></td>
 <td><?php echo $row['quantity']?></td>
 <td><?php echo $row['dept']?></td>
 <td><?php echo $row['sem']?></td>

 <td>
 <form action="book_update.php" method="POST">
 <input type="text" hidden value="<?php echo $row['book_id']?>" name="book_id">
 <input type="submit" value="edit" class="btn btn-info"name="book_edit_btn">
 </form>
 </td>
 <td>
 <form action="book_code.php" method="POST">
 <input type="text" hidden value="<?php echo $row['book_id']?>" name="book_id">
 <input type="submit" value="Delete" class="btn btn-danger"name="book_del_btn">
 </form>
 
 </td>
 </tr>
 <?php
 }
 ?>
 </tbody>
</table>
</div>  </div>
    </body>
</html>
