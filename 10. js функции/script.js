
// 1. определение функции
// function getSum(){
//     // тело функции
//     let num1 = 5;
//     let num2 = 6;

//     console.log(num1 + num2);
// }

// 2. вызов функции
// getSum();

// function carSum(){
//     let brand = 'Audi';
//     let model = 'TT';
//     console.log(brand + ' ' + model);
// }
// carSum();
// carSum();

// function getStr(){
//     let str1 = 'Hello';
//     let str2 = 'world!';
    
//     console.log(`${str1} ${str2}`);
// }

// getStr();
// getStr();

// аргументы 
// function greet( userName ){
//     console.log(`Привет, ${userName}`);
// }

// greet('Петя');
// greet('Маша');
// greet('Анна');
// greet('Медвед');

// function sumNum(param1, param2) {
//     console.log(param1 + param2);
// }

// sumNum(2, 5);
// sumNum(10, 15);

//  function summ(a,b){
//     console.log(`${a} + ${b} = ${a+b}`);
    
// }
// summ(3,44);
// summ(66,700);

// function greet(sum1, sum2){
//     let result = sum1 + sum2;
//     console.log(`Итого: ${result}`);
// }
// greet(8,12);
// greet(10,16);


// ПАРАМЕТРЫ ПО УМОЛЧАНИЮ

// function greet( age, firstName = 'Пользователь' ){
//     console.log(`Привет, ${firstName}, возраст: ${age}`);
// }

// greet(22, 'Ирина');
// greet(34);


// return
// function getSum(sum1, sum2){
//     let result = sum1 + sum2;
//     console.log(`Итого: ${result}`);

//     return result;
// }

// let sum1 = getSum(34, 5654);
// let sum2 = getSum(2312, 5656);
// let sum3 = getSum(645, 213);

// console.log(sum1, sum2, sum3);

// function helloName(name){
//     return 'Привет '+name;
// }
// console.log(helloName('Иван!'));

// function string(hello, firstName, LastName, addition) {
//     let name = hello + ' ' + firstName + ' ' + LastName;
//     let fullGreet = `${name}, ${addition}`;

//     return fullGreet;
// }

// let str1 = string ('Привет','Иван', 'Иванов', 'добро пожаловать в программисты!!!');
// let str2 = string ('Hello','Jone', 'Jonson', 'welcome to programms!!!');

// console.log(str1);
// console.log(str2);

// массив с ценами за блюда
let meals = [100, 300, 418, 328, 321];
// налог
let tax = 20;
// чаевые
let tip = 5;
// скидка
let discount = 10;

// посчитайте сумму чека за обед 
// 1. Посчитать сумму элементов массива
// 2. Добавить налог к сумме
// 3. Добавить чаевые
// 4. Вычесть скидку
// 5. Вывести сообщение клиенту о сумме итогового счета

// 1. считаем сумму в массиве
function sumArray(arr){
    let sum = 0;
    for(let item of arr){
        sum += item;
    }
    //console.log(sum);
    return sum;
}

let billSum = sumArray(meals);
// console.log(billSum);

// 2. вычисление суммы счета с учетом налогов
function calculateCharge(billSum, tax = 18){
    // реализация расчетов суммы счета с учетом налогов
    return billSum + (billSum * tax / 100);

    // if(sign === '+'){
    //     return billSum + (billSum * tax / 100);
    // }else if( sign === '-'){
    //     return billSum - (billSum * discount / 100);
    // }
} 
// сумма счета с учетом налога
let billSumTax = calculateCharge(billSum, tax);
// console.log(billSumTax);

// 3. Сумма счета с учетом чаевых
let billSummTaxTip = calculateCharge(billSumTax, 5);
// console.log(billSummTaxTip);

// 4. Вычитаем скидку из счета
function calculateDiscountBill(billSum, discount){
    return billSum - (billSum * discount / 100);
}

let totalBill = calculateDiscountBill(billSummTaxTip, discount);
// console.log(totalBill);

// 5. Формирование сообщения клиенту
function showBillInfo(bill){

    bill = Math.round(bill);
    return `
        <h2>Итоговая сумма счета: ${bill} рублей</h2>
    `;
}

console.log( showBillInfo(totalBill) );

let box = document.querySelector('.box');
box.insertAdjacentHTML('beforeend', showBillInfo(totalBill));


