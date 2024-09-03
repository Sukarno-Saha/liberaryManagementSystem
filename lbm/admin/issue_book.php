<?php
include('../connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue Book</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .tab {
            float: left;
            width: 25%;
            height: 100vh;
            background-color: rgb(25, 25, 124);
            padding-top: 30px;
            position: fixed;
        }

        .tab h1 {
            color: #fff;
            text-align: center;
            margin-bottom: 20px;
        }

        .tab a {
            display: block;
            color: white;
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            text-align: left;
            transition: 0.3s;
        }

        .tab a:hover {
            background-color: rgb(70, 70, 233);
            border-radius: 5px;
        }

        .tab a.active {
            background-color: white;
            color: black;
            border-radius: 5px 0 0 5px;
        }

        .tabcontent {
            margin-left: 25%;
            padding: 20px;
        }

        .form-control, input[type="submit"] {
            width: 50%;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: rgb(25, 25, 124);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: rgb(70, 70, 233);
        }

        .txt_field label {
            margin-bottom: 5px;
            display: block;
            font-weight: bold;
        }

        .txt_field input, .txt_field select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }

        table, th, td {
            border: 1px solid darkblue;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
    
    <script>
        function funDelete() {
            return confirm("Are you sure you want to delete the record?");
        }
    </script>
</head>

<body>
    <div class="tab">
        <h1>DASHBOARD<hr></h1>
        <a href="user_master.php">User Table</a>
        <a href="book_master.php">Book Table</a>
        <a href="issued_book_master.php">Issued Book Table</a>
        <a href="book_insert.php">Book Insert</a>
        <a href="issue_book.php" class="active">Issue Book</a>
        <a href="request_book_master.php">Requested Book</a>
        <a href="../index.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
    </div>

    <div id="user" class="tabcontent">
        <h1>Issue Book</h1>
        <form action="" method="post">
            <div class="txt_field">
                <label>User ID</label>
                <input type="text" name="user_id" required>
            </div>
            <div class="txt_field">
                <label>Select Book</label>
                <select class="form-control" name="book_name">
                    <option value=""><-Select Book Name-></option>
                    <?php 
                    $sql = "SELECT `book_name` FROM `book`";
                    $res = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($res)){
                    ?>
                    <option><?php echo $row['book_name']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="txt_field">
                <label>Issued Date</label>
                <input type="date" name="issued_date" value="<?php echo date('Y-m-d'); ?>" required>
            </div>
            <div class="txt_field">
                <label>Return Date</label>
                <input type="date" name="return_date" value="<?php echo date('Y-m-d'); ?>" required>
            </div>
            <input type="submit" value="Issue Book" name="submit">
        </form>
    </div>  

<?php
if(isset($_POST['submit'])) {
    $user_id = $_POST['user_id'];
    $book_name = $_POST['book_name'];
    $issued_date = $_POST['issued_date'];
    $return_date = $_POST['return_date'];

    $sql = "INSERT INTO `issued_book` (`user_id`, `book_name`, `issued_date`, `return_date`) VALUES ('$user_id','$book_name','$issued_date','$return_date')";
    $res = mysqli_query($conn, $sql);

    if($res) {
        $_SESSION['status'] = "Records Added Successfully";
        header('Location:issue_book.php');
        
        $sql1 = "SELECT `quantity` FROM `book` WHERE `book_name`='$book_name'";
        $res1 = mysqli_query($conn, $sql1);
        $row = mysqli_fetch_assoc($res1);
        $quantity = $row['quantity'];

        if($quantity > 0) {
            $quantity--;
            $sql2 = "UPDATE `book` SET `quantity`='$quantity' WHERE `book_name`='$book_name'";
            $res2 = mysqli_query($conn, $sql2);
        }
        echo "<script>alert('Book Issued Successfully');</script>";
    } else {
        $_SESSION['status'] = "Records Not Added";
        header('Location:issue_book.php');
        echo "<script>alert('Failed to Issue Book');</script>";
    }
}
?>
</body>
</html>
