document.getElementById("calculate").addEventListener("click",function(){
    let radius = parseInt(document.getElementById("radius").value);
    let height = parseInt(document.getElementById("height").value);
    let area = document.getElementById("area");
    let volume = document.getElementById("volume");

    area.value = (2*(22/7)*radius*height) + (2*(22/7)*radius*radius);
    volume.value = (22/7)*radius*radius*height;
});