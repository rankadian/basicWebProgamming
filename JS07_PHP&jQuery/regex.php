<?php
$pattern = '/[a-z]/';
$text = 'This is a sample text';
if (preg_match($pattern, $text)) {
    echo "lowercase letter found!";
} else {
   echo "no lowercase letters";
}
