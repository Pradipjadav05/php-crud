<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Forgate Password</title>
</head>

<body>
    <div class="display-4 text-center my-5" style="font-size:35px"><u>Forgote Password</u></div>
    <div class="row justify-content-center align-items-center">
        <div class="rounded shadow w-25 p-5">
            <form method="POST">
                <div class="form-group">
                    <label class="form-label">Username:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="form-label">New Password:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group text-center">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </form>
            <a href="index.php" class="text-danger">Cancel</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>
<?php
    if(isset($_POST['submit'])){
        include_once 'db.php';
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "update user set Password = '$password' where Email = '$email'";
        // echo $sql;
        $res = mysqli_query($conn, $sql);
        if($res>0){
            header('Location:index.php?error=Password updated successfully.');
        }
        else{
            echo "<script>alert(".mysqli_error().")</script>";
            exit();
        }
    }
?>