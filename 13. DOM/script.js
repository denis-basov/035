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
// console.log(info);

// let elementStr = '';
// info.forEach(function(element){
//     elementStr += element.innerText;
// });

// console.log(elementStr);