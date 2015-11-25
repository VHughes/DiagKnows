window.onload = function() {

var editBtn = document.getElementById('editBtn');
var img = document.getElementById('image');
    
editBtn.onclick = function() {
    console.log("Hello");
    
    var div = document.getElementById('edit');
    
    var choice1 = document.createElement('input');
    var choice2 = document.createElement('input');
    var choice3 = document.createElement('input');
    var choice4 = document.createElement('input');
    var choice5 = document.createElement('input');
    
    var submit = document.createElement('button');
    
    edit.appendChild(choice1);
    edit.appendChild(choice2);
    edit.appendChild(choice3);
    edit.appendChild(choice4);
    edit.appendChild(choice5);
    
    choice1.type = 'radio';
    choice2.type = 'radio';
    choice3.type = 'radio';
    choice4.type = 'radio';
    choice5.type = 'radio';
    

    
    div.style.width = "300px";
    div.style.height = "300px";
    div.style.border = "2px"; 
    
    
    var avatar="";
    
}

//avatar = document.querySelector('input[name="avi"]:checked').value;
};