<?php
$pattern = '/go*d/';
$text = 'god is good';
$new_text = preg_match($pattern, $text,$matches);
if (preg_match($pattern, $text,$matches)) {
   echo "match : ".$matches[0];
} else {
    echo "Nothing matches";
}
?>
