// my age
let birthYear = 2002;
let currentYear = new Date();
let yr = currentYear.getFullYear();

let age = yr - birthYear;
document.querySelector(".age").innerText = age;
document.querySelector(".year").innerText = yr;