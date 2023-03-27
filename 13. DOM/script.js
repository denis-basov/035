// 1. получение элементов из DOM

// выбор по идентификатору
// let logoEl = document.getElementById('logo');
// console.log(logoEl);

// выбор элементов по имени тега
// let pars = document.getElementsByTagName('p');
// console.log(pars);

// выбор элементов по имени класса
// let title = document.getElementsByClassName('title');
// console.log(title);

/*
4 задание
- получить элемент по id="first-par"
- получить все элементы div
- получите все элементы с class="bottom"
*/
/*
let id = document.getElementById('first-par');
console.log(id);

let div = document.getElementsByTagName('div');
console.log(div);

let classBottom = document.getElementsByClassName('bottom');
console.log(classBottom);
*/

// querySelector
// let par = document.querySelector('p');
// console.log(par);

// let logo = document.querySelector('#logo');
// console.log(logo);

// let info = document.querySelector('.info');
// console.log(info);

/*
5 задание
получите со страницы элементы:
    - по исмени тега получите main
    - элемент class="top"
    - элемент с id="head-1"
    - поместите эти элементы в массив и выведите в консоль
*/

// let main = document.querySelector('main');
// let tops = document.querySelector('.top');
// let head = document.querySelector('#head-1');
// let arr = [main, tops, head];
// console.log(arr);

// let mass = [];
// mass[0] = document.querySelector('main');
// mass[1] = document.querySelector('.title .top');
// mass[2] = document.querySelector('#head-1');

// console.log(mass);


// querySelectorAll

// let divs = document.querySelectorAll('div');
// console.log(divs);

// let head1 = document.querySelectorAll('#head-1');
// console.log(head1);

// let info = document.querySelectorAll('.info');
// //console.log(info);

// let elementStr = '';
// info.forEach(function(element){
//     elementStr += element.innerText;
// });

// console.log(elementStr);

// манипулирование свойствами элементов

// innerText
// let titleInfo = document.querySelector('.title.info');

// console.dir( titleInfo );
// console.log( titleInfo.innerText );
// console.log( titleInfo.innerHTML );
// console.log( titleInfo.outerHTML );
// console.log( titleInfo.textContent );

// let logo = document.querySelector('#logo');

// logo.innerText = 'Hello';
// logo.innerHTML = `<p>Логотип</p>`;
// logo.textContent = `<p>Логотип</p>`;

// let titleInfo = document.querySelector('.title.info');
// titleInfo.innerHTML = '<h1>AI-UI</h1> <h2>Architect</h2>';

// let div1 = document.querySelectorAll('main div span');
// console.log(div1);
// div1.innerHTML = ``;
// document.querySelector('#head-1').textContent = `Greetings!`;
// let slqtrH2 = document.querySelector('div h2');
// slqtrH2.innerText = `poor thing 1`;
// slqtrH2.textContent = `poor thing 2`;

// let titleInfo = document.querySelector('.title.info');
// titleInfo.innerHTML='<h1>Дизайн</h1><h2>Информация о деятельности</h2>';

// value
// let head1 = document.querySelector('#head-1');
// console.log( head1.value );

// let submitBtn = document.querySelector('#submit-btn');
// console.dir(submitBtn);
// console.log(submitBtn.value);
// submitBtn.value = 'Войти';

/*
let fname = document.querySelector('#fname'); // получаем элемент с именем
let lname = document.querySelector('#lname'); // получаем элемент с фамилией

let fnameValue = fname.value; // получаем значение имени - Светлана
let lnameValue = lname.value; // получаем значение фамилии - Сидорова

fname.value = lnameValue; // меняю значение имени на содержание переменной fnameValue
lname.value = fnameValue; // меняю значение фамилии на содержание переменной fnameValue
*/
/*
let headFirst = document.querySelector('#head-1');
let headSecond = document.querySelector('#head-2');

let headFirstValue = headFirst.textContent;
let headSecondValue = headSecond.textContent;

headFirst.textContent = headSecondValue;
headSecond.textContent = headFirstValue;
*/
/*
let h1Name = document.querySelector('#head-1');
let h2Name = document.querySelector('#head-2');

let newArgum = h1Name.innerText;

h1Name.innerText = h2Name.innerText;
h2Name.innerText = newArgum;
*/

// parentElement, children, nextElementSibling, previousElementSibling
// let title = document.querySelector('.title');
// console.dir(title);
// console.log(title.children);
// console.log(title.parentElement);

// console.log( title.nextElementSibling);
// console.log( title.nextElementSibling.innerHTML );

// console.log( title.previousElementSibling );
// console.log( title.previousElementSibling.innerHTML );


// let firstPar = document.querySelector('#first-par');
// let nextPar = firstPar.nextElementSibling;
// let lastPar = nextPar.nextElementSibling;
// lastPar.textContent = firstPar.textContent;


// let par = document.querySelector('#first-par');
// par.nextElementSibling.nextElementSibling.textContent = par.textContent;


// let firstPar = document.querySelector('#first-par');
// let lastPar = firstPar.nextElementSibling.nextElementSibling;

// lastPar.textContent = 'It`s OK friends!!!';


// let info = document.querySelector('#first-par');
// let NewnName = 'kamran';
// info.nextElementSibling.nextElementSibling.innerText = NewnName;


// style
// let logo = document.querySelector('#logo');
// console.log(logo.style);

// logo.style.backgroundColor = 'red';
// logo.style.color = 'blue';

// let titleInfo = document.querySelector('.title.info');

// titleInfo.style.backgroundColor = 'green';
// titleInfo.style.color = '#fff';
// titleInfo.style.textTransform = 'uppercase';
// titleInfo.style.padding = '18px';
// titleInfo.style.margin = '18px';
// titleInfo.style.boxShadow = '2px 2px 2px 15px red';

// let title = document.querySelector('.title');
// console.log(title.style);
// title.style.backgroundColor = 'silver';
// title.style.color = 'gold';
// title.style.margin = '1.2em';
// title.style.padding = '1.5em';
// title.style.borderRadius = '10px';

// let title = document.querySelector('.title.info');
// title.style.backgroundColor = 'silver';
// title.style.color = 'green';
// title.style.padding = '3px';
// title.style.margin = '2px';

// let title = document.querySelector('.title');
// console.log(title.style);

// title.style.backgroundColor = 'lightgrey';
// title.style.color = 'blue';
// title.style.marginTop = '50px';
// title.style.marginLeft = '50px';
// title.style.marginRight = '50px';
// title.style.opacity = '0.7';

// let fTitle = document.querySelector('.title.info');
// fTitle.style.backgroundColor = 'red';
// fTitle.style["font-size"] = '24px';
// fTitle.style["text-decoration"] = 'line-through';


// classList

// let firstPar = document.querySelector('#first-par');
// console.dir(firstPar);

// contains - проверяет есть ли указанный класс у элемента
// let res = firstPar.classList.contains('par-1');
// console.log(res);

// add - добавляет классы элементу
// firstPar.classList.add('hidden');

// remove - удаляет классы у элемента
// firstPar.classList.remove('hidden');

/*5 задание
проверьте, есть ли у элемента с class="title info" класс .box, и если этого класса нет, добавьте его элементу*/

// let title = document.querySelector('.title');
// console.log(title.classList);
// let res = title.classList.contains('box');
// console.log(res);
// title.classList.add('box');

// let titleInfo = document.querySelector('.title.info');
// if ( !titleInfo.classList.contains('box') ){ // false => true
//     titleInfo.classList.add('box');
//     titleInfo.classList.remove('hidden');
// };

// toggle - добавление / удаление класса

let form = document.querySelector('form');
console.log(form);

form.classList.toggle('box');