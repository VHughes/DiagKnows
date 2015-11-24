
window.fbAsyncInit = function() {
    FB.init({
      appId      : '477303215782687',
      xfbml      : true,
      version    : 'v2.5'
    });
    
    $.ajax({
    url: "servercopy.php",     
    data: {
        type: 3,           
        },             
    dataType: "html",      
    type: "get",          
    success: "",
        })
var fb = document.createElement("button");
fb.onclick = function(){
alert("hi");

}
var login = document.getElementById("facebook");
login.onclick = function(){
    FB.login(function(resp){
        console.log(resp);

        
    var facebook = {
    name: "",
    id: "",
    age: "",
    device: "",
    gender: "",
};
     if(resp.status == "connected"){
            FB.api("/me/name", function(resp2){
            
            var name = FB.name;
            facebook.name = name;
            console.log(resp2);

    })

    console.log(name);
    console.log(facebook);
            
            }
       
    
    })
    
    };
      
      
  };
    
    
    

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "http://localhost/page1.html";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
};
</script>