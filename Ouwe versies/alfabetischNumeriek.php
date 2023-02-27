<?php
if (isset($_POST['submit'])) {
    $input = $_POST['input'];
    if (ctype_alpha($input)) {
        echo "All letters, test succeeded.";
    } else if (is_numeric($input)) {
        echo "All numbers, test succeeded.";
    } else {
        echo "test failed.";
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
    <form method="POST" action="alfabetischNumeriek.php">
        <label>test</label>
        <input type="text" name="input" />
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>
</html>