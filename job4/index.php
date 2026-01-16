
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job2</title>
</head>
<body>
    <table>
        <tr>
            <td>Argument</td>
            <td>valeur</td>

        </tr>
        <?php
        foreach($_POST as $key=>$valeur){
            echo"
            <tr>
            <td>$key</td>
            <td>$valeur</td>

            
            </tr>
            ";
        }
        
        ?>
    </table>
</body>
</html>