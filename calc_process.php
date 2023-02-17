<?php 
//Deze function zorgt dat DE rekenmachine kan berekenen.
function compute()
    { 
        
        $num1 = $_POST['FirstNum']; //Dit betkent $num1 is gelijk met input Firstnum 
        $num2 =$_POST['SecNum'];//Dit betkent $num2 is gelijk met input Secnum

        //De dropdown wordt gemaakt zodat je een methode kunt kiezen om te berekenen.
        switch($_POST['dropdown']) 
        {
            case "Addition"; //De addition wordt gemaakt zodat je kan optellen.
              $sum = $num1 + $num2;
              return $sum;
              break;
            case "Subtraction"; //De Subtraction wordt gemaakt zodat je kan aftrekken.
              $diff = $num1 - $num2;
              return $diff;
              break;
          case "Multiplication";//De Multiplication wordt gemaakt zodat je kan vermenigvuldigen.
              $prod = $num1 * $num2;
              return $prod;
              break;
          case "Division";//De divison wordt gemaakt zodat je kan delen.
              $pro = $num1 / $num2;
              return $pro;
              break;
            default://De default wordt gemaakt zodat je een error krijgt als je de dropdown niet gekozen had.
            echo "Invalid Operation";
        }
    }
    echo "the result is:". compute();//Deze geeft de resultaat.
    ?>
<br>
<!--Met deze link kan je terug naar calc.php-->
<a href ="calc.php">back</a>