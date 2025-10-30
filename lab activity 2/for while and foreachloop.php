<!DOCTYPE html>
<html>
<head>
    <title>PHP Loop Exercises</title>
</head>
<body>
<h1> PHP Loops</h1>

<h2>1️⃣ For Loop (Print 1–10)</h2>
<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
?>

<h2>2️⃣ While Loop (Countdown 10–1)</h2>
<?php
$count = 10;
while ($count >= 1) {
    echo $count . " ";
    $count--;
}
?>

<h2>3️⃣ Foreach Loop (Display Student Names)</h2>
<?php
$students = ["Abel", "Liya", "Kebede", "Mimi", "Samuel"];

foreach ($students as $name) {
    echo $name . "<br>";
}
?>

<h2> Challenge 1: Multiplication Table (1–10)</h2>
<?php
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>*</th>";
for ($i = 1; $i <= 10; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

for ($i = 1; $i <= 10; $i++) {
    echo "<tr><th>$i</th>";
    for ($j = 1; $j <= 10; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<h2> Challenge 2: Sum of Even Numbers (1–100)</h2>
<?php
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $sum += $i;
    }
}
echo "The sum of even numbers between 1 and 100 is: $sum";
?>

</body>
</html>

