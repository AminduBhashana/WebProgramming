let num1 = document.getElementById("firstnumber");
let num2 = document.getElementById("secondnumber");
let result = document.getElementById("result");

// Addition
document.getElementById("add").addEventListener("click",function(){
    result.value = parseInt(num1.value) + parseInt(num2.value);
});

//Subtraction
document.getElementById("sub").addEventListener("click",function(){
    result.value = parseInt(num1.value) - parseInt(num2.value);
});

//Multiplication
document.getElementById("multiply").addEventListener("click",function(){
    result.value = parseInt(num1.value) * parseInt(num2.value);
});

//Division
document.getElementById("div").addEventListener("click",function(){
    result.value = parseInt(num1.value) / parseInt(num2.value);
});