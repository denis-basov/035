
let users = [
    {
        userName: 'Ivan999',
        firstName: 'Ivan',
        lastName: 'Ivanov',
        age: 11,
        phones: ['911', '01', '9874'],
    },
    {
        userName: 'Anna123',
        firstName: 'Anna',
        lastName: 'Ivanova',
        age: 13,
        phones: ['456', '04', '546221'],
    },
    {
        userName: 'Sergey19',
        firstName: 'Sergey',
        lastName: 'Petrov',
        age: 33,
        phones: ['2345', '3423', '345234'],
    }
];


let usersStr = `<div class="users">`;
for( let user of users){
    usersStr += `
        <div class="user">
            <h2>First Name: ${user.firstName}</h2> 
            <h3>Last name: ${user.lastName}</h3>
            <p>Age: ${user.age}.</p>
            <p>Phones:</p>
            <ul class="list">
                <li class="list-item">${user.phones.join('</li><li class="list-item">')}</li>
            </ul>
        </div>
    `;
}
usersStr += '</div>';
console.log(usersStr);

// 1 получаем контейнер для вставки текста
let box = document.querySelector('.box');

// 2 вставляем в контейнер сформированную разметку
box.insertAdjacentHTML('beforeend', usersStr);


// for(let i = 0; i <= 10; i++){
//     console.log('Значение переменной i: ', i);
// }

// выведите в консоль числа от 9 до 2
// for(let i = 9; i >= 2; i--){
//     console.log('Значение переменной i:', i);
// }

// for (let i=1; i<9; i++) {
//     console.log(10-i);
// }

// let fruits = ['Киви', 'Ананас', 'Кокос', 'Апельсин', 'Банан', 'Яблоко', 'Мандарин'];
//console.log(fruits);

// for(let i = 0; i < fruits.length; i++){
//     console.log('Значение переменной i: ', i);
//     console.log(fruits[i]);
// }

let students = ['Тимофеев Михаил Сергеевич','Гаар Артем Дмитриевич','Дорошин Игорь Николаевич','Ерченко Олег Анатольевич','Илья Анатольевич Тихонов','Каменчук Оксана Петровна ','Костина Анжела Владимировна','Негода Владимир Владимирович','Новицкий Алексей Петрович','Страхова Мария Владимировна','Шабанов Самир Эльман оглы','Ширинов Камран Намигович'];

// выведите в консоль список студентов через цикл
// for(let i = 0; i < students.length; i++){
//     console.log('Студент:', students[i]);
// }

// console.log(`<h2>Список студентов</h2> `);
// console.log(`<ol class="users">`);
// for(let i=0; i < students.length; i++){

//     let htmlStr = `<li>${[i+1]}: Фамилия ИО:  ${students[i]}</li>`;

//     console.log(htmlStr);
// };
// console.log(`</ol>`);

// let i = 0;
// while(i <= 10){
//     console.log(i);
//     i++;
// }


// let i = 0;
// while(i <= 10){
//     console.log(i);
//     i++;
//     if(i === 5){
//         break;
//     }
// }

// let i = 0; // 5
// while(i <= 10){ // 5 <= 10 - true
//     i++;
//     if(i === 5){ // 5 === 5 - true
//         continue;
//     }
//     console.log(i);
// }

// let fruits = ['Киви', 'Ананас', 'Кокос', 'Апельсин', 'Банан', 'Яблоко', 'Мандарин'];

// for(let fruit of fruits){
//     console.log(`<li>Fruit: ${fruit}</li>`);
// }


// let user = {
//     userName: 'Ivan999',
//     firstName: 'Ivan',
//     lastName: 'Ivanov',
//     age: 11,
//     phones: ['911', '01', '9874'],
// };



// console.log(user);
// for( let key in user){
//     console.log( `${key}: ${user[key]}` );
// }

let numbers = [1,3,4,6,7,4,5,6,8,9,3,2];

// let sum = 0;

// for( let number of numbers){
//     sum += number; // 0 += 1, 1 += 3, 4 += 4
//     // console.log(sum, number);
// }

// console.log(sum);

// let sum = 1;
// let i = 0;

// for(let number of numbers){

//     console.log(i);
//     // 0 * 1 = 0 * 3 = 0 * 4 ....
//     sum *= number;
//     //sum = sum * number;
//     i++;
// }
// console.log(sum);

// let sum = 1;
// for(let i = 0; i < numbers.length; i++){
//     sum *= numbers[i];
// }
// console.log(sum);

// let fruits = ['Киви', 'Ананас', 'Кокос', 'Апельсин', 'Банан', 'Яблоко', 'Мандарин'];

// let totalStr = 'Фрукты: ';
// for( let fruit of fruits){
//     totalStr += fruit + ' ';
// }
// console.log(totalStr);
