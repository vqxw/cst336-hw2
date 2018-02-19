<?php

include './inc/functions.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Puppy Connect 4 </title>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        
    <div id = "welcomeText">
        In order to win, there must be four pictures of a puppy in a row. </br>
        Good luck! </br></br>
    </div>
        
    <main>
        <?php
            play();
        ?>
    </main>
    
    <form id = "button">
        <input type = "submit" value = "More Puppies!"/>
    </form>
    
    
    <footer>
        CST 336. 2018&copy; Zempoalteca
    </footer>
        
    </body>
</html>