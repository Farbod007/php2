<?php
if (isset($_POST['submit'])) {
    $input = $_POST['input'];
    echo adresTest($input); 
}

function adresTest($input) {
    if ((preg_match('/^([a-z]+[0-9]{0,3})$/i', $input))){
        return "adres detected, test succeeded";
    } else {
        return "geen adres";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="adrestest.php">
        <label>Input Adres</label>
        <input type="text" name="input" />
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>
</html>