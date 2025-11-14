const display= document.getElementById ("display") ;
function appendValue (value) {display.value+=value;}
function clearDisplay() {display.value="";}
function deleteLast ()
{display.Value=display.Value.slice(0,-1);

}
function calculate(){try{display.value=eval(display.value);}
                    catch{display.value="error;"}}