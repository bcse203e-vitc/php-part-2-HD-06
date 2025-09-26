<?php
$content = file_get_contents('data.txt');
$pattern = '/\b\d{10}\b/';
preg_match_all($pattern, $content, $matches);
$numbers = $matches[0];
$numbersContent = implode("\n", $numbers);
file_put_contents('numbers.txt', $numbersContent);
echo "Mobile numbers extracted and saved to numbers.txt\n";
?>
