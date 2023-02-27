<?php 
// Deze function zorgt dat de rekenmachine kan berekenen.
function compute($num1, $num2) {     
    // De dropdown wordt gemaakt zodat je een methode kunt kiezen om te berekenen.
    switch($_POST['dropdown']) 
    {
        // De addition wordt gemaakt zodat je kan optellen.
        case "Addition":
            $sum = $num1 + $num2;
            return $sum;

        // De Subtraction wordt gemaakt zodat je kan aftrekken.
        case "Subtraction":
            $diff = $num1 - $num2;
            return $diff;
        
        // De Multiplication wordt gemaakt zodat je kan vermenigvuldigen.
        case "Multiplication":
            $prod = $num1 * $num2;
            return $prod;
        
        // De divison wordt gemaakt zodat je kan delen.
        case "Division":
            $pro = $num1 / $num2;
            return $pro;

        // De default wordt gemaakt zodat je een error krijgt als je de dropdown niet gekozen had.
        default:
            $invalidResult = "Invalid Operation";
            return $invalidResult;
    }
}
?>