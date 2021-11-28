// Header Section
(async function addHeader(){
    let data = await fetch('http://localhost:3000/headerTag')
    data = await data.json()
    var container = document.querySelector('.headerBottomContainer')
    var mainContainer = document.querySelector('.headerBottom')
    data.forEach(function(ele){
        var newA = document.createElement('a')
        newA.innerText = ele.name
        newA.href = ele.href
        container.append(newA)
    })
    mainContainer.append(container)
})();

window.addEventListener("load", () => {
    const m_parent = document.getElementById("music");

    fetch_bollywoodNews("bollywood");
    fetch_bollywoodNews("indian reality shows");
    fetch_bollywoodNews("lifestyle");
    handle_search()
    setInterval(() => {
        fetch_photos()
    }, 3000)
    fetch_music("music")
    fetch_music("relationships")
    fetch_music("fashion")
    fetch_beauty("beauty tips")
    fetch_beauty("korean wave")
    fetch_kyra("sonam kapoor")
    fetch_kyra("health and fitness")
    fetch_kyra("recipes")
    fetch_kyra("food news")
    fetch_home("home and garden")
    fetch_home("books")
    fetch_home("theatre")
    fetch_home("spotlight")

})


var show = document.getElementsByClassName("shows");
var li = document.getElementsByClassName("all");

console.log(show.length, li.length)
for (let j = 0; j < li.length; j++) {

    show[j].addEventListener("mouseleave", () => {
        li[j].style.display = "none";
    })
    li[j].addEventListener("mouseleave", () => {
        li[j].style.display = "none";
    })

}

for (let j = 0; j < li.length; j++) {

    show[j].addEventListener("mouseover", () => {
        li[j].style.display = "block";
    })
    li[j].addEventListener("mouseover", () => {
        li[j].style.display = "block";
    })
}

function fetch_bollywoodNews(param) {

    return fetch(`https://newsapi.org/v2/everything?q=${param}&apiKey=6a08a9af9a1341ef9365d5d1387987ec`)
        .then((response) => response.json())
        .then((response) => createMovies(response))
}

var k = 0;
var j = 0;
var l = 0;

function createMovies(results) {
    const img_cont = document.getElementsByClassName("head_img");
    const img = document.getElementsByClassName("up_img");
    const p = document.getElementsByClassName("txt")
    const headline = document.getElementsByClassName("headlines")
    const video = document.getElementById("video")


    img[k].style.backgroundImage = `url("${results.articles[14].urlToImage}")`;
    p[k].textContent = `${results.articles[14].title}`
    k++;

    for (let i = 0; i < 10; i++) {
        const p1 = document.createElement("p")
        p1.textContent = `${results.articles[i].title}`;
        var a = document.createElement("a")
        a.href = `${results.articles[i].url}`
        a.textContent = "...show"
        p1.append(a)
        headline[j].append(p1);

    }

    j++;
    l++;
}

function fetch_video() {
    return fetch(`https://youtube.googleapis.com/youtube/v3/search?q=Timesofindia&key=AIzaSyBQuqoFoSzIWzmgXHArZa6Rgv4ag5E1lnI`)
        .then(res => res.json())
}

async function handle_search() {
    const result = await fetch_video();
    createCards(result)
}

function createCards(result) {
    const videoCont = document.getElementById("cont");

    for (let i = 1; i < 5; i++) {

        const div = document.createElement("div")
        div.innerHTML = `<iframe width="250" height="200" 
         src="https://www.youtube.com/embed/${result.items[i].id.videoId}" 
         title="YouTube video player" frameborder="0" 
         allow="accelerometer; autoplay; 
         clipboard-write; encrypted-media; 
         gyroscope; picture-in-picture" allowfullscreen>
         </iframe>`

        videoCont.append(div)
    }

    //console.log(result)
}

function fetch_photos() {
    fetch(`https://newsapi.org/v2/everything?q=bollywood actress images&apiKey=6a08a9af9a1341ef9365d5d1387987ec`)
        .then(res => res.json())
        .then(res => create_photos(res))
}
async function handle_photos() {
    const result = await fetch_photos()
    create_photos(result)
}
var count = 5;
var init = 0;
function create_photos(result) {
    var photo = document.getElementById("photos")
    photo.innerHTML = null;
    for (let i = init; i < count; i++) {
        const div = document.createElement("div")
        const image = document.createElement("img")
        if (i >= 15) {
            count = 5;
            init = 0;
            i = init - 1;
            continue;

        }
        image.src = `${result.articles[i].urlToImage}`;
        const h3 = document.createElement("h4")
        h3.textContent = `${result.articles[i].title}`
        h3.style.color = "white";
        var a = document.createElement("a")
        a.href = `${result.articles[i].url}`
        a.textContent = "...show More"
        h3.append(a)
        div.append(image, h3)
        photo.append(div)
        init++;
    }
    count += 5;
}

function fetch_music(param) {
    return fetch(`https://newsapi.org/v2/everything?q=${param}&apiKey=6a08a9af9a1341ef9365d5d1387987ec`)
        .then((response) => response.json())
        .then((response) => createMusic(response))
}
var n = 0;
var o = 0;
var r = 0;

function createMusic(results) {
    const img = document.getElementsByClassName("m_img")
    const p = document.getElementsByClassName("text");
    const headline = document.getElementsByClassName("m_headlines")

    img[n].style.backgroundImage = `url("${results.articles[12].urlToImage}")`;
    p[o].textContent = `${results.articles[12].title}`
    n++;
    o++;

    for (let i = 0; i < 3; i++) {
        const p1 = document.createElement("p")
        p1.textContent = `${results.articles[i].title}`;
        var a = document.createElement("a")
        a.href = `${results.articles[i].url}`
        a.textContent = "...show"
        p1.append(a)
        headline[r].append(p1);

    }
    r++;
}

function fetch_beauty(param) {
    return fetch(`https://newsapi.org/v2/everything?q=${param}&apiKey=6a08a9af9a1341ef9365d5d1387987ec`)
        .then((response) => response.json())
        .then((response) => createBeauty(response))
}
var b = 0;
var c = 0;
var v = 0;

function createBeauty(results) {

    const img = document.getElementsByClassName("b_img")
    const p = document.getElementsByClassName("text1");
    const headline = document.getElementsByClassName("b_headlines")

    img[v].style.backgroundImage = `url("${results.articles[11].urlToImage}")`;
    p[b].textContent = `${results.articles[11].title}`
    v++;
    b++;

    for (let i = 0; i < 3; i++) {
        const p1 = document.createElement("p")
        p1.textContent = `${results.articles[i].title}`;
        var a = document.createElement("a")
        a.href = `${results.articles[i].url}`
        a.textContent = "...show"
        p1.append(a)
        headline[c].append(p1);

    }
    c++;
}

function fetch_kyra(param) {
    return fetch(`https://newsapi.org/v2/everything?q=${param}&apiKey=6a08a9af9a1341ef9365d5d1387987ec`)
        .then((response) => response.json())
        .then((response) => createKyra(response))
}

var d = 0;
//var e = 0;
var f = 0;

function createKyra(results) {

    const img = document.getElementsByClassName("k_img")
    const p = document.getElementsByClassName("text2");
    const headline = document.getElementsByClassName("k_headlines")

    img[d].style.backgroundImage = `url("${results.articles[11].urlToImage}")`;
    //p[e].textContent = `${results.articles[11].title}`
    d++;
    //e++;

    for (let z = 0; z < 3; z++) {
        const p1 = document.createElement("p")
        p1.textContent = `${results.articles[z].title}`;
        var a = document.createElement("a")
        a.href = `${results.articles[z].url}`
        a.textContent = "...show"
        p1.append(a)
        headline[f].append(p1);

    }
    f++;
}

function fetch_home(param) {
    return fetch(`https://newsapi.org/v2/everything?q=${param}&apiKey=6a08a9af9a1341ef9365d5d1387987ec`)
        .then((response) => response.json())
        .then((response) => createHome(response))
}


var g = 0;
var i = 0;

function createHome(results) {

    const img = document.getElementsByClassName("h_img")
    const p = document.getElementsByClassName("text3");
    const headline = document.getElementsByClassName("h_headlines")

    img[g].style.backgroundImage = `url("${results.articles[11].urlToImage}")`;
    //p[e].textContent = `${results.articles[11].title}`
    g++;
    //e++;

    for (let y = 0; y < 4; y++) {
        const p1 = document.createElement("p")
        p1.textContent = `${results.articles[y].title}`;
        var a = document.createElement("a")
        a.href = `${results.articles[y].url}`
        a.textContent = "...show"
        p1.append(a)
        headline[i].append(p1);

    }
    i++;
}