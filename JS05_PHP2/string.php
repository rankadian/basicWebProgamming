<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing etit.
Voluptatem reprehenderit nobis veritatis conynodi fugiat molestias
impedit unde ipsum voluptatum, corrupti minus sit excepturi nostrum
quisquam? Quos impedit eum nulla optio. " ;
echo "<p>{$loremIpsum}</p>";
echo "Character length : ".strlen( $loremIpsum ) ."<br>";
echo "Word length : ".str_word_count( $loremIpsum ) ."<br>";
echo "<p>".strtoupper($loremIpsum)."</p>";
echo "<p>".strtolower($loremIpsum)."</p>";
?>