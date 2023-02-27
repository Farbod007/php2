<?php
if ((isset($_POST['submit'])) && (isset($_POST['gender']))) {
    $gender = $_POST['gender'];

    if ($gender === "man") {
        echo "man geselecteeerd";
    } else if ($gender === "vrouw") {
        echo "vrouw geselecteerd";
    }
} else {
    echo "selecteer een gender";
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
    <form method="post" action="genderTest.php">
        <label>Kies Gender</label>
        <p><input type="radio" name="gender" value="man">man<br></p>
        <p><input type="radio" name="gender" value="vrouw">vrouw<br></p>
        <input type="submit" name="submit">
    </form>
</body>
</html>