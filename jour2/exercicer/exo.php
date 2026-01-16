<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
$produit = [
    ["id"=>1, "nom"=>"ordinateur", "prix"=>150],
    ["id"=>2, "nom"=>"telephone", "prix"=>100],
    ["id"=>3, "nom"=>"tablette", "prix"=>160],
    ["id"=>4, "nom"=>"tablette", "prix"=>180]

];

foreach($produit as $p){
    foreach($p as $information=>$valeur){
        echo ucfirst($information).":". $valeur. "<br>";
    }
    echo"________________<br>";
}


//$utilisateur = array("Abdallah", "lamal", 12)
//array_push($utilisateur, "said", "djahi", "sitty");

//echo "<pre>";
//var_dump($utilisateur);
//echo "</pre>";
?>

</body>
</html>