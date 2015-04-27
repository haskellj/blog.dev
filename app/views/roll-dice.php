<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dice Roll</title>
</head>
<body>
    <h1>Dice rolled a: <?= $random; ?></h1>
    <h2>You guessed: <?= $guess; ?></h2>
    <?php if($random == $guess) { ?>
    	<?= "You got it!"; ?>
	<?php } else { ?>
		<?= "Sorry, you were wrong......"; ?>
	<?php } ?>
</body>
</html>