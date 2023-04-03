// стек вызовов
// function getSum(num1, num2){
//     return num1 + num2;
// }

// function calc(num1, num2){
//     return getSum(num1, num2);
// }

// console.log(123);
// console.log(456);
// console.log(678);

// let sum = calc(4,6);

// console.log(sum);

// settimeout
// console.log(1);

// setTimeout(function(){
//     console.log(3);
// }, 2000);
// setTimeout(function(){
//     console.log(4);
// }, 4000);

// console.log(2);



// async await fetch json
let getCountry = async function( country ){
    let box = document.querySelector('.box');

    let response = await fetch(`https://restcountries.com/v3.1/name/${country}`);

    let data = await response.json();
    data = data[0];
    console.log(data);

    let boxContent = `
    <div class="country">
        <h2>Страна: <span>${data.translations.rus.official}</span></h2>
        <h3>Площадь: <span>${data.area} кв.км</span></h3>
        <p>Столица: <span>${data.capital[0]}</span></p>
        <p>Континент: <span>${data.continents[0]}</span></p>
        <p>Население: <span>${data.population} чел.</span></p>
        <p>Первый день недели: <span>${data.startOfWeek}</span></p>
        <p>Временные зоны: <span>${data.timezones.join('; ')}</span></p>
        <p>Соседние страны: <span>${data.borders.join(', ')}</span></p>
        <div class="country-image">
            <img class="image" src="${data.coatOfArms.svg}" alt="Герб страны ${data.translations.rus.common}">
            <img class="image" src="${data.flags.svg}" alt="${data.flags.alt}">
        </div>
    </div>    
    `;

    box.insertAdjacentHTML('beforeend', boxContent);

}
getCountry('russia');
getCountry('peru');




