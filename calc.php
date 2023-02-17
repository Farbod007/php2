<html>
  <body>
     <form action ="calc_process.php" method= "POST">
       <label>select an operation: </label>
       <select name = "dropdown">
        <option></option>
        <option value = "Addition">Addtion</option>
        <option value = "Subtraction">Subtraction</option>
        <option value = "Multiplication">Multiplication</option>
        <option value = "Division">Division</option>
</select><br></br>
Enter the first number: <input type="text" name = "FirstNum" required/><br></br>
Enter the sec number: <input type="text" name = "SecNum" required/><br></br>
<input type = "submit" value = "Enter"/>
</form>
</body>
<html>