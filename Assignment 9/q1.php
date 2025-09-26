<html>
<body>
<?php
$students = [
    "Rahul" => 85,
    "Priya" => 92,
    "Arun" => 78,
    "Meena" => 95,
    "Kiran" => 88
];

arsort($students); // sort by value (marks) descending

echo "<h3>Top 3 Students</h3>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Name</th><th>Marks</th></tr>";

$top = array_slice($students, 0, 3, true);
foreach ($top as $name => $marks) {
    echo "<tr><td>$name</td><td>$marks</td></tr>";
}
echo "</table>";
?>
</body>
</html>
