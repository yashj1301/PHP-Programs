<?php

print "<h2 style='text-align: center'> Cleaning PHP Strings</h2>";

print "<h4> Accessing Individual Characters</h4>";

$str=<<< GA

My name is Oliver Queen. For seven years, I have been fighting for only one goal- to save 
my city. But, now a new threat has emerged.<br />
A threat so severe it has forced me to leave my family behind in order to face it and it
won't be enough for me to just be the <strong> Green Arrow </strong> <br />.
To prevent the crisis that is coming, I am gonna have to become someone else. I am gonna
have to become something....else.
GA;

for ($i=0; $i<25;$i++)
{
    printf("The %dth character is: %s<br />",$i,$str{$i});
}

print "<h4> Removing Whitespace</h4>";
$trimmed_str=trim($str);
echo "Length before trimming: ",strlen($str),"<br />";
echo "Length after trimming: ",strlen($trimmed_str),"<br />";

print "<h4> Changing Case</h4>";
$str1="STEPHEN hawking";
$str2="elon musk";

print strtolower($str1); echo "<br />";
print strtoupper($str2); echo "<br />";
print ucfirst($str2);    echo "<br />";
print ucwords($str2);    echo "<br />";
print ucwords(strtolower($str1));

