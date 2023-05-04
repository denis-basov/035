let moreNews = document.getElementById('more-news');
console.log(moreNews);

async function getPosts() {
    const res = await fetch(`js-news/5/1`);
    const data = await res.json();

    return data;
}

moreNews.addEventListener('click', function(e){
   e.preventDefault();

   let data = getPosts();

   console.log(data);
});