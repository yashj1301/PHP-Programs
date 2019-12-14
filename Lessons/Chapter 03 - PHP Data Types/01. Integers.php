<?php

echo "<h1> Integers </h1>";

$dec=33;
$oct=-0755;
$hex=0x10;
$bin=0b10;

echo "Decimal: ",$dec,"<br />";
echo "Octal: ",$oct,"<br />";
echo "Hexadecimal: ",$hex,"<br />";
echo "Binary: ",$bin,"<br />";

echo "<h3> Check if a number is integer or not</h3>";
echo is_int($bin),"<br />"; // 1 output which means true
echo is_int(true); // no output which means false

var_dump($oct);
var_dump(true);
