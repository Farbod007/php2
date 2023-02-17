<head>

</head>
<body>
<?php
$max=15;
$invoer = plus($max);
function plus($invoer){
for($i=1; $i<=$invoer; $i++){
   for($j=1; $j<=$invoer; $j++){
      echo "+";
    }
    echo"<br>";
 }
}
?>
</body>