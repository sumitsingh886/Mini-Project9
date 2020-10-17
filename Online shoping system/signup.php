<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Shop</title>
    <link rel="stylesheet" href="style/style.css">
    <link href='https://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet'>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
</head>
<body>
<div class="main_wrapper">
    <div class="header">
        <table border="0" width="100%" bgcolor="#ffb6c1">
            <tr>
                <td align="right"><h4 style="font-family:'Arizonia',serif;font-size:30px; margin:0;" ;>Online Shop</h4></td>
                <td><label>
                        <input type="text" placeholder="Search for products, brand and more" name="user_query" style="width:550px; height:35px;">
                    </label>
                    <input type="button" name="search" value="Search" style="width:60px;height:35px;"></td>
                <th><a href="login.php" style="text-decoration:none;"><font color="black">Login</font></a></th>
                <th><a href="signup.php" style="text-decoration:none;"><font color="black">Sign up</font></a></th>
                <th><a href="#" style="text-decoration:none;"><font color="black">More</font></a></th>
                <th><a href="#" style="text-decoration:none;"><font color="black">Cart</font></a></th>
            </tr>
        </table>
    </div>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <h1><b>SIGN UP</b></h1>
                <form method="post" action="user_registration_script.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" name="contact" placeholder="Contact" required="true">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="city" placeholder="City" required="true">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
