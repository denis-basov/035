let students = ['Тимофеев Михаил Сергеевич','Гаар Артем Дмитриевич','Дорошин Игорь Николаевич','Ерченко Олег Анатольевич','Илья Анатольевич Тихонов','Каменчук Оксана Петровна ','Костина Анжела Владимировна','Негода Владимир Владимирович','Новицкий Алексей Петрович','Страхова Мария Владимировна','Шабанов Самир Эльман оглы','Ширинов Камран Намигович'];
let rem = ['avto', 'norm', 'beer', 'tea', 'bag'];

let fruits = ['Киви', 'Ананас', 'Кокос', 'Апельсин', 'Банан', 'Яблоко'];
const pets = ['cat', 'dog', 'bat', 'mouse'];
const animals = ['ant', 'bison', 'camel', 'duck', 'elephant'];
const numbers = [6, 11, 2, 10, 22, 1, 30, 4, 2, 7, 12];


// forEach

// fruits.forEach( function( fruit, index, arr ){
//     console.log(`Fruit: ${fruit}, index: ${index}, array: ${arr.join(', ')}`);
// } );

// fruits.forEach( function( item ){
//     console.log(`Fruit: ${item}.`);
// } );

// 2 задание
// const animals = ['ant', 'bison', 'camel', 'duck', 'elephant'];
// переберите через forEach массив и выведите в консоль строки с иснользованием элементов
// массива и индексов

// let mas = [4,56,'orange', 'aplle',342,'cherry','banana', 33];

// mas.forEach( function (znachenie, index) {
//     console.log(`Element: ${znachenie}, index: ${index}`);
// } );

// animals.forEach( function(item, index) { 
//     console.log(`Животное: ${item} Номер: ${index}`); 
// });

// animals.forEach( function(pet, ind){
//      console.log(`В зоопарке живет ${pet} в клетке с номером ${ind+1}`);
// } );

// map
// let newArr = numbers.map( function(number, i){
//     return number * i;
// } );
// console.log(newArr);

// 3 задание
// let students = ['Тимофеев Михаил Сергеевич','Гаар Артем Дмитриевич','Дорошин Игорь Николаевич','Ерченко Олег Анатольевич','Илья Анатольевич Тихонов','Каменчук Оксана Петровна ','Костина Анжела Владимировна','Негода Владимир Владимирович','Новицкий Алексей Петрович','Страхова Мария Владимировна','Шабанов Самир Эльман оглы','Ширинов Камран Намигович'];

// '<li>Тимофеев Михаил Сергеевич</li>'
// получите на основе исходного массива студентов
// массив элементов разметки HTML <li>

// forEach
/*
htmlStr = '<h2>Ученики</h2><ol class ="listPup">';
let studentHtmlList = students.forEach(function(student,i,arr){
  htmlStr += `<li> ${i+1}.${student}</li>`;
});
htmlStr += '</ol>';
console.log(htmlStr);
*/

// let newStud = students.map(function (bek) {
//     console.log( `<li> ${bek} </li>` );
// });

// let newStudents = students.map( function(user) {
//     return `<li>${user}</li>`;
// });
// console.log( `<h2>Ученики</h2><ol class="users">${newStudents.join('')}</ol>`);

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

// получите массив имен пользователей
// let usersNames = users.map( function(user){
//     //console.log(user.userName);
//     return user.userName;
// } );

// console.log(usersNames);

// получите массив массивов с именами пользователей и возрастами пользователей
// let usersNamesAges = users.map( user => [user.userName, user.age] );
// console.log( usersNamesAges );

// получите массив объектов с именами пользователей и возрастами пользователей
let usersNamesAges = users.map( user => ({userName: user.userName, age: user.age}));
console.log(usersNamesAges);

/*
// стрелочные функции
function greet (){
    return 'Hello';
}

let greet1 = function (){
    return 'Hello';
}

let greetArrow = () => {
    return 'Hello';
}
console.log( greet() );
console.log( greet1() );
console.log( greetArrow() );
*/

// let usersNames = users.map( user => user.userName );
// console.log(usersNames);