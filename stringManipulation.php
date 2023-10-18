<?php 
$text="The quick brown fox jumps over the lazy dog.";
$textLower= strtolower($text);
$textReplace = str_replace("brown","red", $textLower);
$modifiedText = $textReplace;
print $modifiedText;