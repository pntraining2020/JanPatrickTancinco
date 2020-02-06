var clockInButton = document.getElementById('clockIn');
var clockStartButton = document.getElementById('clockStart');
var clockEndButton = document.getElementById('clockEnd');
var clockOutButton = document.getElementById('clockOut');
var currentPerson = null;

var clockIn = false;

clockInButton.disabled = true;
clockStartButton.disabled = true;
clockEndButton.disabled = true;
clockOutButton.disabled = true;

var today = new Date();
// var today1 = new Date();

var time = today.getHours() + ":" + today.getMinutes()

// var difference = (b - a) / 1000;


clockInButton.addEventListener('click', function(){
    document.getElementById('inTime').innerHTML = time;
    clockInButton.disabled = true;
    clockStartButton.disabled = false;
    clockOutButton.disabled = false;
});

clockStartButton.addEventListener('click', function(){
    clockStartButton.disabled = true;
    clockEndButton.disabled = false;
});

clockEndButton.addEventListener('click', function(){
    clockStartButton.disabled = false;
    clockEndButton.disabled = true;
});

clockOutButton.addEventListener('click', function(){
    clockStartButton.disabled = true;
    clockOutButton.disabled = true;
    clockInButton.disabled = false;
});

function selectFunction(){
    currentPerson = document.getElementById("select").value;
    if(clockIn == false){
        clockInButton.disabled = false;
        clockIn = true;
    }
    else {
        clockInButton.disabled = true;
        clockIn = false;
    }
    document.getElementById('CurrentTime').innerHTML = time;
    document.getElementById('inTime').innerHTML = '';

}

