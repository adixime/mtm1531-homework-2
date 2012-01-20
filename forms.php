<?php

// This will make error messages visible on Edumedia
// It's temporary and should be deleted when you've fixed your code
//error_reporting(-1);
//ini_set('display_errors', 'on');


//var_dump($_POST);


?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Forms</title>
    <link href="css/general.css" rel="stylesheet">
</head>
<body>

<form action="forms.php" method="post">

	<div class="input">
    	<p><label for="noone">Input Number 1:</label></p>
		<input type="number" id="noone" name="noone">
	   	<p><label for="notwo">Input Number 2:</label></p>
		<input type="number" id="notwo" name="notwo">
		<p><label for="operation">What mathematical operation do you want to do?</label></p>
		<select id="operation" name="operation">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
		</select>
    </div>
	<p><button type="submit">Calculate</button></p>

</form>

<?php if (!empty($_POST['noone']) && !empty($_POST['notwo'])) : ?>
	<?php
        $noone = $_POST['noone'];
        $notwo = $_POST['notwo'];
        $operation = $_POST['operation'];
    ?>
    <?php if ($_POST['operation'] == '+') : ?>
    	<?php $sumtotal = $noone + $notwo?>
        <p id="ans">The answer to <?php echo $_POST['noone']; echo $_POST['operation']; echo $_POST['notwo']; ?> = <?php print($sumtotal);?></p>
        <p id="ans1"><strong>The Taxed Money (13%)= $<?php print number_format ($sumtotal * 0.13, 2, '.', ','); ?></strong></p>
    <?php elseif ($_POST['operation'] == '-') : ?>
        <?php $sumtotal = $noone - $notwo?>
        <p id="ans">The answer to <?php echo $_POST['noone']; echo $_POST['operation']; echo $_POST['notwo']; ?> = <?php print($sumtotal);?></p>
        <p id="ans1"><strong>The Taxed Money (13%)= $<?php print number_format ($sumtotal * 0.13, 2, '.', ','); ?></strong></p>
    <?php elseif ($_POST['operation'] == '*') : ?>
        <?php $sumtotal = $noone * $notwo?>
        <p id="ans">The answer to <?php echo $_POST['noone']; echo $_POST['operation']; echo $_POST['notwo']; ?> = <?php print($sumtotal);?></p>
        <p id="ans1"><strong>The Taxed Money (13%)= $<?php print number_format ($sumtotal * 0.13, 2, '.', ','); ?></strong></p>
    <?php elseif ($_POST['operation'] == '/') : ?>
        <?php $sumtotal = $noone / $notwo?>
        <p id="ans">The answer to <?php echo $_POST['noone']; echo $_POST['operation']; echo $_POST['notwo']; ?> = <?php print($sumtotal);?></p>
        <p id="ans1"><strong>The Taxed Money (13%) = $<?php print number_format ($sumtotal * 0.13, 2, '.', ','); ?></strong></p>
    <?php else : ?>
        <p id="ans">I don't know what's going on! :(</p>
    <?php endif; ?>
    	
<?php endif; ?>

</body>
</html>











