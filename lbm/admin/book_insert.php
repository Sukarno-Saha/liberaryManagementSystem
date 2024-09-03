<?php
include('../connect.php');
?>

<!DOCTYPE html>
<html>
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                   <!--fontawsome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>JSP Page</title>
         <style>
          body {
  font-family: Arial, sans-serif;
  background-color: #f8f9fa;
  margin: 0;
  padding: 0;
}

.tab {
  float: left;
  border: 1px solid black;
  background-color: rgb(25, 25, 124);
  width: 25%;
  height: 100%;
  position: fixed;
}

.tab h1 {
  text-align: center;
  color: white;
}

.tab i {
  padding: 0px 160px;
  font-size: 32px;
}

/* Style the buttons that are used to open the tab content */
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
  text-decoration: none;
}

/* Change background color of buttons on hover */
.tab a:hover {
  background-color: rgb(70, 70, 233);
  border: 2px solid black;
  border-radius: 5px;
}

/* Active tab button */
.tab .active {
  background-color: white;
  color: black;
  border-radius: 5px 0 0 5px;
}

.tabcontent {
  float: right;
  padding: 50px 12px;
  width: 75%;
  height: 100%;
  background-color: #fff;
}

/* Form styling */
form {
  background-color: #fff;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 10px;
  margin: 20px auto;
  width: 80%;
  max-width: 600px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.txt_field {
  position: relative;
  margin-bottom: 30px;
}

.txt_field input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  outline: none;
  background: none;
}

.txt_field label {
  position: absolute;
  top: 50%;
  left: 10px;
  color: #999;
  transform: translateY(-50%);
  pointer-events: none;
  transition: .5s;
}

.txt_field input:focus ~ label,
.txt_field input:valid ~ label {
  top: -5px;
  left: 10px;
  color: #333;
  font-size: 12px;
}

input[type="submit"] {
  background-color: rgb(25, 25, 124);
  color: white;
  padding: 10px 15px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
  display: block;
  margin: 20px 0;
  width: 100%;
}

input[type="submit"]:hover {
  background-color: rgb(70, 70, 233);
}

.form-group {
  margin-bottom: 20px;
}

body img {
  position: absolute;
  left: 80%;
  top: 60%;
}

table, tr, td {
  margin: auto;
  padding: 10px;
  border: 3px solid darkblue;
  border-collapse: collapse;
  width: 50%;
}

th {
  padding: 10px;
  border: 3px solid darkblue;
  border-collapse: collapse;
  color: black;
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
        <a href="book_insert.php" style="color:black;" class="active">Book Insert</a>
        <a href="issue_book.php">Issue Book</a>
        <a href="request_book_master.php">requested book</a>
        <a href="../index.php"> <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
    </div>
        <div id="book" class="tabcontent">
        <form action="" method="POST" enctype="multipart/form-data">
 <div class="txt_field">
 <input type="text" name="book_name" required>
 <span></span>
 <label>Book Name</label>
 </div>
 <div class="txt_field">
 <input type="text" name="author_name" required>
 <span></span>
 <label>Author Name</label>
 </div>
 <div class="txt_field">
 <input type="text" name="price" required>
 <span></span>
 <label>price</label>
 </div>
 <div class="txt_field">
 <input type="text" name="quantity" required>
 <span></span>
 <label>Quantity</label>
 </div>
 <div class="txt_field">
 <input type="text" name="dept" required>
 <span></span>
 <label>Department</label>
 </div>
 <div class="txt_field">
 <input type="text" name="sem" required>
 <span></span>
 <label>Semester</label>
 </div>
 <div class="form-group">
 <input type="file" name="image" class="form-control pb-2" required>
 </div>
 <input type="submit" value="submit" name="submit">
 </form>
        </div>  
    </body>
</html>

<?php
if(isset($_POST['submit']))
{
$book_name=$_POST['book_name'];
$author_name=$_POST['author_name'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$dept=$_POST['dept'];
$sem=$_POST['sem'];
$image = $_FILES['image']['name'];
$path = 'images/' . $image;
$sql="INSERT INTO `book` (`book_name`, `author_name`, `price`, `quantity`, `dept`, `sem`, `img`) VALUES ('$book_name', '$author_name', '$price', '$quantity', '$dept','$sem','$path')";
$res=mysqli_query($conn,$sql);
if($res)
{
 move_uploaded_file($_FILES['image']['tmp_name'], $path);
 $_SESSION['status']="Records Added Successfully";
 header('Location:book_insert.php');
}
else
{
 $_SESSION['status']="Records Not Added ";
 header('Location:book_insert.php'); 
}
}
