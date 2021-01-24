<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="oclock.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>Oclock</title>
</head>
<body>
	<main>

		<img src="blood.png" width="150" class="blood">

		<div class="clock">
			<div class="hand hour" data-hour-hand></div>
			<div class="hand minute" data-minute-hand></div>
			<div class="hand second" data-second-hand></div>
			<div class="number number1">|</div>
			<div class="number number2">|</div>
			<div class="number number3">III</div>
			<div class="number number4">|</div>
			<div class="number number5">|</div>
			<div class="number number6">VI</div>
			<div class="number number7">|</div>
			<div class="number number8">|</div>
			<div class="number number9">IX</div>
			<div class="number number10">|</div>
			<div class="number number11">|</div>
			<div class="number number12">XII</div>

		</div>
		
	</main>
	<footer class="pageButton">
		<?php include("footer.html") ?>
	</footer>

	<script type="text/javascript" src="oclock.js"></script>
</body>
</html>