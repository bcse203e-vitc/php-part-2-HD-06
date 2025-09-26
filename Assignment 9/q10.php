<html>
<body>
<?php
$lines = file("students.txt", FILE_IGNORE_NEW_LINES);
$errorFile = "errors.log";
$validRecords = [];

foreach ($lines as $line) {
    $parts = explode(",", $line);
    if (count($parts) != 3) {
        file_put_contents($errorFile, "Invalid record: $line\n", FILE_APPEND);
        continue;
    }

    list($name, $email, $dob) = $parts;

    if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$/", $email)) {
        file_put_contents($errorFile, "Invalid email: $line\n", FILE_APPEND);
        continue;
    }

    $birthDate = new DateTime($dob);
    $today = new DateTime();
    $age = $today->diff($birthDate)->y;

    $validRecords[] = ["name" => $name, "email" => $email, "age" => $age];
}

echo "<h3>Valid Student Records</h3>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Name</th><th>Email</th><th>Age</th></tr>";
foreach ($validRecords as $r) {
    echo "<tr><td>{$r['name']}</td><td>{$r['email']}</td><td>{$r['age']}</td></tr>";
}
echo "</table>";
?>
</body>
</html>
