<?php
$text = "Hello";
echo strlen($text);

$fruits = ["Apple", "Banana", "Cherry"];
echo count($fruits);

$text1= "red, bluw, green";
$colors = explode(",", $text1);
print_r($colors);

implode("-", $colors);
print_r($colors);

$a = ["Apple", "Banana", "Cherry"];
$b = ["Durian", "Elderberry", "Fig"];
$result = array_merge($a, $b);
print_r($result);

if(in_array("Banana",$fruits)) {
    echo "found";
}

$str = "HelloWorld";
echo trim($str);

if(isset($str)) {
    echo "Variable is set";
}
?>