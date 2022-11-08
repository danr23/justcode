let alo = document.getElementById("alo");
let no = document.getElementById("no");
function init() {
sec = 0;
setInterval(tick, 1000);
}
function tick() {
sec++;
document.getElementById("alo").childNodes[0].nodeValue = sec;
}
init();
function init2() {
sec2 = 0;
setInterval(tick2, 10);
}
function tick2() {
sec2++;
document.getElementById("no").childNodes[0].nodeValue = sec2;
if (sec2 == 100) {
sec2 = 0;
}
}
init2();

function how() {
min = 0;
setInterval(yes, 1);
}
function yes() {
document.getElementById("yes").childNodes[0].nodeValue = min;
if (sec == 59) {
sec = -1;
setTimeout(function() {
min++;}, 1000);

}
}
how();
