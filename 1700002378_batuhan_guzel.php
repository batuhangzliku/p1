<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Proje</title>
</head>
<body>
<?php
    for ($l = 1; $l <= 10; $l++) {
        global $berabere,$playerA,$playerB;
        $RockScissorsPaper = rand(0,2);
        $RockScissorsPaper2 = rand(0,2);
        echo"Round $l: <br>";     
        if($RockScissorsPaper==0){
            echo"Player A: Rock <br>";
        }
        elseif($RockScissorsPaper==1){
            echo"Player A: Scissors <br>";
        }
        else{
            echo"Player A: Paper <br>";         
        }
        if($RockScissorsPaper2==0){
            echo"Player B: Rock <br>";
        }
        elseif($RockScissorsPaper2==1){
            echo"Player B: Scissors <br>";
        }
        else{
            echo"Player B: Paper <br>";         
        }

       if($RockScissorsPaper==0 && $RockScissorsPaper2==0){
        echo"Same choice: It is a draw... <br>";  
         $berabere++;
       }
       elseif($RockScissorsPaper==0 && $RockScissorsPaper2==1){
        echo"Rock crushes Scissors: Player A wins.. <br>";  
        $playerA++;
       }
       elseif($RockScissorsPaper==0 && $RockScissorsPaper2==2){
        echo"Paper covers Rock: Player B wins.. <br>";  
        $playerB++;
       }


       if($RockScissorsPaper==1 && $RockScissorsPaper2==0){
        echo"Rock crushes Scissors: Player B wins.. <br>";  
        $playerB++;
       }
       elseif($RockScissorsPaper==1 && $RockScissorsPaper2==1){
        echo"Same choice: It is a draw... <br>";  
        $berabere++;
       }
       elseif($RockScissorsPaper==1 && $RockScissorsPaper2==2){
        echo"Scissors cut Paper: Player A wins.. <br>";  
        $playerA++;
       }

       
       if($RockScissorsPaper==2 && $RockScissorsPaper2==0){
        echo"Paper covers Rock: Player A wins.. <br>"; 
        $playerA++; 
       }
       elseif($RockScissorsPaper==2 && $RockScissorsPaper2==1){
        echo"Scissors cut Paper: Player B wins.. <br>";  
        $playerB++;
       }
       elseif($RockScissorsPaper==2 && $RockScissorsPaper2==2){
        echo"Same choice: It is a draw... <br>";
        $berabere++;  
       }
       echo"<br>";   
    }
?>
<?php
    echo"Player A: $playerA wins. <br>";  
    echo"Player B: $playerB wins. <br>";  
    echo"$berabere Games were a draw.<br>";  
?>
</body>
</html>