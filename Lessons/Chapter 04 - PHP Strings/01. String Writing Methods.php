<?php

print "<h1> Ways to write a Literal String in your Program</h1>";

$single='Yash';
$double="Yash Jain";

echo 'This is single quote: ',$single,'<br />';
echo "<p>This is \$300 for you, $double.</p>";

$heredoc=<<< ae_quote
"Insanity: doing the same thing over and over again and expecting different results.<br />
Imagination is more important than knowledge.<br />
If you can't explain it simply, you don't understand it well enough."
-Albert Einstein
ae_quote;

echo $heredoc;
