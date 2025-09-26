<html>
<body>
<?php
$logFile = "access.log";
$username = "admin";
$action = "Logged In";

$entry = "$username – " . date("Y-m-d H:i:s") . " – $action\n";
file_put_contents($logFile, $entry, FILE_APPEND);

$lines = file($logFile, FILE_IGNORE_NEW_LINES);
$last5 = array_slice($lines, -5);

echo "<h3>Last 5 Log Entries</h3>";
foreach ($last5 as $line) {
    echo $line . "<br>";
}
?>


</body>
</html>
