<!DOCTYPE html>
    <html>
        <head>
            <title>Love App</title>
            <?php include 'database.php'; ?>
        </head>
            <body>
                <h1>Welcome to Love App</h1>
                <div id="main">
                    <form action ="login.php" method ="post">
                        UserName:<br>
                        <input type="text" name ="username"><br>
                        Password:<br>
                        <input type = "password" name ="password">
                        <input type="submit" value="Login">
                    </form>
                </div>
                <div id="sign up">
                    <p>Not a member <a href = "signup.php">sign-up</a></p>
                    <p>Forgot a Password <a href = "#">reset</a></p>
                </div>
                <div id="author"></div>
            </body>
<script>
body.onload = document.getElementById("author").innerHTML="<p>created by Selby</p>";
    </script>
    </html>