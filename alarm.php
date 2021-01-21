<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- 	<link rel="stylesheet" href="fontawesome/all.css">
     -->	<link rel="stylesheet" type="text/css" href="oclock.css">
    <link rel="stylesheet" type="text/css" href="general.css">
</head>
<body>
<main>
    <input type="datetime-local" id="alarmTime">
    <button onclick="setAlarm(this);" id="alarmButton">GO</button>

    <div id="alarmOption">
        <button onclick="snooze()">Snooze 5 minutes</button>
        <button onclick="stopAlarm()"> Stop Alarme</button>

    <script>
        var alarmSound = new Audio();
        alarmSound.src = "sonnerie.mp3";
        var alarmTimer;

        function setAlarm(button) {
            var ms = document.getElementById('alarmTime').valueAsNumber;
            if(isNaN(ms)) {
                alert('Invalid Date');
                return;
            }
            var alarm = new Date(ms);
            var alarmTime = new Date(alarm.getUTCFullYear(), alarm.getUTCMonth(), alarm.getUTCDate(), alarm.getUTCHours(), alarm.getMinutes(), alarm.getUTCSeconds());
            var differenceInMs = alarmTime.getTime() - (new Date()).getTime();

            if(differenceInMs < 0) {
                alert('En retard !');
                return;
            }

            alarmTimer = setTimeout(initAlarm, differenceInMs);

            button.innerText = 'Annuler'
            button.setAttribute('onclick', 'cancelAlarm(this);')

        };

        function cancelAlarm(button) {
            button.innerText = 'Démarrer';
            button.setAttribute('onclick', 'setAlarm(this);');
            clearTimeout(alarmTimer);
        }

        function initAlarm() {
            alarmSound.play();
            document.getElementById('alarmOption').style.display ='';

        };

        function stopAlarm() {
            alarmSound.pause();
            alarmSound.currentTime = 0;
            document.getElementById('alarmOption').style.display = 'none';
            cancelAlarm(document.getElementById('alarmButton'));
        };

        function snooze() {
            stopAlarm();
            setTimeout(initAlarme, 36000);
        };

</script>
</main>
<footer class="pageButton">
    <?php include('footer.html') ?>
</footer>
</body>