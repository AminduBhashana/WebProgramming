document.getElementById("calculate").addEventListener("click",function(){
    let b = document.getElementById("base").value;
    let h = document.getElementById("height").value;
    let area = document.getElementById("area");

    area.value = (1/2)*h*b;
    
});