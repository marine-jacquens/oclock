<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viweport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="oclock.css">
	<link rel="stylesheet" type="text/css" href="general.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda&display=swap" rel="stylesheet">
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

	<script type="text/javascript">

		setInterval(setClock,1000)

		const hourHand = document.querySelector('[data-hour-hand]')
		const minuteHand = document.querySelector('[data-minute-hand]')
		const secondHand = document.querySelector('[data-second-hand]')

		function setClock(){
			const currentDate = new Date()
			const secondsRatio = currentDate.getSeconds()/60
			const minutesRatio = (secondsRatio + currentDate.getMinutes()) / 60
			const hoursRatio = (minutesRatio + currentDate.getHours()) / 12

			setRotation(secondHand, secondsRatio)
			setRotation(minuteHand, minutesRatio)
			setRotation(hourHand, hoursRatio)

		}

		function setRotation (element,rotationRatio){
			element.style.setProperty('--rotation',rotationRatio * 360)
		} 

		setClock()
	</script>
</body>
</html>