<?php 

function compute()
    {
        $num1 = $_POST['FirstNum'];
        $num2 =$_POST['SecNum'];

        switch($_POST['dropdown'])
        {
            case "Addition";
              $sum = $num1 + $num2;
              return $sum;
              break;
            case "Subtraction";
              $diff = $num1 - $num2;
              return $diff;
              break;
          case "Multiplication";
              $prod = $num1 * $num2;
              return $prod;
              break;
          case "Division";
              $pro = $num1 / $num2;
              return $pro;
              break;
            default:
            echo "Invalis Operation";
        }
    }
    echo "the result is:". compute();
    ?>
<br>
<a href ="calc.php">back</a>