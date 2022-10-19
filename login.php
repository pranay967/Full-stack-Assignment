<?php include('functions.php');
if (isLoggedIn()) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link href="./css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container login" style="margin-top: 100px;">
        <div class="card" style="padding: 40px;">
            <h3 class="title" style="text-align: center; font-family: Montserrat; font-weight:600">ADMIN LOGIN</h3><br />
            <center>
                <form method="post" action="login.php">
                    <div class="mb-3 col-sm-4">
                        <input type="text" style="padding: 25px; margin-bottom:25px; font-size: 18px; font-family:'Poppins';" name="username" class="form-control" placeholder="username" required>
                    </div>
                    <div class="mb-3 col-sm-4">
                        <input type="password" style="padding: 25px; font-size: 18px; font-family:'Poppins';" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Password" required>
                    </div><br />
                    <input class="btn btn-success" type="submit" name="login_btn" style="width:100px; padding-top:8px; padding-bottom:30px" value="Login" /><br /><br />
                    <?php
                    if (isset($_SESSION['error'])) {
                        echo "<div class='alert alert-danger'>" . $_SESSION['error'] . "</div>";
                        unset($_SESSION['error']);
                    }
                    ?>
                </form>
            </center>
        </div>
    </div>
</body>

</html>