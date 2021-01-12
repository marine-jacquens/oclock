<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- 	<link rel="stylesheet" href="fontawesome/all.css">
 -->	<link rel="stylesheet" type="text/css" href="oclock.css">
</head>
<body>
	<main>

		<section class="timer">

			<h1>MINUTEUR</h1>
			<p id="countdown" class="time"></p>

			<form class="countdown" >
				<div class="number">
					<div>
						<label for="startingHours">Heures</label>
						<input type="number" name="hour" id ="startingHours" min="00" max="24" >
					</div>	
					<p>:</p>
					<div>
						<label for="startingMinutes">Minutes</label>
						<input type="number" name="minute" id="startingMinutes" min="00" max="59" >
					</div>
					<p>:</p>
					<div>
						<label for="startingSeconds">Seconds</label>
						<input type="number" name="second" id="startingSeconds" min="00" max="59" >	
					</div>					
				</div>
				<div>
					<input type="submit" id="countdownButton" value="START">
				</div>			
			</form>
		
		<style type="text/css">

			body{
				margin:0;
				font-family: arial;
			}


			.timer{
				display: flex;
				flex-direction: column;
				align-items: center;
				background-color:black;
				padding:2%;
			}

			.timer h1{
				color: white;
			}

			.time{
				color:white;
			}

			.countdown{
				display:flex;
				flex-direction: column;
				align-items: center;

			}

			.number {
				display:flex;
				align-content: baseline;
				margin-bottom:2%;
			}

			.number input{
			}

			.number p{
				margin-top:0;
				margin-bottom:0;
				margin-right:1%;
				margin-left:1%;
				color:white;
			}
			
		</style>

		</section>

		<section class="stopwatch">
			
		</section>

		<section class ="buzzer">
			
		</section>

		<section class="clock">
			
		</section>
		
		
	</main>
	<footer>
		
	</footer>

	<script type="text/javascript">

		$(document).ready(function(){

			const countdownEl = $('#countdown'); 

			$('#countdownButton').click(function(e){

				e.preventDefault();

				let startingHours = $('#startingHours').val(),
				hoursConvertMin = startingHours * 60, 
				startingMinutes = startingHours > 0 ? parseInt(hoursConvertMin) + parseInt($('#startingMinutes').val()) : $('#startingMinutes').val(), 
				startingSeconds = $('#startingSeconds').val(),
				time = startingMinutes > 0 ? parseInt(startingMinutes) * 60 + parseInt(startingSeconds):parseInt(startingSeconds);

				setInterval(function(){

				//pour obtenir le nbr de minutes on divise le nbr de seconds total par 60
				const totalMinutes = Math.floor(parseInt(time)/60);//130 minutes

				let hours = Math.floor(totalMinutes/60);// 2heures

				let minutes = totalMinutes - hours * 60 ; 

				//Le reste des seconds après la division 600/60 soit 0 quand le temps s'est écoulé                                                                
				let seconds = time % 60;

				//(?) si les seconds sont plus petites que 10 affichage 0 + la second ou (:) juste les seconds
				seconds = seconds < 10 ? '0' + seconds : seconds;
				minutes = minutes < 10 ? '0' + minutes : minutes;
				hours = hours < 10 ? '0' + hours : hours;

				countdownEl.html(`${hours}: ${minutes}: ${seconds}`);

				//decrease the time
				time--;
				//si le total du minuteur vaut moins que 0 alors il égal 0 sinon il vaut time
				time = time < 0 ? 0 : time; 

				}, 1000);			

			});

		});

		
	</script>

	<script type="text/javascript" src="app.js"></script>
</body>
</html>