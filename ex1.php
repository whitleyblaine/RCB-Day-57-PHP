<!DOCTYPE html>
<html>
<body>


<?php

$firstName = "Whitley";
$lastName = "Blaine";
$birthYear = "1993";
$age = 2016 - $birthYear;

$fullName = $firstName . " " . $lastName;

if (strlen($fullName) > 12) {
  echo "It's a long name.\n";
} else {
  echo "It's a short name.\n";
}

echo str_repeat("-=", 10) . "\n";

echo "I am $age\n";

if ($age > 21) {
  echo "Sake! Sake! Sake!\n";
} else if ($age < 21) {
  echo "No sake for me :(\n";
} else {
  echo "Just slipped by! Sake! Sake! Sake!\n";
}

?>

</body>
</html>