<?php
/*
Name: Damoze    Motuma
Course Code: SEng 3053
*/
?>
<form method="post">
    Enter a word: <input type="text" name="text">
    <button type="submit">Count</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = str_replace(" ", "", $_POST["text"]);
    $chars = str_split($text);
    $count = [];

    foreach ($chars as $ch) {
        if (isset($count[$ch])) $count[$ch]++;
        else $count[$ch] = 1;
    }

    foreach ($count as $char => $freq) {
        echo "$char → $freq <br>";
    }
}
?>