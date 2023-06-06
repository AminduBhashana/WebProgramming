document.getElementById("calculate").addEventListener("click",function(){
    let bdate =  document.getElementById("bdate").value;
    var age  = document.getElementById("answer");
    var years = (new Date(new Date()-new Date(bdate)).getFullYear()-1970) ;
    age.value = "Your Age is "+years;
});

