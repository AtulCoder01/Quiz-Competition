//keyboard lock
function showKeyCode(e)
{
alert("Inside function showKeyCode(e)");
var keycode =(window.event) ? event.keyCode : e.keyCode;

if(keycode == 116)
{
event.keyCode = 0;
event.returnValue = false;
return false;
}
}

