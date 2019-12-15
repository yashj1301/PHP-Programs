<?php

echo "<h1> Printing PHP Strings</h1>";

echo "echo: Hello World"," This is Yash Jain.","<br />";
print("print: one"); echo "<br />";
printf('printf: %.2f',2.74563426); echo "<br />";
printf('printf: The hexadecimal value of %d is %x',214,214); echo "<br />";
printf('printf: Bond. James Bond. %03d',7); echo "<br />";
printf('printf: %02d/%02d/%04d',02,14,2019); echo "<br />";

echo "<h3> Now, to store date, we use the sprintf() function </h3>";

$date=sprintf("%02d-%02d-%04d",02,13,2019);
echo "This is today's date: $date";
echo "<h3> The print_r() function</h3>";

$name='Yash';
$val=5;
$arr=[0,1,3,4,5,6];
echo "<strong>Name: </strong>";print_r($name); echo "<br />";
echo "<strong>Value: </strong>";print_r($val);  echo "<br />";
echo "<strong>Array: </strong>";print_r($arr);  echo "<br />";
echo "<strong>Date: </strong>";print_r($date); echo "<br />";

echo "<h3> The var_dump() function</h3>";

echo "<strong>Name: </strong>";var_dump($name); echo "<br />";
echo "<strong>Value: </strong>";var_dump($val);  echo "<br />";
echo "<strong>Array: </strong>";var_dump($arr);  echo "<br />";
echo "<strong>Date: </strong>";var_dump($date); echo "<br />";
echo "<strong>True: </strong>";var_dump(true); echo "<br />";
echo "<strong>False: </strong>";var_dump(false); echo "<br />";
echo "<strong>NULL: </strong>";var_dump(null); echo "<br />";

