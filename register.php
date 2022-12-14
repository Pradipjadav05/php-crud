<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/js/bootstrap.min.js">
    <link rel="stylesheet" href="assets/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Register Page</title>
</head>

<body>
    <div class="container-fluid py-2 h-100">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6">
                <form id="myForm" action="register_pro.php" method="post" role="form" enctype="multipart/form-data">
                    <div class="text-center">
                        <h2 class="fw-bold mb-2 text-uppercase">Sign Up</h2>
                        <p class="text">Please enter your details</p>
                        <?php 
                           if(isset($_GET['error'])){
                            echo "<p style='color:red' id='error'><b>".$_GET['error']."</b></p>";
                        }
                        ?>
                    </div>
                    <div class="p-3 form-group">
                        <div class=" mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" class="form-control form-control-lg" id="name" name="name"
                                placeholder="Enter your Name" />
                        </div>
                        <div class=" mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" class="form-control form-control-lg" id="email" name="email"
                                placeholder="Enter your Email" />

                        </div>
                        <div class=" mb-3">
                            <label class="form-label" for="mobile">Mobile</label>
                            <input type="text" class="form-control form-control-lg" id="mobile" name="mobile"
                                placeholder="Enter your Mobile Number" />

                        </div>
                        <div class=" mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" class="form-control form-control-lg" id="password" name="password"
                                placeholder="Enter Password" />

                        </div>
                        <div class=" mb-3">
                            <label class="form-label" for="cpassword">Confirm Password</label>
                            <input type="password" class="form-control form-control-lg" id="cpassword" name="cpassword"
                                placeholder="Enter Confirm Password" />

                        </div>
                        <div class="mb-3">
                            <label for="profilePhoto" class="form-label">Profile Photo</label>
                            <input class="form-control-lg" type="file" id="profilePhoto" name="profilePhoto">

                        </div>
                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form1Example3"
                                    name="tearms" checked />
                                <label class="form-check-label" for="form1Example3"> I agree all
                                    statements in <a href="#!">Terms of service</a></label><br>
                                <label for="tearms" class="error"></label>

                            </div>
                        </div>
                        <button type="submit" name="register" class="btn btn-primary btn-block mb-4">Register</button>
                        <p class="mt-2 pt-1 mb-0">Do you have an account?
                            <a href="index.php" class="link-danger">Login</a>
                        </p>
                        <div class="d-flex justify-content-center text-center mt-4 pt-1">
                            <a href="#!"><i class="fa fa-facebook-f"></i></a>
                            <a href="#!"><i class="fa fa-twitter fa-lg mx-4 px-2"></i></a>
                            <a href="#!"><i class="fa fa-google fa-lg"></i></a>
                            <a href="#!"><i class="fa fa-github fa-lg mx-4"></i></a>
                        </div>
                </form>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <img src="images/login.png" class="img-fluid">
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
    jQuery("#myForm").validate({
        rules: {
            "name": "required",
            "email": {
                "required": true,
                "email": true
            },
            "mobile": "required",
            "password": {
                "required": true,
                "minlength": 6,
            },
            "cpassword": {
                "required": true,
                "minlength": 6,
            },
            "profilePhoto": "required",
            "tearms": "required"
        },
        messages: {
            "name": "Please enter Username",
            "email": {
                "required": "Please enter Email Id.",
                "email": "Please enter Valied Email Id."
            },
            "mobile": "Please enter mobile number.",
            "password": {
                "required": "Please enter Password.",
                "minlength": "Password must be 6 characters."
            },
            "cpassword": {
                "required": "Please enter Confirm Password.",
                "minlength": "Password must be 6 characters."
            },
            "profilePhoto": "Please select Profile Photo.",
            "tearms": "Accept the Tearms and Condition."
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
    </script>
</body>

</html>