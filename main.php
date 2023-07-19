<html>
    <head>
        <title>SKIN PROBLEMS</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <a href="login.php" class=" previos round">&#8249;</a>
    <a href="" class=" next round"> &#8250;</a>
    <body>
        <div id="preloader"></div>
       <br>
            <h1 >YOUR SKIN PROBLEMS</h1> 
            <hr>
            <div class="container">
            <div class="first"> 
            <h2>Articles</h2>
            <button class="button"><a href="darkcircle.php"> Dark Circles</button></a><br><br>
            <button class="button"> <a href="tanning.php"> Tanning</button></a><br><br>
            <button class="button"><a href="acne.php"> Acne Scar</button></a><br><br>
            <button class="button"><a href="dry.php"> Dry Skin</button></a><br><br>
            <button class="button"><a href="oily.php"> Oily skin</button></a><br><br>
            <button class="button"><a href="pig.php"> Pigmentation</button></a><br><br>
            <button class="button"><a href="blem.php"> Blemishes</button></a><br><br>
            <button class="button"><a href="pores.php"> Enlarged Pores</button></a><br><br>
            <button class="button"><a href="tone.php"> Uneven Skin Tone</button></a><br><br>
            <button class="button"><a href="wrinkles.php"> Wrinkles</button></a><br><br>
           
            <button class="button" ONCLICK="confirmFunction()"> Anything Else</button><br><br>
            
        </div>
        <div class="second"> 
            <h2>Videos</h2>
            <button class="button"><a href="https://youtu.be/UQ_VmXDv7wA"> Dark Circles</button></a><br><br>
            <button class="button"><a href="https://youtu.be/JIulEddaewM">Tanning</button></a><br><br>
            <button class="button"><a href="https://youtu.be/NevvB-90wjs"> Acne Scar</button></a><br><br>
            <button class="button"><a href="https://youtu.be/IWubQHg3c6k"> Dry Skin</button></a><br><br>
            <button class="button"><a href="https://youtu.be/0Y7H-GMJ3Dg">Oily skin</button></a><br><br>
            <button class="button"><a href="https://youtu.be/6CLva-NBESA"> Pigmentation</button></a><br><br>
            <button class="button"><a href="https://youtu.be/4DI8u8EqPCE"> Blemishes</button></a><br><br>
            <button class="button"><a href="https://youtu.be/ZuwQK5DlkQM"> Enlarged Pores</button></a><br><br>
            <button class="button"><a href="https://youtu.be/MyYx5LDDAl8"> Uneven Skin Tone</button></a><br><br>
            <button class="button"><a href="https://youtu.be/wAs1oWmbZ0M"> Wrinkles</button></a><br><br>
            <button class="button" ONCLICK="confirmFunction()"> Anything Else</button><br>
            
        </div>
        <SCRIPT> function confirmFunction() {     if (confirm("Do you think we missed out something? Help Us! by providing some Details ") == true) {         window.location.assign("suggest.php")     } else {       alert("Sorry! We'll try to improve as soon as possible. Thanks for Visiting.");     } } </SCRIPT>
        </div>
        <script>
            var loader=document.getElementById("preloader");
            window.addEventListener("load", function(){
                loader.style.display="none";
            })
        </script>
    
    </body>
</html>