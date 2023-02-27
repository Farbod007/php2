<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tafels</title>
  </head>
  <body>
    <?php
      if ((isset($_POST['submit'])) && (!$_POST['input']) == null) {  //als je input en de submit druk.
        $i=1;                                                         //$i is gelijk met een .
        $input = $_POST['input'];                                     //$input is gelijk met input .
        echo table($input, $i);                                       // print jij wat je heeft in input ingevuld.
      } else {
        echo "Voer een nummer in.";
      }

    function table($input ,$i) 
    { 
      if($i<=10) {                      //Dat werk zoals een forloop deze statements print van 1 tot 10 dan stopt bij 10.
        $tab = $input * $i;             // De nummer in de input tm x10 is gelijk met $tab.
        echo "$input * $i = $tab <br>"; // Het print de cijfer in de input tm x10.
        table($input, $i + 1);          // Ik denk dat het werk zoals i++ van Forloop.
      }
    }
    ?>
    <!---Deze is de form van de table--->
    <form method="POST" action="table.php">
      <input type="text" name="input" />
      <input type="submit" name="submit" value="Submit" />
    </form>
  </body>
</html>