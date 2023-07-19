<html>
    <head>
        <title>suggest</title>
        <link rel="stylesheet" href="suggest.css">
    </head>
    <a href="main.php" class=" previos round">&#8249;</a>
    <a href="#" class=" next round"> &#8250;</a>
    <body>
        <div id="preloader"></div>
        <br><br>
        <div class="suggest">
            <h1 style="text-align: center;">Be the first to Define it!</h1><hr style="border: 1px dotted lightgray">
            <p> all the cures on BLOOM SKIN were shown by the specialist. Now it's chance to add your idea of cure in the site bloom skin. If our specialist will finalize it. Then it will be added to the site of Bloom Skin.

            </p>
            <form action="suggest1.php" method="post">
            <div class="container">
                <div class="first">
                    <span>Step 1. </span>
                    <button class="button" ONCLICK="promptFunction()" >
                        Define Source </button><br>
 
                </div>
                <div class="second">
                    <span>Step 2. </span>
                    <button class="button" ONCLICK="promptFunction1()" > Add Details</button><br>
                    
                
              
                </div> 
            </div><br><br><br>
            <div class="msg">
            <input type="text" id="textstring" placeholder= "Write youtube / article link here: "  name="n1" value=""><br><br><br>
            <input type="text" id="textstring1" placeholder= "Write Cure Related Details Here: " name="n2" value=""><br><br><br> 
                    <div class="submit">
                    <a href="bloom.php"> <button class="button"  >SUBMIT</button></a>
                
            </div>
        </div>
        <script>
            var loader=document.getElementById("preloader");
            window.addEventListener("load", function(){
                loader.style.display="none";
            })
        </script>
        </form>
        
    </body>
</html>