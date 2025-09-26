<html>
<body>
<?php
echo "Current Date & Time: " . date("d-m-Y H:i:s") . "<br><br>";

$dob = "2000-05-15"; // Replace with user input
$today = new DateTime();
$birthDate = new DateTime($dob);

$nextBirthday = new DateTime(date("Y") . "-" . $birthDate->format("m-d"));
if ($nextBirthday < $today) {
    $nextBirthday->modify("+1 year");
}

$interval = $today->diff($nextBirthday);
echo "Days until next birthday: " . $interval->days;
?>
</body>
</html>
