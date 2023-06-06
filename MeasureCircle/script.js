document.getElementById("calculate").addEventListener("click",function(){
    let radius = document.getElementById("radius").value;
    let perimeter = document.getElementById("perimeter");
    let area = document.getElementById("area");

    perimeter.value = 2*(22/7)*parseInt(radius);
    area.value = (22/7)*parseInt(radius)*parseInt(radius);
});