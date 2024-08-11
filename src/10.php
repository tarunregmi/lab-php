<?php
  echo "<pre>";
  echo "Lab - 10<br>";
  echo "PHP function to find cube of given number:<br><br>";


  $number = 'a';

  function cube($n) {
    if (!is_numeric($n)) {
      throw new InvalidArgumentException("The input must be a number.");
    }

    return $n * $n * $n;
  }

  try {
    echo "The cube of $number is " . cube($number);
  } catch (InvalidArgumentException $err) {
    echo "Error: " . $err->getMessage();
  }


  echo "</pre>";
?>
