<?php
require("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in</title>

    <!-- linking custom css file -->
    <link rel="stylesheet" type="text/css" href="signinnewstyle.css">

    <!-- bootstrap icon cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- font awesome cdn -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- linking custom js file -->
    <script src="signinnew.js"></script>

</head>
<body>
    <div class="form-box">
        <h1>Login Here</h1>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="input-box box">
            <i class="bi bi-envelope icon"></i>
            <input type="email" placeholder="Email ID" name="AdminName" required/>
        </div>
        <div class="input-box box   ">
            <i class="bi bi-file-lock icon"></i>
            <input type="password" placeholder="Password" name="AdminPassword" required id="myInput"/>
            <span class="eye" onclick="hidePassword()">
                <i id="hide1" class="bi bi-eye"></i>
                <i id="hide2" class="bi bi-eye-slash"></i>
            </span>
        </div>
        <button type="submit" class="btn btn-primary login-btn" name="Signin" value="Signin">LOGIN</button>
        </form>
    </div>

<?php



if(isset($_POST['Signin']))
{
    echo "<script>alert('data saved succesfully');</script>";
    echo "clicked";
}

?>
</body>
</html>

