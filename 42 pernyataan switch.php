<?php
$grade = 'B';
switch ($grade) {
  case 'A':
    echo "Luar biasa!";
    break;
  case 'B':
  case 'C':
    echo "Bagus!";
    break;
  default:
    echo "Tetap semangat!";
}
