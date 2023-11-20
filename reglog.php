<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login & Registration Form</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="reglog.css">
</head>

<body>
    <div class="container">
        <input type="checkbox" id="check">
        <div class="login form">
            <header>Login</header>
            <form action="#" method="post">
                <input type="text" placeholder="Enter your Username">
                <input type="password" placeholder="Enter your password">
                <a href="#">Forgot password?</a>
                <input type="button" class="button" value="Login">
            </form>
            <div class="signup">
                <span class="signup">Don't have an account?
                    <label for="check">Signup</label>
                </span>
            </div>
        </div>
        <div class="registration form">
            <header>Signup</header>
            <div class="alert alert-danger" role="alert">
                <?php if(isset($_GET['error'])){ ?> </div>
            <form action="signup.php" method="post">
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?> </div>
                <?php } ?>
                <input type="text" placeholder="Enter your full name" class="form-control" name="fname"
                    value="<?php echo(isset($_GET['fname']))?$_GET['fname']: "" ?>">
                <input type=" text" placeholder="Create a Username" class="form-control" name="uname"
                    value="<?php echo(isset($_GET['uname']))?$_GET['uname']: "" ?>">
                <input type="password" placeholder="create your password" class="form-control" name="pass">
                <input type="submit" class="button" value="Signup">
            </form>
            <div class="signup">
                <span class="signup">Already have an account?
                    <label for="check">Login</label>
                </span>
            </div>
        </div>
    </div>
</body>

</html>