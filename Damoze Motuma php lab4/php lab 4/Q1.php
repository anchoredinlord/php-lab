<?php
/*
Name: Damoze    Motuma
Course Code: SEng 3053
*/
?>
<form method="post">
    Enter a sentence: <input type="text" name="sentence">
    <button type="submit">Count Words</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sentence = strtolower($_POST["sentence"]);
    $words = explode(" ", $sentence);
    $count = array_count_values($words);

    foreach ($count as $word => $frequency) {
        echo "$word => $frequency <br>";
    }
}
?>