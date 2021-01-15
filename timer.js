$(document).ready(function(){

			const countdownEl = $('#countdown'); 
			const resetTimerButton = $('#resetTimerButton');
			const countdownButton = $('#countdownButton');


			countdownButton.click(function(e){

				e.preventDefault();

				resetTimerButton.css('display','block');
				countdownButton.css('display','none');

				$('#startingHours').attr('disabled','disabled');	
				$('#startingMinutes').attr('disabled','disabled');
				$('#startingSeconds').attr('disabled','disabled');

				let startingHours = $('#startingHours').val(),
				hoursConvertMin = startingHours * 60, 
				startingMinutes = startingHours > 0 ? parseInt(hoursConvertMin) + parseInt($('#startingMinutes').val()) : $('#startingMinutes').val(), 
				startingSeconds = $('#startingSeconds').val(),
				time = startingMinutes > 0 ? parseInt(startingMinutes) * 60 + parseInt(startingSeconds):parseInt(startingSeconds);	

				let launchTimer  = setInterval(function(){timer()},1000);

				function timer(){

					console.log(time);

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

					countdownEl.html(`${hours} : ${minutes} : ${seconds}`);

					//decrease the time
					time--;
					//si le total du minuteur vaut moins que 0 alors il égal 0 sinon il vaut time
					time = time < 0 ? 0 : time; 

				};

				resetTimerButton.click(function(e){

					e.preventDefault();

					clearInterval(launchTimer);
					resetTimerButton.css('display','none');
					countdownButton.css('display','block');
					
					countdownEl.empty();
					$('#startingHours').val(0);
					$('#startingMinutes').val(12);
					$('#startingSeconds').val(0);

					$('#startingHours').removeAttr('disabled');	
					$('#startingMinutes').removeAttr('disabled');
					$('#startingSeconds').removeAttr('disabled');
				
				});		

			});	

		});