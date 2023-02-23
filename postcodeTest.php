<?php
if (isset($_POST['submit'])) {
    $input = $_POST['input'];
    echo dutchPostCodeTest($input); 
}

function dutchPostCodeTest($input) {
    if (preg_match("/^[1-9][0-9]{3} ?(?!sa|sd|ss)[A-Z]{2}$/i", $input)) {
        return "Dutch Postcode detected, test succeeded";
    } else {
        return "Not a dutch postcode";
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
    <form method="POST" action="postcodeTest.php">
        <label>Input dutch postcode</label>
        <input type="text" name="input" />
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>
</html>