var up, down;
var min1, sec1;
var cmin1, csec1, cmin2, csec2;
Down();
function Minutes(data) {
    for (var i = 0; i < data.length; i++)
        if (data.substring(i, i + 1) == ":")
            break;
    return (data.substring(0, i));
}
function Seconds(data) {
    for (var i = 0; i < data.length; i++)
        if (data.substring(i, i + 1) == ":")
            break;
    return (data.substring(i + 1, data.length));
}
function Display(min, sec1) {
    sec = sec1 / 10;
    var disp;
    if (min <= 9) disp = " 0";
    else disp = " ";
    disp += min + ":";
    if (sec <= 9) disp += "0" + sec;
    else disp += sec;
    return (disp);
}
function Down() {
    bd = document.getElementById("bd").style.visibility = "hidden";
    cmin2 = 1 * Minutes("0:00");
    csec2 = 0 + Seconds("0:00");
    DownRepeat();
}
function DownRepeat() {
    if (st == true) {
        ct3++;
        ct++;
        csec2++;
        if (csec2 == 600) {
            csec2 = 0;
            cmin2++;
        }
        window.document.getElementById("downtxt").value = Display(cmin2, csec2);
        down = setTimeout("DownRepeat()", 100);
    }
}
