function time() {

    today = new Date();

    h = ("0" + today.getHours()).slice(-2);
    m = ("0" + today.getMinutes()).slice(-2);
    s = ("0" + today.getSeconds()).slice(-2);
    day = ("0" + today.getDate()).slice(-2);
    month = ("0" + (today.getMonth() + 1)).slice(-2);
    year = today.getFullYear();

    document.getElementById('time').innerHTML= day+"/"+month +"/"+year +" | "+h+":"+m+":"+s;
        setTimeout('time()',500);
}