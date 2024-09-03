<?php
include('connect.php');
$email=$_SESSION['email'];
$sql="select * from user where email='$email'";
$res=mysqli_query($conn,$sql);
if($res)
{
$row=mysqli_fetch_assoc($res);
$batch=$row['batch'];
}
?>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<!--fontawsome cdn-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .download-btn{
    background-color: DodgerBlue;
    color: white;
    padding: 6px 20px;
    font-size: 14px;
    text-decoration: none;
    border-radius:10px;
}

.download-btn:hover {
    background-color: white;
    color:DodgerBlue;
    border:1px solid DodgerBlue;
  }
    </style>
<title>Document</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card mt-4">
<div class="card-header">
<h4>Input Semester </h4>
</div>
<div class="card-body">
<div class="row">
<div class="col-md-7">
<form action="" method="GET">
<div class="input-group mb-3">
<input type="text" name="search" required value="<?php if(isset($_GET['search']))
{echo 
$_GET['search']; } ?>" class="form-control" placeholder="Search data">
<button type="submit" class="btn btn-primary">Search</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-12">
<div class="card mt-4">
<div class="card-body">
<table class="table table-bordered">
<thead>
<tr>
<th>book_name</th>
<th>author_name</th>
</tr>
</thead>
<tbody>
<?php 
$con = mysqli_connect("localhost","root","","lbm");
if(isset($_GET['search']))
{
$filtervalues = $_GET['search'];
$query = "SELECT * FROM book WHERE sem LIKE '$filtervalues' and dept='$batch'";
$query_run = mysqli_query($con, $query);
if(mysqli_num_rows($query_run) > 0)
{
foreach($query_run as $items)
{
?>
<tr>
<td><?= $items['book_name']; ?></td>
<td><?= $items['author_name']; ?></td>
<td><a href="images/book.pdf" download='video' class="download-btn">Download<i class="fa fa-download"></i></a></td>
</tr>
<?php
}
}
else
{
?>
<tr>
<td colspan="4">No Record Found</td>
</tr>
<?php
}
}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
<a href="user_home.php"><button>Back</button></a>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-
beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
