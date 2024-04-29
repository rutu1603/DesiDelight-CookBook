


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
    body {
        padding:50px;
        
        background-image: url('https://as2.ftcdn.net/v2/jpg/07/35/24/09/1000_F_735240974_Z3GTMpnIXlVmwbMYMmEZRa2VRQB1PB1k.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    .container {
        max-width: 600px;
        margin:0 auto;
        padding:50px;
        background-color:white;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
    .form-group {
        margin-bottom:30px;
    }
    </style>
</head>
<body>
    <div class="container">
    <?php
    if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email =  $_POST['email'];
    $password =  $_POST['password'];
    $errors=array();
        if(empty($name)OR empty($email)OR empty($password)){
            array_push($errors,"All fields are required");
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
        if(strlen($password)<3){
            array_push($errors,"Password must be at least 3 characters long");
        }
        require_once "includes/connection.php";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        if ($rowCount>0) {
         array_push($errors,"Email already exists!");
        }
        if (count($errors)>0) {
         foreach ($errors as  $error) {
             echo "<div class='alert alert-danger'>$error</div>";
         }
        }

        $sql = "INSERT INTO users ( name, email, password) VALUES ( ?, ?, ? )";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
        if ($prepareStmt) {
        mysqli_stmt_bind_param($stmt,"sss",$name, $email, $password);
        mysqli_stmt_execute($stmt);
        echo "<div class='alert alert-success'>You are registered successfully.</div>";
        }
        else{
                die("Something went wrong");
        }
    }

?>

        <form action="sign_up.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>
        <div><p>Already Registered <a href="login.php">Login Here</a></p></div>
    </div>
</body>
</html>
