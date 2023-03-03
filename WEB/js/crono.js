
const stopwatch = document.getElementById('stopwatch');
const playPauseButton = document.getElementById('play-pause');
const secondsSphere = document.getElementById('seconds-sphere');

let stopwatchInterval;
let runningTime = 0;

const playPause = () => {
    const isPaused = !playPauseButton.classList.contains('running');
    if (isPaused) {
        playPauseButton.classList.add('running');
        start();
    } else {
        playPauseButton.classList.remove('running');
        pause();
    }
}

const pause = () => {
    secondsSphere.style.animationPlayState = 'paused';
    clearInterval(stopwatchInterval);
}

const stop = () => {
    secondsSphere.style.transform = 'rotate(-90deg) translateX(60px)';
    secondsSphere.style.animation = 'none';
    playPauseButton.classList.remove('running');
    runningTime = 0;
    clearInterval(stopwatchInterval);
    stopwatch.textContent = '00:00:00.0';
}

const start = () => {
    secondsSphere.style.animation = 'rotacion 60s linear infinite';
    let startTime = Date.now() - runningTime;
    secondsSphere.style.animationPlayState = 'running';
    stopwatchInterval = setInterval( () => {
        runningTime = Date.now() - startTime;
        stopwatch.textContent = calculateTime(runningTime);
    }, 1000)
}

const calculateTime = runningTime => {
    const total_seconds = Math.floor(runningTime / 1000);
    const total_minutes = Math.floor(total_seconds / 60);
    const total_hours=Math.floor(total_minutes / 60);
    const display_seconds = (total_seconds % 60).toString().padStart(2, "0");
    const display_minutes = total_minutes.toString().padStart(2, "0");
    const display_hours = total_hours.toString().padStart(2, "0");

    return `${display_hours}:${display_minutes}:${display_seconds}`
}

function validar(){
    var letras = document.getElementById("letra").value;
    if (letras==''){
        alert("por favor digita una letra a validar no puede estar el campo vacio ");

    }
    else if(letras){
        alert("nesesitamos que dijites una letra:" );
    }

    else{
        switch(letras){
            case'a';
            case'e';
            case'i';
            case'e';
            case'o';
            case'u';
            alert("la letra que dijitaste es: "+letras+"es una vocal");
            break;
            default: 
            alert("la letra que dijitaste es "+letras+"es una consonante");
        }
    }
}
