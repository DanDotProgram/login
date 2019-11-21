<!DOCTYPE html>
<html>
    <head>
        <title>login stuff</title>

        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <h1>Login Page:</h1>   
        <div>
            <form action="includes/login.php" method="POST">
                <input type="text" name="mailuid" placeholder="Email">
                <input type="text" name="password" placeholder="Password">
                <button type="submit" name="login">Login</button>
            </form> 

            <a href="signup.php">Sign Up</a>

            <form action="includes/logout.php" method="POST">
                <button type="submit" name="logout">Login</button>
            </form> 
        </div>
    </body>
</html>