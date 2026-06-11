<?php

$text = "   Hello World   ";

echo "Original String: '$text'<br>";
echo "String Length: " . strlen($text) . "<br>";
echo "Trimmed String: '" . trim($text) . "'<br><br>";


$array1 = ["Apple", "Banana"];
$array2 = ["Mango", "Orange"];

$merged = array_merge($array1, $array2);

echo "Merged Array:<br>";
print_r($merged);
echo "<br><br>";

echo "Count of Elements: " . count($merged) . "<br><br>";

if(in_array("Banana", $merged))
{
    echo "Banana Found in Array<br><br>";
}


$colors = "Red,Blue,Green";

$colorArray = explode(",", $colors);

echo "After Explode:<br>";
print_r($colorArray);

echo "<br><br>";

echo "After Implode:<br>";
echo implode(" - ", $colorArray);

echo "<br><br>";



$name = "";

if(isset($name))
{
    echo "Variable is Set<br>";
}

if(empty($name))
{
    echo "Variable is Empty<br>";
}

echo "<br>";


$file = fopen("sample.txt", "w");


fwrite($file, "Hello from PHP File Handling!");


fclose($file);

echo "Data Written to File<br>";


$file = fopen("sample.txt", "r");

$content = fread($file, filesize("sample.txt"));

fclose($file);

echo "File Content: " . $content . "<br><br>";


echo "Create another file named header.php and write:<br>";
echo "<b>&lt;h3&gt;Welcome to My Website&lt;/h3&gt;</b><br><br>";


?>

<form method="GET">
    Enter Name:
    <input type="text" name="getname">
    <input type="submit" value="Submit GET">
</form>

<?php

if(isset($_GET['getname']))
{
    echo "GET Name: " . $_GET['getname'] . "<br><br>";
}

?>

<h2>POST Method Form</h2>

<form method="POST">
    Enter Name:
    <input type="text" name="postname">
    <input type="submit" name="submit" value="Submit POST">
</form>

<?php

if(isset($_POST['submit']))
{
    $postname = $_POST['postname'];

    echo "POST Name: " . $postname . "<br><br>";
}


session_start();

echo "<h2>Sessions</h2>";

$_SESSION['user'] = "Vineesha";

echo "Session Stored: " . $_SESSION['user'] . "<br><br>";


setcookie("username", "Vineesha", time()+3600);

echo "Cookie Created<br>";

if(isset($_COOKIE['username']))
{
    echo "Cookie Value: " . $_COOKIE['username'];
}
?>