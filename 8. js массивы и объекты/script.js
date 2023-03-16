let students = ['Тимофеев Михаил Сергеевич','Гаар Артем Дмитриевич','Дорошин Игорь Николаевич','Ерченко Олег Анатольевич','Илья Анатольевич Тихонов','Каменчук Оксана Петровна ','Костина Анжела Владимировна','Негода Владимир Владимирович','Новицкий Алексей Петрович','Страхова Мария Владимировна','Шабанов Самир Эльман оглы','Ширинов Камран Намигович'];
let rem = ['avto', 'norm', 'beer', 'tea', 'bag'];

let fruits = ['Киви', 'Ананас', 'Кокос', 'Апельсин', 'Банан', 'Яблоко'];

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