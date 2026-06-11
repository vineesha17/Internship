var n = 2;

function square(num) {
    return num * num;
}

var square1 = square(n);
var square2 = square(3);

console.log(square1);
console.log(square2);

let name = "Vineesha";
let age = 21;
let isStudent = true;

console.log(name);
console.log(age);
console.log(isStudent);

let a = 10;
let b = 5;

console.log(a + b);
console.log(a - b);
console.log(a * b);
console.log(a / b);
console.log(a % b);

console.log(a > b);
console.log(a < b);
console.log(a == "10");
console.log(a === "10");

let num = 7;

if (num % 2 === 0) {
    console.log("Even");
} else {
    console.log("Odd");
}

let marks = 85;

if (marks >= 90) {
    console.log("Grade A");
} else if (marks >= 70) {
    console.log("Grade B");
} else {
    console.log("Grade C");
}

for (let i = 1; i <= 5; i++) {
    console.log(i);
}

let count = 1;

while (count <= 5) {
    console.log(count);
    count++;
}

function add(x, y) {
    return x + y;
}

console.log(add(5, 3));

const multiply = (x, y) => x * y;

console.log(multiply(4, 5));

let fruits = ["Apple", "Mango", "Banana"];

console.log(fruits[0]);

fruits.push("Orange");
fruits.pop();
fruits.unshift("Grapes");
fruits.shift();

for (let fruit of fruits) {
    console.log(fruit);
}

fruits.forEach(function(fruit) {
    console.log(fruit);
});

let numbers = [1, 2, 3, 4, 5];

let squares = numbers.map(function(num) {
    return num * num;
});

console.log(squares);

let total = 0;

for (let number of numbers) {
    total += number;
}

console.log(total);

let average = total / numbers.length;

console.log(average);

let email = "vineeshamadnani5@gmail.com@gmail.com";

let pattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$/;

console.log(pattern.test(email));

console.log(typeof name);
console.log(typeof age);
console.log(typeof isStudent);
