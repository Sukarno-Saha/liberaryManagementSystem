<?php
include('connect.php');
$email = $_SESSION['email'];
$sql = "SELECT * FROM user WHERE email='$email'";
$res = mysqli_query($conn, $sql);
if ($res) {
    $row = mysqli_fetch_assoc($res);
    $id = $row['id'];
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
    <title>Document</title>

    <style>
        input{
            border: none;
        }
        button{
            border:none;
            padding:10px;
            margin:30px;
            
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Book Name</th>
                            <th>Issued Date</th>
                            <th>Return Date</th>
                            <th>Current Date</th>
                            <th>Fine</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $sql1 = "SELECT * FROM issued_book WHERE user_id='$id'";
                        $res1 = mysqli_query($conn, $sql1);
                        if (mysqli_num_rows($res1) > 0) {
                            foreach ($res1 as $index => $items) { ?>
                                <tr>
                                    <td><?= $items['user_id']; ?></td>
                                    <td><?= $items['book_name']; ?></td>
                                    <td><input type="text" id="dueDate-<?= $index; ?>" placeholder="YYYY-MM-DD" value="<?= $items['issued_date']; ?>" readonly></td>
                                    <td><input type="text" id="returnDate-<?= $index; ?>" placeholder="YYYY-MM-DD" value="<?= $items['return_date']; ?>" readonly></td>
                                    <td><input type="text" id="currentDate-<?= $index; ?>" readonly></td>
                                    <td><p id="result-<?= $index; ?>"></p></td>
                                </tr>
                                <script type="text/javascript">
                                    // Function to calculate the fine
                                    function calculateFine(index) {
                                        // Get the values from the input fields
                                        const returnDate = document.getElementById('returnDate-' + index).value;
                                        const currentDateElement = document.getElementById('currentDate-' + index);
                                        const dailyFine = 5;

                                        // Set current date
                                        const currentDate = new Date().toISOString().split('T')[0];
                                        currentDateElement.value = currentDate;


                                        // Check if all inputs are filled
                                        if (returnDate && currentDate && !isNaN(dailyFine)) {
                                            // Convert the dueDate, returnDate, and currentDate to Date objects
                                            const returned = new Date(returnDate);
                                            const current = new Date(currentDate);

                                            // Calculate the difference in time (in milliseconds)
                                            const timeDifference = current - returned;

                                            // Convert time difference to days
                                            const daysOverdue = Math.ceil(timeDifference / (1000 * 60 * 60 * 24));

                                            // Initialize fine
                                            let fine = 0;

                                            // If the book is overdue, calculate the fine
                                            if (daysOverdue > 0) {
                                                fine = daysOverdue * dailyFine;
                                            }

                                            // Display the result
                                            document.getElementById('result-' + index).innerText = `The fine is $${fine}`;
                                        } else {
                                            // Clear the result if any input is missing
                                            document.getElementById('result-' + index).innerText = '';
                                        }
                                    }

                                    // Automatically calculate fine and set current date when the page loads
                                    calculateFine('<?= $index; ?>');
                                </script>
                            <?php
                            }
                        } else {
                        ?>
                        <tr>
                            <td colspan="6">No Record Found</td>
                        </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
                <center><a href="user_home.php"><button>Back</button></a></center>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0 beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
