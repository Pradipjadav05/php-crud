<?php
    session_start();
    include_once 'db.php';
    
    if($_SESSION['uname'] != null){
        
        
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1>Welcome...</h1>
    <?php
        echo 'Id : '.$_SESSION['id'].'<br>';
        echo 'Name : '.$_SESSION['uname'].'<br>';
        echo 'Email : '.$_SESSION['email'].'<br>';
        echo 'Mobile : '.$_SESSION['mobile'].'<br>';
    ?>

    <br>
    <br>
    <br>
    <h1>Cookies values:</h1>
    <label>Name : </label>
    <?php echo isset($_COOKIE['nm'])? $_COOKIE['nm']:""; ?>
    <br>

    <label>Password : </label>
    <?php echo isset($_COOKIE['pss'])? $_COOKIE['pss']:""; ?>
    <br>
    <br>
    <br>
    <a href="logout.php"><button>Logout</button></a>

    <div class="container">
        <table class="table table-border table-hover">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Password</th>
            </tr>
            <?php
                // $query = "select * from user where id = '".$_SESSION['id']."'";
                $query = "select * from user";
                $res = mysqli_query($conn,$query);
                if(mysqli_num_rows($res)>0){
                    while($data = mysqli_fetch_array($res)){
            
            ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['Name']; ?></td>
                <td><?php echo $data['Email']; ?></td>
                <td><?php echo $data['Mobile']; ?></td>
                <td><?php echo $data['Password']; ?></td>
            </tr>
            <?php
                
                }
            }
            ?>
        </table>
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
    }
    else{
        header("Location:index.php");
        exit();
    }

?>