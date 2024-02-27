<?php
function lengthOfLastWord($s) {
    $array = explode(' ', trim($s));
    $last_word = end($array);
    return strlen($last_word);
}

echo lengthOfLastWord("   fly me   to   the moon  ");