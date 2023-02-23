<?php
if (isset($_POST['submit'])) {
    $input = $_POST['input'];
    echo dutchPhoneNumberTest($input); 
}

function dutchPhoneNumberTest($input) {
    if ((preg_match("/^[0][6][' '][0-9]{8}$/i", $input)) or (preg_match("/^[+][3][1][6][' '][0-9]{8}$/i", $input))){
        return "Dutch Mobile phone number detected, test succeeded";
    } else {
        return "Not a dutch mobile phone number";
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
    <form method="POST" action="mobielTest.php">
        <label>Input dutch mobile phone number</label>
        <input type="text" name="input" />
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>
</html>