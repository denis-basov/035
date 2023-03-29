'use strict';
// табы

const tabs = document.querySelectorAll('.operations__tab');// получаем кнопки
const tabsContainer = document.querySelector('.operations__tab-container');// получаем контейнер кнопок
const tabsContent = document.querySelectorAll('.operations__content');// получаем блоки с контентом 


tabsContainer.addEventListener('click', function (e) {


    // ловим кнопку, по которой нажали
    const clicked = e.target.closest('.operations__tab');
    
    //console.log(clicked);
    if (!clicked) return;// если не попали по кнопке - выходим
  

    // убираем класс активности у всех кнопок
    tabs.forEach(t => t.classList.remove('operations__tab--active'));
    // убираем класс активности у всех блоков с информацией
    tabsContent.forEach(c => c.classList.remove('operations__content--active'));
  

    // добавляем кнопке, по которой нажали класс активности
    clicked.classList.add('operations__tab--active');

 
    // активируем блок с нужной информацией
    // используется data-атрибут "data-tab" в элементах HTML
    // получаем значение из data-атрибута кнопки (1,2,3) и получаем из DOM
    // элемент с классом, который содержит полученное число из кнопки
    document
      .querySelector(`.operations__content--${clicked.dataset.tab}`)
      .classList.add('operations__content--active');
    
});