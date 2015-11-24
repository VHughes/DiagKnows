window.onload = function() {
var addSymp = document.getElementById("addSymp");
var div3 = document.getElementById("input6");


addSymp.onclick = function() {
    var newInput = document.createElement('input');
    div3.appendChild(newInput);
    newInput.className = 'input6-2';
    newInput.placeholder = "Tap to input symptom";
}   

};