<?php

  // Code
  $db = [

    'faq1' => [
      question => 'Question 1',
      answer => 'Lorem ipsum dolor sit amet 1',
      answer => 'Lorem ipsum dolor sit amet 1',
      answer => 'Lorem ipsum dolor sit amet 1',
      answer => 'Lorem ipsum dolor sit amet 1',
      answer => 'Lorem ipsum dolor sit amet 1'
    ],

    'faq2' => [
      question => 'Question 2',
      answer => 'Lorem ipsum dolor sit amet 2'
    ],

    'faq3' => [
      question => 'Question 3',
      answer => 'Lorem ipsum dolor sit amet 3'
    ],

    'faq4' => [
      question => 'Question 4',
      answer => 'Lorem ipsum dolor sit amet 4'
    ],

  ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Google FAQ</title>
</head>
<body>

  <div class="container faq">
    <!-- Prendi dall'array $db tutte le chiavi "faq-n" -->
    <?php foreach($db as $key => $value) { ?>

      <!-- QUESTIONS -->
      <h3><?php echo $key ?></h3>

      <!-- ANSWERS -->
      <!-- Prendi da ogni "faq-n" tutti i valori delle chiavi "answer" -->
      <?php foreach($value as $key => $answer) { ?>
        <p><?php echo $answer['answer'] ?></p>
      <?php } ?>

    <?php } ?>
  </div>

</body>
</html>
