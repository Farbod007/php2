<?php
if (isset($_POST['submit'])) {
    $input = $_POST['input'];
    echo emailTest($input); 
}

function emailTest($input) {
    if ((preg_match('/^([a-z]+[0-9]*)@([a-z]+)\.([a-z]{2,5})$/i', $input))){
        return "gamil detected, test succeeded";
    } else {
        return "geen gmail";
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
    <form method="POST" action="emailtest.php">
        <label>Input Gamil</label>
        <input type="text" name="input" />
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>
</html>