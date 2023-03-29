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

// let form = document.querySelector('form');
// console.log(form);

// form.classList.toggle('box');

// getAttribute()
// let fname = document.querySelector('#fname');
// console.log(fname);

// let attr = fname.getAttribute('name');
// console.log(attr);

// let pic1 = document.querySelector('#pic-1');
// console.log( pic1.getAttribute('src') );
// console.log( pic1.getAttribute('alt') );

// let firstPar = document.querySelector('#first-par');
// console.log( firstPar.getAttribute('class') );

// setAttribute()
// let logo = document.querySelector('#logo');
// logo.setAttribute('class', 'logo');

// let title = document.querySelector('.title');
// console.log( title.getAttribute('class') );
// title.setAttribute('class', 'title-1');


// let pic1 = document.querySelector('#pic-1');
// let pic2 = document.querySelector('#pic-2');

// let src1 = pic1.getAttribute('src');

// pic1.setAttribute('src', pic2.getAttribute('src'));
// pic2.setAttribute('src', src1);

// let picFirst = document.querySelector('#pic-1');
// let picSecond = document.querySelector('#pic-2');

// let srcFirst = picFirst.getAttribute('src');
// let srcSecond = picSecond.getAttribute('src');

// picFirst.src = srcSecond;
// picSecond.src = srcFirst;
// console.dir(picFirst);

// let img1 = document.querySelector('#pic-1');
// let img2 = document.querySelector('#pic-2');

// let src = img1.getAttribute('src');
// let alt = img1.getAttribute('alt');

// console.log(src);

// img1.setAttribute('src',img2.getAttribute('src'));
// img1.setAttribute('alt',img2.getAttribute('alt'));
// img2.setAttribute('src',src);
// img2.setAttribute('alt',alt);

// createElement
// let par = document.createElement('p');
// par.innerHTML = 'Hello, <span>summer</span>';
// par.classList.add('box');
// par.setAttribute('id', 'dom-par');

// console.log(par);

// 3 задание 
// создайте элемент div
// поместите внутрь элемента два заголовка с текстом
// добавьте элементу div класс, идентификатор

// let div = document.createElement('div');
// div.innerHTML = '<h1>Привет!</h1><h1>Привет!</h1>';
// div.setAttribute('id', 'dom-div');
// div.setAttribute('class', 'dom-div');
// console.log(div);

// let newDiv = document.createElement('div');
// newDiv.innerHTML = '<h1>Первый заголовок</h1> <h2>Второй заголовок</h2>';
// newDiv.classList.add('new-div');
// newDiv.setAttribute('id', 'new-div');
// console.log(newDiv);

// let divv = document.createElement('div');
// divv.innerHTML = '<h1>Доброе утро,</h1><h2>Как дела?</h2>';
// divv.classList.add('box-1');
// divv.setAttribute('id','divv ok');
// console.log(divv);

// let container = document.querySelector('.container');

// appendChild
// console.log(container);
// container.appendChild(div);
// container.appendChild(newDiv);
// container.appendChild(divv);
// container.appendChild(`<p>hello</p>`);

// prepend
// container.prepend(div);
// container.prepend(newDiv);
// container.prepend(divv);
// container.prepend(`<p>hello</p>`);

// insertAdjacentElement
// container.insertAdjacentElement('afterend', par);

// 4 задание
// let div = document.createElement('div');
// div.innerHTML = '<h1>Привет!</h1><h1>Привет!</h1>';
// div.setAttribute('id', 'dom-div');
// div.setAttribute('class', 'dom-div');

// let newDiv = document.createElement('div');
// newDiv.innerHTML = '<h1>Первый заголовок</h1> <h2>Второй заголовок</h2>';
// newDiv.classList.add('new-div');
// newDiv.setAttribute('id', 'new-div');

// let divv = document.createElement('div');
// divv.innerHTML = '<h1>Доброе утро,</h1><h2>Как дела?</h2>';
// divv.classList.add('box-1');
// divv.setAttribute('id','divv ok');

// let par = document.createElement('p');
// par.innerHTML = 'Hello, <span>summer</span>';
// par.classList.add('box');
// par.setAttribute('id', 'dom-par');

// добавьте элементы выше относительно элемента <div class="main"></div>
// в 4 разные позиции
// let container = document.querySelector('.main');

// container.insertAdjacentElement('beforebegin', div);
// container.insertAdjacentElement('afterbegin', newDiv);
// container.insertAdjacentElement('beforeend', divv);
// container.insertAdjacentElement('afterend', par);

// console.log(container);

// let main = document.querySelector('.main');
// main.insertAdjacentElement('beforeend', div);
// main.insertAdjacentElement('beforebegin', newDiv);
// main.insertAdjacentElement('afterbegin', divv);
// main.insertAdjacentElement('afterend', par);

// insertAdjacentHTML
// let container = document.querySelector('.container');
// let head3 = `<h3 class="head head-3" id="head-3">Last name: Ivanov.</h3>`;
// container.insertAdjacentHTML('afterbegin', head3);
// container.insertAdjacentHTML('beforeend', head3);
// container.insertAdjacentHTML('beforebegin', head3);
// container.insertAdjacentHTML('afterend', head3);



/**
 * 
 * События
 * 
 */
// let button = document.querySelector('#button');
// console.log(button);

// let head = document.querySelector('#head-1');

// добавляем обработчик события на кнопку
// button.addEventListener('click', function(){
//     console.log('Клик');

//     console.log(head.textContent);
// } );

// button.addEventListener('mouseover', function(){
//     console.log('Наведение');

//     console.log(head.textContent);
// } );

// button.addEventListener('mouseout', function(){
//     console.log('Покидание');
// } );


// 4 задание
// напишите код, чтобы при клике на кнопку id="super-button" выводился в консоль произвольный текст.
// * получите текст из любого элемента на странице

// let button = document.querySelector('#super-button');

// button.addEventListener('click', function() {
//     let head = document.querySelector('#head-1');
//     console.log(head.textContent);
// });

// let butten = document.querySelector('#super-button');

// butten.addEventListener('click',()=>console.log(`Текст из первого обзаца: ${document.querySelector('#first-par').textContent}`));

// показ/скрытие элемента
// let button = document.querySelector('#button');// кнопка
// let image = document.querySelector('#photo-1679912466009'); // картинка

// let newSrc = 'https://images.unsplash.com/photo-1679770884293-a4f41b5f05cd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80';

// button.addEventListener('click', function(){
//     //image.src = newSrc;
//     //image.setAttribute('src', newSrc);

//     //image.style.display = 'none';

//     image.classList.toggle('hidden');
// });



/**
 * 
 * блок с картинками
 * 
 */
// переменные с адресами картинок
let pic1 = 'https://images.unsplash.com/photo-1475924156734-496f6cac6ec1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80';
let pic2 = 'https://images.unsplash.com/photo-1426604966848-d7adac402bff?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80';
let pic3 = 'https://images.unsplash.com/photo-1418065460487-3e41a6c84dc5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80';
let pic4 = 'https://images.unsplash.com/reserve/HgZuGu3gSD6db21T3lxm_San%20Zenone.jpg?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80';
let pic5 = 'https://images.unsplash.com/photo-1446329813274-7c9036bd9a1f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80';


//1. Получаем кнопки
// let button1 = document.querySelector('.button-1');
// let button2 = document.querySelector('.button-2');
// let button3 = document.querySelector('.button-3');
// let button4 = document.querySelector('.button-4');
// let button5 = document.querySelector('.button-5');

// 1.1 Получаем все кнопки разом
let buttons = document.querySelectorAll('.buttons-container .button');

//2. Получаем картинку в контейнере
let contentImg = document.querySelector('.content-container img');


//3. При клике на кнопку 1 обновляем путь к картинке
// button1.addEventListener('click', function(){
//     contentImg.src = pic1;
//     //contentImg.setAttribute('src', pic1);
// });
// button2.addEventListener('click', function(){
//     contentImg.src = pic2;
// });
// button3.addEventListener('click', function(){
//     contentImg.src = pic3;
// });
// button4.addEventListener('click', function(){
//     contentImg.src = pic4;
// });
// button5.addEventListener('click', function(){
//     contentImg.src = pic5;
// });

// 3.1 перебираем кнопки и на каждую вешаем обработчик события
buttons.forEach(function(button, index){

    button.addEventListener('click', function(){
        if(index === 0){
            contentImg.src = pic1;
        }else if(index === 1){
            contentImg.src = pic2;
        }else if(index === 2){
            contentImg.src = pic3;
        }else if(index === 3){
            contentImg.src = pic4;
        }else if(index === 4){
            contentImg.src = pic5;
        }else{
            contentImg.src = pic1;
        }
    });

});




/**
 * 
 * работа с формой
 * focus / blur
 */

let fname = document.querySelector('#fname');// инпут
let fnameError = document.querySelector('#fname-error');//спан для ошибок

// fname.addEventListener('focus', function(){
//     console.log('focus');
// });
fname.addEventListener('blur', function(){

    if(fname.value.length > 0){ // если строка не пустая
        fname.style.backgroundColor = 'rgb(181, 251, 228)';
        fnameError.textContent = '';
    }else{
        fname.style['background-color'] = 'rgb(248, 186, 186)';
        fnameError.textContent = 'Имя не должно быть пустым';
    }
});


let lname = document.querySelector('#lname');
let lnameError = document.querySelector('#lname-error');

lname.addEventListener('blur', function(){
    if(lname.value.length > 0 ){
        lname.style.backgroundColor ='green';
        lnameError.textContent='';
    } else{
        lname.style.backgroundColor ='red';
        lnameError.textContent='Фамилия не должна быть пустой';
    };
});