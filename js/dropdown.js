// TODO: Make class toggle logic more efficient

// Global variables
window.onload = function(){
var maxChoiceCount = 3;

// DOM elements
var choiceItems   = document.querySelectorAll(".choice-list6 li");


// Update max count label


// Checklist item handler
var checkItem = function() {
  activeItems = document.querySelectorAll(".choice-list6 li.active");
  
  if (activeItems.length === maxChoiceCount) {
    if (this.className === "active") {
      this.className = "";
    }
  } else {
    if (this.className === "active") {
      this.className = "";
    } else {
      this.className = "active";
    }
  }
}

// Handle logic to enforce max count
for (var i = 0, l = choiceItems.length; i < l; ++i) {
  choiceItems[i].onclick = checkItem
}
}