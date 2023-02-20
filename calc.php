<?php
include_once 'calc_process.php';
if (isset($_POST['submit'])) {
  $num1 = $_POST['FirstNum'];     // Dit maakt $num1 gelijk met de input Firstnum.
  $num2 =$_POST['SecNum'];        // Dit maakt $num2 gelijk met de input Secnum.
  echo "Het resultaat is: " . compute($num1, $num2); // Dit schrijft het resultaat en roept de functie compute op om de berekening te starten.
}
?>
<html>
  <body>
    <!--deze code maakt rkenenmachine formulier-->
    <form action="calc.php" method="post">
      <label>Selecteer handeling: </label>
      <select name = "dropdown">
        <option></option>
        <option value = "Addition">Optelling</option>
        <option value = "Subtraction">Aftrekking</option>
        <option value = "Multiplication">Vermenigvuldigen</option>
        <option value = "Division">Delen</option>
      </select>
      <p>Enter the first number: <input type="text" name="FirstNum" required/></p>
      <p>Enter the second number: <input type="text" name="SecNum" required/></p>
      <input type="submit" name="submit" value="Enter"/>
    </form>
  </body>
</html>
