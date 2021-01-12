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
</head>
<body>
<main>
    <div class="controls">
        <button class="btn btn-light" onclick="start()">Start</button>
        <button class="btn btn-light" onclick="pause()">Pause</button>
        <button class="btn btn-light" onclick="stop()">Stop</button>
        <button class="btn btn-light" onclick="restart()">Restart</button>
        <button class="btn btn-light" onclick="lap()">Laps</button>
        <button class="btn btn-light" onclick="resetLaps()">Reset Laps</button>
    </div>
    <div class="stop">00:00:00</div>
    <ul class="laps"></ul>

<script type="text/javascript">

    var ms = 0, s = 0, m = 0;
    var timer;
    var stopChro = document.querySelector('.stop');
    var lapsTour = document.querySelector('.laps');

    function start() {
        if(!timer) {
            timer = setInterval(run, 10);
        }
    }

    function run() {

        stopChro.textContent = getTimer();
        ms++;
        if(ms == 100) {
            ms = 0;
            s++;
        }

        if( s == 60) {
            s = 0;
            m++;

        }
    }

    function pause() {
        stopTimer();
    }

    function stop() {
        stopTimer();
        ms = 0
        s = 0
        m = 0
        stopChro.textContent = getTimer();
    }

    function stopTimer() {
        clearInterval(timer);
        timer = false

     }

     function getTimer() {
        return stopChro.textContent = (m < 10 ? "0" + m : m) + ":" + (s < 10 ? "0" + s : s) + ":" + (ms < 10 ? "0" + ms : ms);

     }

     function restart() {
        stop();
        start();

     }

     function lap() {
        if(timer) {
            var li = document.createElement('li');
            li.innerText = getTimer();
            lapsTour.appendChild(li);
        }
     }

     function resetLaps() {
        lapsTour.innerHTML = '';
     }

</script>

</main>
</body>
