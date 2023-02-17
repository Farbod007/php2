<head>
    
</head>

<body>
<?php
// PHP code to check whether the number 
// is Even or Odd in Normal way
function check($number){
    if($number % 2 == 0){
        echo "true"; 
    }
    else{
        echo "false";
    }
}
  
// Driver Code
$number = 40;
check($number)
?>
</body>