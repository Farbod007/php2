<?php
// Hier testen we of de submit knop is ingedrukt.
if (isset($_POST['submit'])) {
    $input = $_POST['input'];       // Hier nemen we de input en zet dit gelijkt aan de variable $input.
    include_once 'functions.php';   // Dit haalt de functions.php op als deze nog niet is ingeladen.
    echo checkTestType($input);     // Dit geeft echo'd (schrijft) het antwoord dat uit de gedraaide functies komt.
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #genderForm { 
        display: none;
        {"}"}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
    <form action="phpOpdrachtB.php" method="post">
        <label>Selecteer test type: </label>
        <select id="dropdown" name="dropdown">
            <option value="alfabetisch">Alfabetisch</option>
            <option value="numeriek">Numeriek</option>
            <option value="gender">Gender</option>
            <option value="mobilePhone">NL Mobiel nummer</option>
            <option value="postcode">NL Postcode</option>
            <option value="adres">Adres</option>
            <option value="email">Emailadres</option>
        </select>

        <div id="defaultForm">
            <input type="text" name="input">
            <input type="submit" name="submit" value="submit">
        </div>
        <div id="genderForm">
            <label>Kies Gender</label>
            <p><input type="radio" name="gender" value="man">man<br></p>
            <p><input type="radio" name="gender" value="vrouw">vrouw<br></p>
            <input type="submit" name="submit" value="submit">
        </div>
    </form>
    <script>
    // Dit stukje Javascript zorgt er voor dat als Gender geselecteerd is de invoer methode wordt omgewisseld.
    $('#dropdown').on('change', function (){
        if(this.value === "gender")
        {
            $("#genderForm").show();
            $("#defaultForm").hide();
        } else {
            $("#genderForm").hide();
            $("#defaultForm").show();
        }
    });
    </script>
</body>
</html>