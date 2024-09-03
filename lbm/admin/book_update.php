<?php
include('../connect.php');
$book_id=$_POST['book_id'];
$sql="select * from book where book_id='$book_id'";
$res=mysqli_query($conn,$sql);
if($res)
{
 $row=mysqli_fetch_assoc($res);
$book_id=$row['book_id'];
$book_name=$row['book_name'];
$author_name=$row['author_name'];
$price=$row['price'];
$quantity=$row['quantity'];
$dept=$row['dept'];
$sem=$row['sem'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
}

table {
  margin: 30px auto;
  padding: 20px;
  border-collapse: collapse;
  width: 60%;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
}

table tr td {
  padding: 12px 15px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  font-size: 16px;
}

table tr td:first-child {
  font-weight: bold;
  color: #333;
}

input[type="text"] {
  width: 100%;
  padding: 8px 12px;
  margin: 4px 0;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
}

input[type="submit"] {
  background-color: #007bff;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  margin: 20px auto;
  display: block;
}

input[type="submit"]:hover {
  background-color: #0056b3;
}

form {
  max-width: 600px;
  margin: 40px auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

 </style>
 
 <title>Document</title>
</head>
<body>
<form action="book_code.php" method='POST'> 
<table>
<TR><td>book id</td><td><input type="text" name='book_id' value=<?php echo $book_id; ?> 
readonly></td></TR>
 <TR><td>book_name</td><td><input type="text" name='book_name' value=<?php echo 
$book_name; ?>></td></TR>
 <TR><td>author_name</td><td><input type="text" name='author_name' value=<?php echo 
$author_name; ?>></td></TR>
 <TR><td>price</td><td><input type="text" name='price' value=<?php echo $price; 
?>></td></TR>
 <TR><td>quantity</td><td><input type="text" name='quantity' value=<?php echo $quantity; 
?>></td></TR> 
 <TR><td>Dept</td><td><input type="text" name='dept' value=<?php echo $dept; ?>></td></TR> 
 <TR><td>Sem</td><td><input type="text" name='sem' value=<?php echo $sem; 
?>></td></TR> 
</table>
<input type="submit" value="Update" class="btn btn-info" name="book_edit_btn">
</form>
</body>
</html>