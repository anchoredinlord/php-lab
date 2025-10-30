<?php
/*
Name: Damoze    Motuma
Course Code: SEng 3053
*/
?>
<form method="post">
    Enter a sentence: <input type="text" name="sentence">
    <button type="submit">Count</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sentence = strtolower($_POST["sentence"]);
    $vowels = ['a','e','i','o','u'];
    $vowelCount = 0; $consonantCount = 0;

    for ($i = 0; $i < strlen($sentence); $i++) {
        if ($sentence[$i] == " ") continue;
        if (in_array($sentence[$i], $vowels)) $vowelCount++;
        else $consonantCount++;
    }
    echo "Vowels: $vowelCount, Consonants: $consonantCount";
}
?>