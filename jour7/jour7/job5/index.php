<?php
session_start();
if(!isset($_SESSION["grid"])){
    $_SESSION["grid"]=[
        ["_","_","_"],
        ["_","_","_"],
        ["_","_","_"]
    ];
    $_SESSION["player"]="X";
}
if(!isset($_POST["reset"])){
    $_SESSION["grid"]=[
        ["_","_","_"],
        ["_","_","_"],
        ["_","_","_"]
    ];
      $_SESSION["player"]="X";
}
if(isset($_POST["cell"])){
    $pos=$_POST["cell"];
    $x=$pos[0];
    $y=$pos[1];

    if($_SESSION["grid"][$x][$y]=="_"){
        $_SESSION["grid"][$x][$y]=$_SESSION["player"];
        $_SESSION["player"]=$_SESSION["player"]==("X")? "O":"X";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job5</title>
</head>
<body>
    <form method="post">
        <table border="1">
        <?php
        $i=0;
        while($i<3){
            echo "<tr>";
            $j=0;
        while($j<3){
            echo "<td>";
        }
        } 
        
        ?>

        </table>
    </form>
    
</body>
</html>