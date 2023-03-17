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

let users = [
    ['Vasya', '123456'],
    ['Irina', '365334'],
    ['Anna', '438799'],
];
console.log(users);
