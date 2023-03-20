// let students = ['Тимофеев Михаил Сергеевич','Гаар Артем Дмитриевич','Дорошин Игорь Николаевич','Ерченко Олег Анатольевич','Илья Анатольевич Тихонов','Каменчук Оксана Петровна ','Костина Анжела Владимировна','Негода Владимир Владимирович','Новицкий Алексей Петрович','Страхова Мария Владимировна','Шабанов Самир Эльман оглы','Ширинов Камран Намигович'];
// let rem = ['avto', 'norm', 'beer', 'tea', 'bag'];

// let fruits = ['Киви', 'Ананас', 'Кокос', 'Апельсин', 'Банан', 'Яблоко'];

// console.log(students);
// console.log(students.length);
// console.log(students[0]);

//console.log(rem); // array
// console.log(rem[2]); // string
// console.log(rem.length - 1); // 4 number

// let lastIndex = rem.length - 1; // индекс последнего элемента массива (2)
// console.log(rem[lastIndex]);

// rem[0] = null;
// rem[3] = 'green tea';

// console.log(rem);
// console.log(students);

// let firstEl = rem[0];
// firstEl = 'random';

// console.log(firstEl);
// console.log(rem);

// let newLength = rem.push('test', 'test2'); // добавление в конец массива
// console.log(rem);
// console.log(newLength);

// console.log(rem);
// let lastEl = rem.pop(); // удаление последнего элемента массива
// console.log(rem);
// console.log(lastEl);

// students.push('test_push1', 'test_push2');
// console.log(students);
// console.log(students.pop());

// let newLength = students.push(null, NaN, 12.7, 'nobody knows this.');
// let lastElement = students[newLength - 1];
// students.pop();
// console.log(lastElement);

// students.push('Ургант Иван Андреевич', 'Басов Денис Алексеевич');
// let lastStudent = students.pop();
// console.log(students);
// console.log(lastStudent);

// rem.unshift('test'); // добавляет элемент в начало массива
// console.log(rem);

// let firstEl = rem.shift();
// console.log(firstEl);
// console.log(rem);

// let temp = fruits.pop();// удаляем яблоко
// fruits.unshift(fruits.pop()); // 1 удаляем банан 2 добавляем банан в начало массива
// fruits.push(temp); // возвращаем яблоко на место
// console.log(fruits);

// let apple = fruits.pop(); // удаляем яблоко
// let banana = fruits.pop(); // удаляем банан
// fruits.unshift(banana); // добавляем банан в начало
// fruits.push(apple); // добавляем яблоко в конец
// console.log (fruits);

// let students = ['Тимофеев Михаил Сергеевич','Гаар Артем Дмитриевич','Дорошин Игорь Николаевич','Ерченко Олег Анатольевич','Илья Анатольевич Тихонов','Каменчук Оксана Петровна ','Костина Анжела Владимировна','Негода Владимир Владимирович','Новицкий Алексей Петрович','Страхова Мария Владимировна','Шабанов Самир Эльман оглы','Ширинов Камран Намигович'];
// let rem = ['avto', 'norm', 'beer', 'tea', 'bag'];

// let fruits = ['Киви', 'Ананас', 'Кокос', 'Апельсин', 'Банан', 'Яблоко'];
// const pets = ['cat', 'dog', 'bat', 'mouse'];


// let res = fruits.concat(rem); // объединение массивов

// let res = pets.includes('mouse');
// console.log(res);

// let res = pets.includes('mouse');
// if ( res ) {
//     console.log('Мыши есть с массиве');
// } else {
//     console.log('Массив от мышей свободен');
// }
// console.log(res);

// if(pets.includes('dog')){
//     console.log('yes');
// }else{
//     console.log('no');
// }

// if (pets.includes('mouse')) {
//     console.log('Кот - домашнее животное');
// } else {
//     console.log('Элемента в массиве нет');
// }

// let res = fruits.indexOf('Мышь'); // 0
// console.log(fruits);
// console.log(res);

// if(res >= 0){
//     console.log('yes');
// }else{
//     console.log('no');
// }

// console.log(students);
// console.log( students.join( ' |\\/| ' ) );

// const array1 = ['one', 'two', 'three'];
// console.log('array1:', array1);

// array1.reverse();

// console.log('array1:', array1);

// let students = ['Тимофеев Михаил Сергеевич','Гаар Артем Дмитриевич','Дорошин Игорь Николаевич','Ерченко Олег Анатольевич','Илья Анатольевич Тихонов','Каменчук Оксана Петровна ','Костина Анжела Владимировна','Негода Владимир Владимирович','Новицкий Алексей Петрович','Страхова Мария Владимировна','Шабанов Самир Эльман оглы','Ширинов Камран Намигович'];
// let rem = ['avto', 'norm', 'beer', 'tea', 'bag'];

// let fruits = ['Киви', 'Ананас', 'Кокос', 'Апельсин', 'Банан', 'Яблоко'];
// const pets = ['cat', 'dog', 'bat', 'mouse'];
// const animals = ['ant', 'bison', 'camel', 'duck', 'elephant'];

// console.log(fruits);

// let fruits2 = fruits.slice(2, 5);
// console.log(fruits2);

// let sl = animals.slice(2,4);
// console.log(sl);

// let deleted = animals.splice(2, 0, 'cat', 'dog', 'bat', 'mouse');

// console.log('Исходный массив', animals);
// console.log('Массив удаленных элементов', deleted);

// let deleted = fruits.splice(4, 2, '1','2','3');
// let deleted2 = fruits.splice(1, 0, 'ХУРМА');
// console.log('удаленные элементы' , deleted);
// console.log(fruits);

// fruits.splice(4, 2, 'Груша', 'Абрикос', 'Персик')
// fruits.splice(1, 0, 'Алыча');
// console.log(fruits);

// console.log('начальный массив', fruits);

// fruits.splice(fruits.length - 2, 2, 'арбуз',"дыня","песок");

// indexOfKiwi = fruits.indexOf('Киви');
// indexOfAnanas = fruits.indexOf('Ананас');

// let pointCheck = 0;
// if (indexOfKiwi > indexOfAnanas) {
//     pointCheck = indexOfAnanas;
// }
// else {
//     pointCheck = indexOfKiwi;
// }
// fruits.splice(pointCheck + 1,0,'соль');
// console.log(fruits);

let students = ['Тимофеев Михаил Сергеевич','Гаар Артем Дмитриевич','Дорошин Игорь Николаевич','Ерченко Олег Анатольевич','Илья Анатольевич Тихонов','Каменчук Оксана Петровна ','Костина Анжела Владимировна','Негода Владимир Владимирович','Новицкий Алексей Петрович','Страхова Мария Владимировна','Шабанов Самир Эльман оглы','Ширинов Камран Намигович'];
let rem = ['avto', 'norm', 'beer', 'tea', 'bag'];

let fruits = ['Киви', 'Ананас', 'Кокос', 'Апельсин', 'Банан', 'Яблоко'];
const pets = ['cat', 'dog', 'bat', 'mouse'];
const animals = ['ant', 'bison', 'camel', 'duck', 'elephant'];
const numbers = [6, 11, 2, 10, 22, 1, 30, 4, 2, 7, 12];

// console.log(pets);
// pets.sort();
// console.log(pets);

// console.log(numbers);
// numbers.sort();
// console.log(numbers);

// let users = [
//     ['Vasya', '123456'],
//     ['Irina', '365334'],
//     ['Anna', '438799'],
// ];
// console.log(users);


// let userName = 'Ivan999';
// let userNameUpper = userName.toUpperCase();
// console.log(userNameUpper.length);


/*
 Объекты 
*/


let cars = {
    markCar: 'BMW',
    modelCar: '5seria',
    strongCar: '540ls',
    phones: ['92575845', '24587545'],
    adress: {
        city: 'Bavaria',
        street: 'Shnac',
        house: '78',
    }
};

let car = {
    brand: 'Volvo',
    model: 'XC90',
    color: 'white',
    run: 0,
};

let domVDerevne = {
    materialWall:'woods',
    floor:3,
    windows:5,
    materialRoof: 'metal',
    adress:{
        city:'Okunevo',
        street:'Cenralnaya',
        dom:36,
    }
}    


// fetch('https://jsonplaceholder.typicode.com/posts')
//   .then((response) => response.json())
//   .then((json) => console.log(json));



let user = {
    userName: 'Ivan999',
    firstName: 'Ivan',
    lastName: 'Ivanov',
    age: 11,
    phones: ['911', '01', '9874'],
    address: {
        city: 'Moscow',
        street: 'Pushkina',
        house: 45,
        str: 23
    },
    // start(){
    //     console.log('start');
    // }
};

// user.address.house = 44;
// user.address.house = 44;
// console.log(user.address.house);
// user.age = 12;

// console.log( user );
// console.log( user.age );

// console.log('Материал: '+domVDerevne.materialWall,'Окон: '+domVDerevne.windows,'Город: '+domVDerevne.adress.city);

// console.log('Материал: ' + domVDerevne.materialWall + ',','Окон: ' + domVDerevne.windows, 'Город: ' + domVDerevne.adress.city);

// console.log( `<h2>В деревне ${domVDerevne.adress.city}</h2> 
//             <p>есть дом с ${domVDerevne.windows}</p> 
//             <p>и стенами из ${domVDerevne.materialWall}</p>`
//             );


//let cats = 5;

// cats = cats + 5;
// cats += 5;

// cats = cats - 1;
// cats -= 1;
// cats--;

// console.log( cats-- ); // 5
// console.log( cats ); // 4

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

console.log(htmlStr);

// 1 получаем контейнер для вставки текста
let box = document.querySelector('.box');
console.log(box);
// 2 вставляем в контейнер сформированную разметку
box.insertAdjacentHTML('beforeend', htmlStr);

// Anna123, 11, Ivan999, 546221, Petrov, 3423
// console.log(users[1].firstName, users[0].age, users[0].userName, users[1].phones[2], users[2].lastName, users[2].phones[1]);
// console.log(`${users[1].userName}, ${users[0].age},
// ${users[0].userName}, ${users[1].phones[2]}, 
// ${users[2].lastName}, ${users[2].phones[1]}`);

// console.log(`Пользователю ${users[1].userName} всего ${users[0].age}, позвоните её отцу с ником ${users[0].userName}, его фамилия ${users[2].lastName}, а идентификационный номер ${users[2].phones[1]} `)


// работа с репозиторием
// git clone https://github.com/denis-basov/035
// кодите
// git add . добавление всех файлов в гиг
// git coomit -m "комментарий"
// git push origin master