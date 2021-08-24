<?php
# task1

$hexMessage = '596f7520636f6e76657274656420697420636f72726563746c7921';
echo pack("H*",$hexMessage);

echo "<br>";
echo "<br>";

// task2


$htmlContent = "<h1>PHP track</h1><p>PHP is an interpreted language</p>";
echo strip_tags($htmlContent);

echo "<br>";
echo "<br>";


//task3

$username = "  Kareem Fouad ";

echo trim($username);
echo "<br>";
echo "<br>";

//task4
$num = 15023198.91;

echo number_format($num,2);
echo "<br>";
echo "<br>";


//task5
$employeePositions = [
    'kareem fouad' => 'backend',
    'ahmed bahnasy' => 'frontend',
    'mohammed nabeel' => 'android',
];
print_r (array_keys($employeePositions));
echo "<br>";
echo "<br>";
print_r (array_values($employeePositions));
echo "<br>";
echo "<br>";

//task6
$nums = [4, 7, 1];
list($x,$y,$z)=$nums;
echo "x=$x, y=$y, z=$z";
echo "<br>";
echo "<br>";

//task7
$userData = [
    'name' => 'kareem',
    'job' => 'backend',
    'language' => 'php',
    'framework' => 'laravel',
];
extract($userData);
echo "\$name=$name ;\$job=$job;\$language=$language;\$framework=$framework";
?>
