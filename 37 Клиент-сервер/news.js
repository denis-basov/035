let container = document.querySelector('.container .row'); // контейнер для новостей
let moreNewsBtn = document.getElementById('more-news'); // кнопка для получения новостей от сервера

// 1. поз: 0 кол-во: 3
// 2. поз: 3 кол-во: 3
// 3. поз: 6 кол-во: 3
// 4. поз: 9 кол-во: 3

let start = 0; // откуда начинаем выборку
let limit = 3; // кол-во новостей

// отображение данных на странице
function showPosts(data){

    // формируем массив строк из массива объектов
    let output = data.map(function(newsItem){
        return `
          <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="${newsItem.id}"><img src="${newsItem.image}" alt="${newsItem.title}" class="img-fluid rounded"></a>
              <div class="excerpt">
              <h2><a href="${newsItem.id}">${newsItem.title}</a></h2>        
              <p><a href="${newsItem.id}">Read More</a></p>
              </div>
            </div>
          </div>
        `;
    });
    // объединяем массив строк в строку
    let outputStr = output.join('');

    // вставляем новости на страницу
    container.insertAdjacentHTML('beforeend', outputStr);

}

// получение новостей из бд
async function getPosts(){
    let res = await fetch(`/server/getNewsList.php?start=${start}&limit=${limit}`);// GET
    let data = await res.json(); // раскодирование данных

    showPosts(data);
}

// Загрузка начального списка новостей
getPosts();


// обработка события клика по кнопке id="more-news"
moreNewsBtn.addEventListener('click', function(event){
    event.preventDefault(); // отмена стандартного поведения
    start+=3; // увеличиваем стартовую позицию выборки новостей
    getPosts(); // получаем следующие посты
});