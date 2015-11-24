window.onload = function(){

var login = document.getElementById("login");
var fbButton = document.getElementById("facebookbutt");  
var form = document.getElementById("form");
var signupForm = document.getElementById("signUpForm");
var addSymp = document.getElementById("addSymp");
    



addSymp.onclick = function() {
    console.log(hi);
}    

login.onclick = function(){

    
  // gets the ID from the HTML 
  
  var email = document.createElement("input");
  form.appendChild(email);
  email.id = "email";
  email.name = "email";
  email.className = "input";
  email.placeholder = "Email Address";
  
  // created two new divs, 1 for password and 1 for email address once login is clicked

  var pass = document.createElement("input");
  form.appendChild(pass);
  pass.className = "input";
  pass.id = "pass";
  pass.name = "pass";
  pass.type = "password"; 
  pass.placeholder = "Password";
  
  // the new password input, I haven't given it any restrictions yet ie. character limits etc
 
  
  login.style.display = "none";
  document.getElementById("signup").style.display = "none";
  login.style.display = "none";
fbButton.style.display = 'none'; 
  
  // telling the "login" button to disapear once the login button is created 

  var log = document.createElement("button");
  form.appendChild(log);
  log.id = "button";
  log.className = "loginbutt";
  log.innerHTML = "Log In!";
  // here's a second login button only after you've filled in your password and email 
  
  /*log.onclick = function(){
     
  document.body.innerHTML = "";
  var search = document.createElement("button");
  var rate = document.createElement("button");
  document.body.appendChild(rate);
  document.body.appendChild(search);
  search.className = "loginbutt";
  rate.className = "loginbutt";
  search.id = "button";
  rate.id = "button";
  search.innerHTML = "Search!";
  rate.innerHTML = "Rate!";
      
         search.onclick = function(){
              document.body.innerHTML = "";
              var symp1 = document.createElement("input");
              var symp2 = document.createElement("input");
              var symp3 = document.createElement("input");
              document.body.appendChild(symp1);
              document.body.appendChild(symp2);
              document.body.appendChild(symp3);
              symp1.className = "input";
              symp2.className = "input";
              symp3.className = "input";
              symp1.id = "symp1";
              symp2.id = "symp2";
              symp3.id = "symp3";
              document.getElementById("symp1").placeholder = "Enter Your Symptom";
              document.getElementById("symp2").placeholder = "Enter Your Symptom";
              document.getElementById("symp3").placeholder = "Enter Your Symptom";
             
              
              var searchsymp = document.createElement("button");
              document.body.appendChild(searchsymp);
              searchsymp.className = "loginbutt";
              searchsymp.id = "searchsymp";
              searchsymp.innerHTML = "Search!";
  
                searchsymp.onclick = function(){
                    
                 var symptoms = [
                   "Cold",
                   "Flu",
                   "Food Poisoning"
                ];
                    
                    for (var i =0; i < symptoms.length; i++) {
                        img += "<ol><li>" + symptoms[i]+ "</li></ol>";
                        //var div = document.createElement("div");
                        var div = document.getElementById("divselect");
                        var img = document.createElement("img");
                        document.body.appendChild(div);
                        div.appendChild(img);
                        div.innerHTML = symptoms[i];
                    }
                    
                    console.log(symptoms);

                }     
            }
  } */ 
    
  //back button creation ------->
  var back = document.createElement("button");
  document.body.appendChild(back);
  back.id='button';
  back.className='backbutt';
  back.innerHTML = "Back";
  //back button click function --->
  back.onclick = function (){
        login.style.display = "";
        document.getElementById("signup").style.display = "";
        fbButton.style.display = '';
        back.style.display = 'none';
        email.style.display = 'none';
        pass.style.display = 'none';
        log.style.display = 'none';
        
  } 
  // <----------- 
    
  };
    
    var signup =
document.getElementById("signup");

console.log("hi");
signup.onclick = function(){
  
  //var createAccountDiv = document.createElement("div");
  //document.body.appendChild(createAccountDiv);
 
  var signName = document.createElement("input");
  signupForm.appendChild(signName);
  signName.id = "signName";
  signName.name = "signName";
  signName.className = "input";
  signName.placeholder = "First Name";
  
  var signEmail = document.createElement("input");
  signupForm.appendChild(signEmail);
  signEmail.id = "signEmail";
  signEmail.name = "signEmail";
  signEmail.className = "input";
  signEmail.placeholder = "Email Address";
  
  var signPass = document.createElement("input");
  signupForm.appendChild(signPass);
  signPass.type = 'password';
  signPass.id = "signPass";
  signPass.name = "signPass";
  signPass.className = "input";
  signPass.placeholder = "Password";
  
  var confPass =  document.createElement("input");
  signupForm.appendChild(confPass);
  signPass.type = 'password';
  confPass.id = "confPass";
  confPass.name = "confPass";
  confPass.className = "input";
  confPass.placeholder = "Confirm Password";
  
  //new create account button --> 
  var sign = document.createElement("button");
  signupForm.appendChild(sign);
  sign.id = "button";
  sign.name = 'register';
  sign.className = "loginbutt";
  sign.innerHTML = "Create Account";
  
  signup.style.display = "none";
  login.style.display = "none";
  fbButton.style.display = 'none';
  
    sign.onclick = function(){
      
        document.body.innerHTML = "";
        var search = document.createElement("button");
        var rate = document.createElement("button");
            document.body.appendChild(rate);
            document.body.appendChild(search);
            search.className = "loginbutt";
            rate.className = "loginbutt";
            search.id = "button";
            rate.id = "button";
            search.innerHTML = "Search!";
            rate.innerHTML = "Rate!";
  }
  //back button creation ------->
  var back2 = document.createElement("button");
  document.body.appendChild(back2);
  back2.id='button';
  back2.className='backbutt';
  back2.innerHTML = "Back";
  //back button click function ---->
  back2.onclick = function (){
    login.style.display = "";
    document.getElementById("signup").style.display = "";
    fbButton.style.display = 'block';
    back2.style.display = 'none';
    sign.style.display = 'none';
    signEmail.style.display = 'none';
    signName.style.display = 'none';
    signPass.style.display = 'none';
    confPass.style.display = 'none';
    // <--------

    
  }
}

//add symptom



};



