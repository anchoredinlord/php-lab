<?php
/*
Name: Damoze    Motuma
Course Code: SEng 3053
*/
?>
<form method="post">
    Enter numbers separated by comma: <input type="text" name="numbers">
    <button type="submit">Find</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arr = explode(",", $_POST["numbers"]);
    $min = $arr[0];
    $max = $arr[0];

    foreach ($arr as $value) {
        if ($value > $max) $max = $value;
        if ($value < $min) $min = $value;
    }

    echo "Max: $max, Min: $min";
}
?>