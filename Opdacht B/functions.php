<?php
// Deze functies test of welke optie in de dropdown is geselecteerd.
function checkTestType($input) {
    switch($_POST['dropdown']) 
    {
        // Test voor alfabetische optie en voert de bijbehorende functie uit.
        case "alfabetisch":
            if (ctype_alpha($input)) {
                return "Geslaagd! Het zijn allemaal letters.";
            } else {
                return "Gefaald! Het zijn niet alleen letters.";
            }

        // Test voor numerieke optie en voert de bijbehorende functie uit.
        case "numeriek":
            if (is_numeric($input)) {
                return "Geslaagd! Het zijn allemaal cijfers.";
            } else {
                return "Gefaald! Het zijn niet alleen cijfers.";
            }
               
        // Test voor gender optie en voert de bijbehorende functie uit.
        case "gender":
            if ((isset($_POST['submit'])) && (isset($_POST['gender']))) {
                $gender = $_POST['gender'];
                return genderTest($gender);
            } else {
                return "Gefaald! Geen gender geselecteerd.";
            }
        
        // Test voor mobilePhone optie en voert de bijbehorende functie uit.
        case "mobilePhone":
            return dutchPhoneNumberTest($input);
                    
        // Test voor postcode optie en voert de bijbehorende functie uit.
        case "postcode":
            return dutchPostCodeTest($input);
        
        // Test voor adres optie en voert de bijbehorende functie uit.
        case "adres":
            return adresTest($input);;
        
        // Test voor email optie en voert de bijbehorende functie uit.
        case "email":
            return emailTest($input);
        
        // De default wordt gemaakt zodat je een error krijgt als je de dropdown niet gekozen had.
        default:
            $invalidResult = "Invalid option";
            return $invalidResult;
    }
}
// Deze functie test of er een man of vrouw als gender is geselecteerd met de radio buttons.
function genderTest($gender) {
    if ($gender === "man") {
            return "Variable is een man.";
        } else if ($gender === "vrouw") {
            return "Variable is een vrouw.";
        }
}

// Deze functie test of het ingevoerde nummer een Nederlands nummer is.
function dutchPhoneNumberTest($input) {
    // Hij test voor zowel 06 een spatie en 8 cijfers van 0 t/m 9. of +316 en 8 cijfers van 0 t/m 9.
    if ((preg_match("/^[0][6][' '][0-9]{8}$/i", $input)) or (preg_match("/^[+][3][1][6][' '][0-9]{8}$/i", $input))){
        return "Geslaagd! Dit is een correct Nederlands mobiele telefoonnummer.";
    } else {
        return "Gefaald! Dit is geen correct Nederlands mobiel telefoonnummer";
    }
}

// Deze functie test of er een Nederlandse postcode is ingevoerd.
function dutchPostCodeTest($input) {
    if (preg_match("/^[1-9][0-9]{3}[' '] ?(?!sa|sd|ss)[A-Z]{2}$/", $input)) {
        return "Geslaagd! Dit is een Nederlandse postcode.";
    } else {
        return "Gefaald! Dit is geen correct Nederlands postcode.";
    }
}

// Deze functies test of er een adres is in gevoerd.
function adresTest($input) {
    if (preg_match('/^([a-z]+[0-9]{0,3})$/i', $input)){
        return "Geslaagd! Adres is correct.";
    } else {
        return "Gefaald! Adres is niet correct.";
    }
}

// Deze functie test of er een email adres is ingevoerd.
function emailTest($input) {
    if (preg_match('/^([a-z]+[0-9]*)@([a-z]+)\.([a-z]{2,5})$/i', $input)){
        return "Geslaagd! Een correcte email is herkent.";
    } else {
        return "Gefaald! Dit is geen correct email";
    }
}
?>