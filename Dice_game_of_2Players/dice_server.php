<?php
echo "<center>";
echo "<img src='logo.jpeg' width='150' id='mit' height='100px'>";
echo "<img src='dicelogo.png' width='200' id='dice_logo' height='100px'>";
echo "<img src='navttcc.png' width='150' id='navtc' height='100px'>";

echo "<div class='game_body'>";

$btn1 = "enabled";
$btn2 = "enabled";

$score1 = $_GET['score1'];
$score2 = $_GET['score2'];


if(isset($_GET['btn1'])) {
    $number = rand(1, 6);
    $score1 += $number;
    echo "<br><img src='$number.jpg'><br><br>";
    echo "<h1 style='color:red;'>Player1: score: $number</h1>";
    $btn1 = "disabled";  

    if($number==6){
        $btn1="enabled";
        $btn2="disabled";
}
    if($score1 ==25 || $score1 >=25){
        $btn1="disabled";
        $btn2="disabled";
        echo "<h2 style='color:green; background-color:white; padding:7px;'>Congratulations! Player1 Won the Match</h2>";
}
    /* echo "<h1 style='color:darkred; background-color:skyblue; padding:7px;'>Player1: score: $score1</h1>";
 */    

}

elseif (isset($_GET['btn2'])) {
    $btn2 = "disabled";
    $number = rand(1, 6);
    $score2 += $number;
    if($number==6){
        $btn2="enabled";
        $btn1="disabled";
}
    if($score2 ==25 || $score2 >=25){
        $btn1="disabled";
        $btn2="disabled";
        echo "<h2 style='color:green; background-color:white; padding:7px;' >Congratulations! Player2 Won the Match</h2>";
}
    /* echo "<h1 style='color:blue; background-color:lightgray; padding:7px;'>Player2: score: $score2</h1>";
 */    
    echo "<br><img src='$number.jpg' class='diceimg'><br><br>";
    echo "<h1 style='color:green;'>Player2: score: $number</h1>";
}

echo " <div id='Scores'><h3 id='output1'>Player1 Total Score: $score1</h3>";
echo "<h3 id='output2' >Player2 Total Score: $score2</h3></div>";

echo "<html>
        <head>
        <link rel='stylesheet' href='server_style.css' type='text/css'>
        </head>
        <body bgcolor='gray'>
        <form action='dice_server.php' method='GET'>
            <input type='hidden' name='score1' value='$score1'>
            <input type='hidden' name='score2' value='$score2'>
            <input type='submit' name='btn1' id='b1'  Value='Player1' $btn1>
            <input type='submit' name='btn2' id='b2'  Value='Player2' $btn2>
            
        </form>
      </body>
    </html>";

    //Set Restart Button when both buttons are disabled
    if($btn1=='disabled' && $btn2=='disabled'){
    
        echo " <form action='dice_client.html' method='GET'>
        <input type='hidden' name='score1' value='0'>
        <input type='hidden' name='score2' value='0'>
        <input type='submit' name='btn1' Value='Restart the Game' style='background-color:blue; color:white; padding:15px; font-weight:bolder;'>
    </form>";
    }
echo "</div>";
echo "</center>";
?>
<html>
    <body>
    <div id="footer">
    <h2 style="padding-left: 50px;"> 
            Course: Full Stack Development &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            Trainer: Sir Muhammad Hadi Bux
        </h2>
        <h2 id="name" style="padding-right:50px;">Student Name : Aatif Raza</h2>

    </div>
    </body>
</html>