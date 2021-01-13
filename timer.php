<h1>MINUTEUR</h1>

<p id="countdown" class="time"></p>

<form class="countdown" >
	
	<div class="number">
					
		<div class="labelInput">		
			<label for="startingHours">h</label>			
			<input type="number" name="hour" id ="startingHours" min="00" max="24" value="0" >
		</div>	

		<div class="colon"><p>:</p></div>
					
		<div class="labelInput">	
			<label for="startingMinutes">m</label>					
			<input type="number" name="minute" id="startingMinutes" min="00" max="59" value="0" >	
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