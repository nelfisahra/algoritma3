<?php
$text = " Hello World! ";
echo "[" . trim($text) . "]"; // Outputs: "[Hello World!]"
echo "[" . ltrim($text) . "]"; // Outputs: "[Hello World! ]"
echo "[" . rtrim($text) . "]"; // Outputs: "[ Hello World!]"
