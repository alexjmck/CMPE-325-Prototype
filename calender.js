function updateClock() {
    const t = new Date;
    let hours = t.get();
    let minutes = t.getMinutes();
    let seconds = t.getSeconds();

    hours = ("0" + hours).slice(-2);
    minutes = ("0" + minutes).slice(-2);
    seconds = ("0" + seconds).slice(-2);

    if (hours < 10) {

    }

    document.getElementById("curr-date").innerHTML = `${hours}:${minutes}:${seconds}`;
}