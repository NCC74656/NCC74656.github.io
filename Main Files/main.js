var myName = "Pinnacle";


var black = [0, 0, 0];
var letterColors = [black];

drawName(myName, letterColors);

if(10 < 3)
{
    bubbleShape = 'square';
}
else
{
    bubbleShape = 'circle';
}

bounceBubbles();

var elem = document.getElementById('myCanvas');
elem.addEventListener('click', function(event) {
    location.href="https://pinnacle.tesd.net/Pinnacle/PIV/Logon.aspx?ReturnUrl=%2fPinnacle%2fPIV%2fDefault.aspx"

}, false)