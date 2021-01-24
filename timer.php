<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viweport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="oclock.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>Timer</title>
</head>
<body>
	<header>
		
	</header>
	<main>
		<h1>“ 12 minutes avant minuit ”</h1>

		<p id="countdown" class="time"></p>

		<form class="countdown" >
			
			<div class="numberTimer">
							
				<div class="labelInput">		
					<label for="startingHours">h</label>			
					<input type="number" name="hour" id ="startingHours" min="00" max="24" value="0" >
				</div>	

				<div class="colon"><p>:</p></div>
							
				<div class="labelInput">	
					<label for="startingMinutes">m</label>					
					<input type="number" name="minute" id="startingMinutes" min="00" max="59" value="12" >	
				</div>

				<div class="colon"><p>:</p></div>

				<div class="labelInput">
					<label for="startingSeconds">s</label>
					<input type="number" name="second" id="startingSeconds" min="00" max="59" value="0">
				</div>
													
			</div>
			<div>
				<input type="submit" name="countdownButton" id="countdownButton" value="START" class="button">
				<input type="reset" name="resetTimerButton" id="resetTimerButton" value="RESTART" class="button">
			</div>			
		</form>
	</main>
	<footer class="pageButton">
		<?php include('footer.html') ?>
	</footer>
	
	<script type="text/javascript" src="timer.js"></script>
</body>
</html>