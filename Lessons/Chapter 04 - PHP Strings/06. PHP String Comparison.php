<?php

echo "<h1 style='text-align: center'> String Comparison </h1>";

echo "<h4 style='text-decoration: underline'> Exact Comparison </h4> ";

$name="Yash";
$_name="YASH";

if($name==$_name)
{
    echo "{$name} is similar to {$_name}</p>";
}

else
{
    echo "{$name} is not similar to {$_name}";
}

echo "<p></p>";
if ($_name===$name)
{
    echo "{$name} is similar to {$_name}";

}

else
{
    echo "{$name} is not similar to {$_name}";

}

$name_rev="Hsaye";

if($name>$name_rev)
{
    echo "<p>{$name_rev} comes before {$name}</p>";
}

else
{
    echo "<p>{$name} comes before {$name_rev}</p>";
}

echo "<h4 style='text-decoration: underline'> The <em>strcmp()</em> Function</h4>";

echo strcmp($name_rev,$name),"</p>";
echo strcmp($name,$name_rev),"</p>";
echo strcmp($name,$_name);

echo "<hr />";

echo "<h4 style='text-decoration: underline'> Approximate Comparison </h4> ";

echo "<h4 style='text-decoration: underline'> The <em>soundex()</em> and <em>metaphone()</em> Functions</h4>";

$name="Fred";
$query="Phred";
echo "<b>Soundex </b>: &nbsp;&nbsp;";
if(soundex($name)==soundex($query))
{
    echo "{$name} sounds like {$query}.</p>";
}

else
{
    echo "{$name} does not sound like {$query}.</p>";
}

echo "<b>Metaphone </b>: &nbsp;&nbsp;";

if(metaphone($name)==metaphone($query))
{
    echo "{$name} sounds like {$query}.</p>";
}

else
{
    echo "{$name} does not sound like {$query}. </p>";
}

echo "<h4 style='text-decoration: underline'> The <em>similar_text()</em> and <em>levenshtein()</em> Functions</h4>";

echo "<b>Similar Text </b>: &nbsp;&nbsp;";
$common=similar_text("Yash","Yash Jain",$percent);
printf("They have %d characters in common. (%.2f%%)",$common,$percent);

echo "</p> <b>Levenshtein </b>: &nbsp;&nbsp;";
$similarity=levenshtein("graph","geography");
printf("The levenshtein distance is %d.",$similarity);
