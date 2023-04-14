<?php
$n = 30;
$sum = 0;
$prod = 1;
for($i = 1; $i <= $n; $i++) {
  $sum += $i;
  $prod *= $i;  
}

echo  $sum . "<br>"; 
echo  $prod. "<br>";
?> 