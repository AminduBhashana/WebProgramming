document.getElementById("calculate").addEventListener("click",function(){
    let leg1 = document.getElementById("leg1").value;
    let leg2 = document.getElementById("leg2").value;
    let leg3 = document.getElementById("leg3");

    leg3.value = Math.sqrt(leg1**2 + leg2**2);
    
});