<html>
<body>
<?php
$emails = ["john@example.com", "wrong-email@", "me@site", "user123@gmail.com"];

echo "<h3>Valid Emails</h3>";
foreach ($emails as $email) {
    if (preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$/", $email)) {
        echo "$email <br>";
    }
}
?>

</body>
</html>
