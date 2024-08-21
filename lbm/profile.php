<?php
include('connect.php');
$email = $_SESSION['email'];
$sql = "SELECT * FROM user WHERE email='$email'";
$res = mysqli_query($conn, $sql);
if ($res) {
    $row = mysqli_fetch_assoc($res);
    $id = $row['id'];
    $email = $row['email'];
    $name = $row['name'];
    $batch = $row['batch'];
    $password = $row['password'];
    $dob = $row['dob'];
    $age = $row['age'];
    $img = $row['img'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="stylesheet" href="css/profile.css">
    <style>
        .upload {
            width: 140px;
            position: relative;
            margin: auto;
            text-align: center;
        }
        .upload img {
            border-radius: 50%;
            border: 8px solid black;
            width: 125px;
            height: 125px;
        }
        .upload .rightRound {
            position: absolute;
            bottom: 0;
            width: 32px;
            height: 32px;
            line-height: 33px;
            text-align: center;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
        }
        .upload .rightRound {
            right: 0;
            background-color: green;
        }
        
        .upload .fa {
            color: white;
        }
        .upload input {
            position: absolute;
            transform: scale(2);
            opacity: 0;
        }
    </style>
</head>
<body>
    <div class="profile_container">
        <!-- This form handles the image upload -->
        <form action="" method="POST" enctype="multipart/form-data" id="imageUploadForm">
            <div class="upload">
                <img src="<?php echo $img; ?>" id="image">
                <div class="rightRound" id="upload">
                    <input type="file" name="fimage" id="fimage" accept=".jpg, .jpeg, .png">
                    <i class="fa fa-camera"></i>
                </div>
            </div>
        </form>

        <!-- This form handles the rest of the profile updates -->
        <form action="" method='POST'> 
            <label><u>ID</u></label><input type="text" name='id' value=<?php echo $id; ?> readonly> <hr>
            <label><u>EMAIL</u></label><input type="text" name='email' value=<?php echo $email; ?>> <hr>
            <label><u>NAME</u></label><input type="text" name='name' value=<?php echo $name; ?> > <hr>
            <label><u>BATCH</u></label><input type="text" name='batch' value=<?php echo $batch; ?> readonly> <hr>
            <label><u>PASSWORD</u></label><input type="text" name='password' value=<?php echo $password; ?>> <hr>
            <label><u>DOB</u></label><input type="text" name='dob' value=<?php echo $dob; ?>> <hr>
            <label><u>AGE</u></label><input type="text" name='age' value=<?php echo $age; ?>> <hr>
            <input type="submit" value="Save" class="update" name="profile_edit_btn">
        </form>
        <a href="user_home.php"><input type="button" value="Back" class="back"></a>
    </div>

    <script type="text/javascript">
        document.getElementById("fimage").onchange = function() {
            document.getElementById("image").src = URL.createObjectURL(fimage.files[0]); // Preview new image
            
            // Automatically submit the form to upload the image
            document.getElementById("imageUploadForm").submit();
            
        }
    </script>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle image upload if the file input is triggered
    if (isset($_FILES['fimage']['name']) && $_FILES['fimage']['name'] != "") {
        $image = $_FILES['fimage']['name'];
        $path = 'images/' . $image;
        move_uploaded_file($_FILES['fimage']['tmp_name'], $path);
        $imgUpdateQuery = "UPDATE user SET img='$path' WHERE id='$id'";
        mysqli_query($conn, $imgUpdateQuery);
    }

    // Handle profile updates
    if (isset($_POST['profile_edit_btn'])) {
        $id = $_POST['id'];
        $email = $_POST['email'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $dob = $_POST['dob'];
        $age = $_POST['age'];

        $updateQuery = "UPDATE user SET email='$email', name='$name', password='$password', dob='$dob', age='$age' WHERE id='$id'";
        $res = mysqli_query($conn, $updateQuery);

        if ($res) {
            $_SESSION['status'] = "Modification successful";
        } else {
            $_SESSION['status'] = "Modification not successful";
        }
        header('Location: profile.php');
    }
}
?>
