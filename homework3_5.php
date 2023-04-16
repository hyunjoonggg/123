<?php

$currentMonth = date('m');
$currentYear = date('Y');


$firstDayOfMonth = mktime(0, 0, 0, $currentMonth, 1, $currentYear);

$daysInMonth = date('t', $firstDayOfMonth);
echo '<table>';
echo '<tr><th>일</th><th>월</th><th>화</th><th>수</th><th>목</th><th>금</th><th>토</th></tr>';


$dayOfWeek = date('w', $firstDayOfMonth);
$currentDay = 1 - $dayOfWeek;


while ($currentDay <= $daysInMonth) {
  echo '<tr>';

  
  for ($i = 0; $i < 7; $i++) {
    if ($currentDay > 0 && $currentDay <= $daysInMonth) {
      echo '<td>' . $currentDay . '</td>';
    } else {
      echo '<td>&nbsp;</td>';
    }
    $currentDay++;
  }

  echo '</tr>';
}

echo '</table>';
?>