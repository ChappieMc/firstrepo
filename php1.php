<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tworzowski - Zadanie PHP1</title>
</head>
<body>
    <form method="GET">
        <input name="scianki" placeholder="ilosc scianek">
        <input name="rzuty" placeholder="ilosc rzutow">
        <input type="submit" name="licz" value="Rzuć">
    </form>

    <?php
        if(isset($_GET['licz'])){
            for ($i = 0; $i < $_GET["rzuty"]; $i++) {
                $max = intval($_GET['scianki']);
                echo "<br>" . $i+1 . ". " . rand(1, $max);
            }            
        }
    ?>
</body>
</html>