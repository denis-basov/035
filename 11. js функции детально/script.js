// функциональная область видимости
/*
let userName = 'Ivan123';

function greet(){

    let userName = 'Irina123';

    function test(){
        let userName = 'Pavel123';
        console.log(`Hello, ${userName}!`);
    }
    test();

    return `Hello, ${userName}!`;
}

console.log(userName);

console.log( greet() );
*/

// блочная область видимости
/*
let age = 34;
let message = '';

if(age >= 18){
    message = 'Добро пожаловать';
}else{
    message = 'Доступ запрещен';
}

console.log(message);
*/


// функциональное выражение

// 1 определение функции
// function square(num){
//     return num * num;
// }

// 2 функциональное выражение
// let square = function(num){
//     return num * num;
// }

// console.log(square(133));

/*
// 1 задание
function sumArray(arr){
    let sum = 0;
    for(let item of arr){
        sum += item;
    }

    return sum;
}

// перепишите функцию sumArray в функциональное выражение

let sumArray = function (arr){
    let sum = 0;
    for(let item of arr){
        sum += item;
    }

    return sum;
}

sumArray([1,2,3,4,5,6]);
*/

// функция как аргумент

/*
// 1. внутренняя функция, которую передаем как агрумент
let greet = function (){
    return 'Hello';
}
let age = 12;
let name = 'Ivan';

// 2. в эту функцию будем передавать функцию как агруммент
function superGreet( func, age, userName ){
    //console.log(func);
    // вызываем переданную как аргумент функцию
    console.log( `${func()}, ${userName}. Age: ${age}` );
}

// 3. вызываем функцию и передаем ей другую как аргумент 
superGreet( greet, age, name );
*/


// возврат функции из функции

// 1. внешняя ф, которая задает диапазон
function setRange(min, max){

    // 2. возвращаемая ф, которая проверяет значение на принадлежность
    function checkValue(value){
        return value >= min && value <= max; // bool
    }
    return checkValue;
}

// задаем диапазоны
let todayRange = setRange(1, 10);
let tomorrowRange = setRange(10, 20);

// проверяем значения на принадлежность
console.log( todayRange(4) );
console.log( todayRange(21) );
console.log( todayRange(54) );
console.log( todayRange(3) );

console.log( tomorrowRange(1) );
console.log( tomorrowRange(14) );
console.log( tomorrowRange(29) );
console.log( tomorrowRange(17) );
