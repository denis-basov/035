
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

let htmlStr = `
    <div class="users">
        <div class="user">
            <h2>First Name: ${users[0].firstName}</h2> 
            <h3>Last name: ${users[0].lastName}.</h3>
            <p>Age: ${users[0].age}.</p>
            <p>Phones:</p>
            <ul class="list">
                <li class="list-item">${users[0].phones.join('</li><li class="list-item">')}</li>
            </ul>
        </div>
        <div class="user">
            <h2>First Name: ${users[1].firstName}</h2> 
            <h3>Last name: ${users[1].lastName}.</h3>
            <p>Age: ${users[1].age}.</p>
            <p>Phones:</p>
            <ul class="list">
                <li class="list-item">${users[1].phones.join('</li><li class="list-item">')}</li>
            </ul>
        </div>
        <div class="user">
            <h2>First Name: ${users[2].firstName}</h2> 
            <h3>Last name: ${users[2].lastName}.</h3>
            <p>Age: ${users[2].age}.</p>
            <p>Phones:</p>
            <ul class="list">
                <li class="list-item">${users[2].phones.join('</li><li class="list-item">')}</li>
            </ul>
        </div>
    </div>    
`;


// 1 получаем контейнер для вставки текста
let box = document.querySelector('.box');

// 2 вставляем в контейнер сформированную разметку
box.insertAdjacentHTML('beforeend', htmlStr);


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

let fruits = ['Киви', 'Ананас', 'Кокос', 'Апельсин', 'Банан', 'Яблоко', 'Мандарин'];

for(let fruit of fruits){
    console.log(`<li>Fruit: ${fruit}</li>`);
}