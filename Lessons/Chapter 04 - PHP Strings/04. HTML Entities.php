<?php

echo "<h1 style='text-align: center'> HTML Entities Escaping in PHP </h1> ";

echo "<h3> 1. HTML Entities </h3>";

$input=<<<input

"My name is Oliver Queen. For seven years ......", he said for the last time in 8 years
as his epic journey finally came to an end, on a bed besides the people who didn't know
what happened to him in his final moments but were with him, till the end of the line.
input;

echo "<p style='text-decoration: underline'>  (A) The <b> htmlentities()</b> Function</p>";

$double=htmlentities($input); //this is for only double quotes
$both=htmlentities($input,ENT_QUOTES); //this is for both single and double
$none=htmlentities($input,ENT_NOQUOTES); // this is for none of them.

echo "<strong> Double quotes only : </strong>",$double,"</p>";
echo "<strong> Both Double and Single Quotes : </strong>",$both,"</p>";
echo "<strong> None of them: </strong>",$none;
echo "<h6> Note: View Source Code of the HTML Page, if you parse the file into a 
browser</h6>";

echo "<h3> HTML Entities Table </h3>";
$table=get_html_translation_table(HTML_ENTITIES);
var_dump($table);
echo "Size of htmlentities() function : ",sizeof($table);

echo "<p style='text-decoration: underline'>  (B) The <b> htmlspecialchars()</b> Function</p>";
$special_chars=htmlspecialchars($input);
print_r($special_chars);

echo "<h3> HTML Special Chars Table </h3>";
$table_for_specialchars=get_html_translation_table(HTML_SPECIALCHARS);
var_dump($table_for_specialchars);
echo "Size of htmlspecialchars() function: ",sizeof($table_for_specialchars);


