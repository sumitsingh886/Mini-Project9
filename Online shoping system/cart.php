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
                <th><a href="cart.php" style="text-decoration:none;"><font color="black">Cart</font></a></th>
            </tr>
        </table>
    </div>
    <div class="container">
        <table class="table table-bordered table-striped">
            <tbody>
            <tr>
                <th>Item Number</th><th>Item Name</th><th>Price</th><th></th>
            </tr>
            <?php
            $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
            $no_of_user_products= mysqli_num_rows($user_products_result);
            $counter=1;
            while($row=mysqli_fetch_array($user_products_result)){

            ?>
            <tr>
                <th><?php echo $counter ?></th><th><?php echo $row['name']?></th><th><?php echo $row['price']?></th>
                <th><a href='cart_remove.php?id=<?php echo $row['id'] ?>'>Remove</a></th>
            </tr>
            <tr>
                <th></th><th>Total</th><th>Rs <?php echo $sum;?>/-</th><th><a href="success.php?id=<?php echo $user_id?>" class="btn btn-primary">Confirm Order</a></th>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
