<?php include('functions.php');
if (isLoggedIn()) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./css/styles.css" rel="stylesheet">
    <script src="./js/script.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container Registration">
        <div class="card" style="padding: 40px; z-index: 3;">
            <h3 class="title" style="text-align: center;">User Registration</h3>
            <center>
                <form onsubmit="return submitForm();" method="POST" action="Registration.php" enctype="multipart/form-data">
                    <h6 style="font-family: Poppins;">Choose your Profile Picture</h6><br />
                    <div class="file-upload">
                        <img id="profile_img" name="profile" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" style="cursor:pointer" height="180" width="180" />
                        <input type="file" name="image" onchange="handleProfile(this)" required accept="image/png, image/jpeg" />
                    </div>
                    <br /><br />
                    <div class="row">
                        <div class="col-sm-3 offset-sm-3">
                            <input type="text" class="form-control" style="font-size: 18px; font-family:'Poppins';" name="firstname" id="firstName" placeholder="First Name" required>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" style="font-size: 18px; font-family:'Poppins';" name="lastname" id="lastName" placeholder="Last Name" required>
                        </div>
                    </div><br />
                    <div class="mb-3 col-sm-4">
                        <input type="email" class="form-control" style="font-size: 18px; font-family:'Poppins';" name="email" id="email" placeholder="Email address" required>
                    </div>
                    <div class="mb-3 col-sm-4">
                        <input type="text" class="form-control" style="font-size: 18px; font-family:'Poppins';" name="mobile" id="mobile" placeholder="Mobile Number" maxlength="13" required>
                    </div>
                    <div class="col-sm-4">
                        <select class="form-select" style="font-size: 18px; font-family:'Poppins';" aria-label="Default select example" id="gender" name="gender" required>
                            <option value="">Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div><br />
                    <div class="mb-3 col-sm-4">
                        <input type="password" style="font-size: 18px; font-family:'Poppins';" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div><br />
                    <div id="errors" name="errors">
                    
                    </div><br />
                    <input type="submit" class="btn btn-primary" name="register_btn" style="padding: 10px 50px; border-radius: 25px; margin-bottom:0px; font-family:Poppins"><br />
                    <br /><span style="font-family: Poppins;">Already have an account?</span>&nbsp;<a href="./login.php">Login here</a>
                </form>
            </center>
        </div>
    </div>
</body>

</html>