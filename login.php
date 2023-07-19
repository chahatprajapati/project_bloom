<html>
    <head>
        <title>Login Here</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <script>
        var input= document.getElementById("input-box2");
        input.addEventListener("keyup",function(event)
        {
            if(event.keyCode===13)
            {
                event.preventDefault();
                document.getElementById("login-btn").click();
            }
        });
    </script>
    <a href="bloom.php" class=" previos round">&#8249;</a>
    <a href="#" class=" next round"> &#8250;</a>
    <body>
        <div class="rose">
            <nav>
                <img src="lotus.gif" class="blogo">
                <ul>
                    <li><a href="bloom.php">HOME</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                    <li><a href="signup.php">SIGN UP</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                </ul>
            </nav>
        </div>
                <div class="login-here">
            <img src="up1.png">
            <h1>Login Here</h1>
            <form action="login1.php" method="post">

                <input type="text" class="input-box" placeholder="Username" name="n1" value="">
                <input type="password" class="input-box" placeholder="Password" name="n2" value="">
                <p><span><input type="checkbox"></span> I want to continue to the BLOOM SKIN</p>
                <button type="submit" class="login-btn" onclick="window.location.href='bloom.php'"> Login</button></a>
                <hr>
                <p class="or">OR</p>
                <button type="button" class="insta-btn"> <a href="https://mail.google.com">Continue with Goggle</button></a>
                <p>Do you have an account?<a href="signup.php" ><font color="blue">Sign in</font></a></p>
            </form>
        </div>
           
    </body>
</html>