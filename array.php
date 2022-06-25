<?php
$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
"holes" => array ( "First", 5 => "Second", "Third"));
echo "<h2>".$color["holes"][5]."</h2>"."\n"; 
echo "<h2>".$color["color"]["a"]."</h2>"; 
?>