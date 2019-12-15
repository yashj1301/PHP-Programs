<?php

echo "<h3 style='text-decoration: underline'> Extracting Meta Tags</h3>";

print_r(get_meta_tags("http://www.example.com")); //for meta information on page

echo "<h3 style='text-decoration: underline'> URLs </h3>";

echo "<b>Without URL Encoding: </b>",__FILE__,"</p>";
echo "<b>With URL Encoding: </b>",rawurlencode(__FILE__),"</p>";
echo "<p></p>";
$url=rawurlencode(__DIR__);
$output=rawurldecode($url);
echo "<b> Without URL Decoding: </b>",$url,"</p>";
echo "<b> With URL Decoding: </b>",$output;

