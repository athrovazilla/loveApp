<!DOCTYPE html>
    <html>
        <head>
            <title>Love App | Sign UP</title>
            <?php include 'database.php'; ?>
        </head>
            <body>
                <h1>Welcome to Love App</h1>
                <div id="main">
                    <form>
                        First Name:<br>
                        <input type="text" name="firstName"><br>
                        Last Name:<br>
                        <input type="text" name="lastName"><br>
                        Email :<br>
                        <input type="text" name="email"><br>
                        Password:<br>
                        <input type="password" name="password">
                        Retype Password:<br>
                        <input type="password" name="rePassword">
                        <button type="button">Sign Up</button>
                    </form>
                </div>
                <!--<div id="sign up">
                    <p>Not a member <a href="#">sign-up</a></p>
                    <p>Forgot a Password <a href="#">reset</a></p>
                </div> -->
                <div id="author"></div>
            </body>
<script>
body.onload = document.getElementById("author").innerHTML="<p>created by Selby</p>";
    </script>
    </html>