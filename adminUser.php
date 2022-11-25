<?php
    session_start();
    include_once 'db.php';
    if($_SESSION['uname'] != null){
        // $query = "select * from user where id = '".$_SESSION['id']."'";
        $query = "select * from user";
        $res = mysqli_query($conn,$query);
        
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1>Welcome...</h1>



    <a href="logout.php"><button>Logout</button></a>

    <div class="container">
        <table class="table table-border table-hover">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Password</th>
                <th colspan=2>Manage</th>
            </tr>
            <?php
                if(mysqli_num_rows($res)>0){
                    while($data = mysqli_fetch_array($res)){
            
            ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['Name']; ?></td>
                <td><?php echo $data['Email']; ?></td>
                <td><?php echo $data['Mobile']; ?></td>
                <td><?php echo $data['Password']; ?></td>
                <td><i class="fa fa-pencil" style="font-size:24px;color:green"></i></td>
                <td><i class="fa fa-trash" style="font-size:24px;color:red"></i></td>

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