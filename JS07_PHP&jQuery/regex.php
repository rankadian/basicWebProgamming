<?php
$pattern = '/[0-9]+/';
$text = 'There are 123 apples';
if (preg_match($pattern, $text, $matches)) {
    echo "Match : ";
} else {
   echo "nothing matches";
}
