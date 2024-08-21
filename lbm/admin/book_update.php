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
 
 <title>Document</title>
</head>
<body>
<form action="../book_code.php" method='POST'> 
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