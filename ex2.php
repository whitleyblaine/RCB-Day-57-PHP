<?php

$names = [
  'Horn' => array('Whitley', '23'),
  'Hoffman' => array('Amanda', '35')
];

foreach ($names as $lastName => $name_and_age) {
  echo "My name is $name_and_age[0] $lastName.\n";

  if (strlen($name_and_age[0] . $lastName) > 12) {
    echo ("That's a long name!\n");
  } else {
    echo ("That's a short name!\n");
  };

  echo "I am $name_and_age[1] years old.\n";

  if($name_and_age[1] > 21) {
    echo "Sake! Sake! Sake!\n";
  } else if ($name_and_age[1] == 21) {
    echo "Just made it.. Sake Sake Sake!\n";
  } else {
    echo "No Sake for me :(";
  }

  echo str_repeat("=", 10) . "\n";
}

?>