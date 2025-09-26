<html>
<body>
<?php
class EmptyArrayException extends Exception {}

function calculateAverage($arr) {
    if (empty($arr)) {
        throw new EmptyArrayException("No numbers provided");
    }
    return array_sum($arr) / count($arr);
}

try {
    $numbers = [10, 20, 30, 40, 50]; // test with []
    echo "Average: " . calculateAverage($numbers);
} catch (EmptyArrayException $e) {
    echo "Error: " . $e->getMessage();
}
?>
</body>
</html>
