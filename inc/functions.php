<?php
    
    // $goldPuppy = array (
    //     'name' => 'Golden Retriever',
    //     'imgURL' => './images/gold_puppy.jpg'
    //     );
    // $wetPuppy = array (
    //     'name' => 'English Bulldog',
    //     'imgURL' => './images/wet_puppy.jpg'
    //     );
    
    
    // trying to display a random background image but not working
    function displayBackImage() {
        $backPics = array('./images/back1.jpg', './images/back2.jpg', './images/back3.jpg');
        
        foreach ($backPics as $backPic) {
            $randNum = rand(0,2);
            $val = $backPic[$randNum];
        }
        
        echo "<img src = 'puppies' '" . 'images/$backPic[$val]' .  "' />";
        
        /*
        $backPics = array('./images/back1.jpg', './images/back2.jpg', './images/back3.jpg');
        
        $randNum = rand(0,2);
        $val = $backPics[$randNum];
        
        for ($i = 0; $i < 3; $i++) {
            $randNum = rand(0,2);
            echo "<img src='" . 'images/' . $backPics[$randNum] . "' />";
        }
        
        echo '<img src= "images/$backPics[$val].jpg" />';
        
        $backPics = array("./images/back1.jpg", "./images/back2.jpg", "./images/back3.jpg");
        $randPic = array_rand($backPics);
        echo "<img src = $images[$random_image] />";

        
        echo "<img src='" . $backPics[$randomNumber] . "' width='725' height='194'>";
        */
    }
    
    displayBackImage();
    
    function displayPuppies($randomValue, $pos) {
        switch ($randomValue) {
         case 0: $puppy = "gold_puppy";
                 break;
         case 1: $puppy = "wet_puppy";
                 break;
        }
        
        echo "<img id = 'reel$pos' src = 'images/$puppy.jpg' alt = '$puppy' title ='" . ucfirst($puppy) . "' width = '300' />";
    }
        
    function play() {
        for ($i = 1; $i < 5; $i++) {
            ${"puppy" . $i } = rand(0,1);
            displayPuppies(${"puppy".$i}, $i);
        }
        
        displayResult($puppy1, $puppy2, $puppy3, $puppy4);
    }
    
    // deciding if you won
    function displayResult($puppy1, $puppy2, $puppy3, $puppy4) {
        echo "<div id = 'output'>";
                    
            if ($puppy1 == $puppy2 && $puppy1 == $puppy3 && $puppy1 == $puppy4) {
                echo '<div id = "winner">';
                echo "</br>You won!";
                echo '</div>';
            }
            
            else {
                echo '<div id = "loser">';
                echo "</br>You didn't connect four. Try again";
                echo '</div>';
            }

            echo "</div>";
    }
    
?>