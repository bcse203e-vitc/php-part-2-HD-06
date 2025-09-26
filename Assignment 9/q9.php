<html>
<body>
<?php
$filename = "data.txt";
if (file_exists($filename)) {
    $backupName = pathinfo($filename, PATHINFO_FILENAME) . "_" . date("Y-m-d_H-i") . ".txt";
    copy($filename, $backupName);
    echo "Backup created: $backupName";
} else {
    echo "File not found!";
}
?>
</body>
</html>
