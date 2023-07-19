<html>
    <head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title>CONTACT US</title>
    </head>
   
    <body>
        <div id="preloader"></div>
    <div class="rose">
        <a href="bloom.php" class=" previos round">&#8249;</a>
    <a href="" class=" next round"> &#8250;</a>
    <nav>
        <img src="lotus.gif" class="blogo">
        <ul>
        <li><a href="bloom.php">HOME</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                    <li><a href="signup.php">SIGN UP</a></li>
                   <li><a href ="#">CONTACT US!</a></li>
                   
        </ul>

    <div class="hero">
        <h1 style="text-align: center;">Contact Us!</h1><hr style="border: 1px dotted lightgray"> <br><br>
        <form action="contact1.php" method="post">
            <div class="row">
                <div class="input-group">
                <input type="name" id="name" required name="n1" value="">
                <label for="name">  Your Name</label> 

                </div>
                <div class="input-group">
                    <input type="number" id="number" required name="n2" value="">
                    <label for="number">Phone No.</label>
                
                </div>
            </div>
            <div class="input-group">
               
            <div class="input-group">
                <input type="email" id="email" required name="n3" value="">
            <label for="email">Email Id</label>
            </div>
            <div class="input-group">
                <textarea  id="message"  rows="10"required name="n4" value=""></textarea>
            <label for="message">Your Message</label>
            </div>
            <button type="submit">SUBMIT</button>
        </form>
    </div>
</nav>
</div>
<script>
    var loader=document.getElementById("preloader");
    window.addEventListener("load", function(){
        loader.style.display="none";
    })
</script>

</body>
</html>