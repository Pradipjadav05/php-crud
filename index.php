<?php
    // if(isset($_COOKIE['nm'])){
    //     // include 'db.php';
    //     // $sql = "select * from user where Email = '".$_COOKIE['nm']."' and Password = '".$_COOKIE['pss']."'";
    //     // $res = mysqli_query($conn,$sql);
    //     // if(mysqli_num_rows($res)>0){
    //     //     $data = mysqli_fetch_array($res);
    //     //     $_SESSION['id'] = $data['id'];
    //     //     $_SESSION['uname'] = $data['Name'];
    //     //     $_SESSION['email'] = $data['Email'];
    //     //     $_SESSION['mobile'] = $data['Mobile'];
    //     // }
    //     // header('Location:home.php');
    // }
    // else{
        
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/js/bootstrap.min.js">
    <link rel="stylesheet" href="assets/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login Page</title>
</head>

<body>
    <div class="container-fluid py-5 h-100 mt-4">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6 col-sm-12">
                <img src="images/login.png" class="img-fluid">
            </div>
            <div class="col col-md-6">
                <form action="auth.php" method="post">
                    <div class="text-center">
                        <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                        <p class="text">Please enter your login and password!</p>
                        <?php 
                            if(isset($_GET['error'])){
                                echo "<p style='color:red'><b>".$_GET['error']."</b></p>";
                            }
                        ?>
                    </div>
                    <div class="p-3 form-group"">
                        <div class=" mb-4">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control form-control-lg" name="uname"
                            placeholder="Enter your Email"
                            value="<?php echo isset($_COOKIE['nm'])? $_COOKIE['nm']:""; ?>" />
                    </div>

                    <div class=" mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control form-control-lg" name="password"
                            placeholder="Enter Password"
                            value="<?php echo isset($_COOKIE['pss'])? $_COOKIE['pss']:""; ?>" />
                    </div>
                    <div class="d-flex justify-content-around align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="true" name="remember"
                                id="chkRemember" checked />
                            <label class="form-check-label" for="chkRemember"> Remember me </label>
                        </div>
                        <a href="#!">Forgot password?</a>
                    </div>
                    <button class="btn btn-primary btn-block mb-4" type="submit" name="submit">Login</button>
                    <p class="mt-2 pt-1 mb-0">Don't have an account?
                        <a href="register.php" class="link-danger">Register</a>
                    </p>
                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                        <a href="#!"><i class="fa fa-facebook-f"></i></a>
                        <a href="#!"><i class="fa fa-twitter fa-lg mx-4 px-2"></i></a>
                        <a href="#!"><i class="fa fa-google fa-lg"></i></a>
                        <a href="#!"><i class="fa fa-github fa-lg mx-4"></i></a>
                    </div>

            </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>
<?php
// }
?>