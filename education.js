window.addEventListener('load', ()=>{
    handleEduNews()
    .then(res=>showData(res))
    .catch(err=> console.log(err));

    handleList();

    quickLinks();
})

function handleEduNews() {
    return fetch(`http://localhost:3000/educationNews`)
    .then(res => res.json())
}

function showData(data){
    const div = document.getElementById('container')
    for(let index in data){
        const heading = document.createElement('h3')
        heading.textContent = data[index].head
        const box = document.createElement('div')
        box.setAttribute('class', 'outerbox')
        const box1 = createBox1(data, index)
        box1.setAttribute('class', 'box-alignment')
        const box2 = createBox2(data, index)
        box2.setAttribute('class', 'box-alignment')
        const box3 = createBox3(data, index)
        box3.setAttribute('class', 'box-alignment color-grey')
        const box4 = createBox4(data, index)
        box4.setAttribute('class', 'box-alignment color-grey')
        // console.log(box1)
        box.append(box1, box2, box3, box4)
        div.append(heading, box)
    }
    console.log(data.education.box1.news1)
}

function createBox1(data, index) {
    let div = document.createElement('div')
    div.style.position = "relative"
    const img = document.createElement('img');
    img.src = `${data[index].img}`
    img.setAttribute('class', 'newsImg')
    const imgDiv = document.createElement('div');
    imgDiv.addEventListener('mouseenter', e =>{
        const iconDiv = document.createElement('div');
        iconDiv.setAttribute('class', 'titleIcons')
        imgDiv.setAttribute('class', 'imageDiv imgHover')
        iconDiv.innerHTML = `<i class="title-icon fab fa-facebook-f fa-sm"></i><i class="title-icon fab fa-twitter"></i>`
        imgText.append(iconDiv)
    })
    imgDiv.addEventListener('mouseleave', e =>{
        imgDiv.setAttribute('class', 'imageDiv')
        const icons = document.getElementsByClassName('titleIcons')[0]
        icons.parentElement.removeChild(icons.parentElement.childNodes[1])
    })
    const imgText = document.createElement('h3');
    imgText.textContent = data[index].imgtxt;
    imgText.setAttribute('class', 'imgTxt' )
    imgDiv.setAttribute('class', 'imageDiv')
    imgDiv.addEventListener('mouseleave', e=>{
        imgDiv.setAttribute('class', 'imageDiv')
    })
    imgDiv.append(imgText)
    div.append(img, imgDiv)
    return div
}

function createBox2(data, index) {
    let div = document.createElement('div')
    for(let news in data[index].box1){
        const title = document.createElement('p')
        title.textContent = `${data[index].box1[news]}`
        title.addEventListener('mouseenter', e =>{
            title.style.color = '#D50000';
            const icons = document.createElement('div')
            icons.setAttribute('class', 'titleIcons')
            icons.innerHTML = `<i class="title-icon fab fa-facebook-f fa-sm"></i><i class="title-icon fab fa-twitter"></i>`
            title.append(icons)
        })
        title.addEventListener('mouseleave', e =>{
            title.style.color = '#000'
            const icons = document.getElementsByClassName('titleIcons')[0]
            icons.parentElement.removeChild(icons.parentElement.childNodes[1])
        })
        title.setAttribute('class', 'innerbox')
        div.append(title);
        // console.log(news[news])
    }
    div.setAttribute('class', 'color-black')
    return div
}

function createBox3(data, index) {
    
    let div = document.createElement('div')
    for(let news in data[index].box2){
        const title = document.createElement('p')
        title.textContent = `${data[index].box2[news]}`
        title.addEventListener('mouseenter', e =>{
            title.style.color = '#D50000'
            const icons = document.createElement('div')
            icons.setAttribute('class', 'titleIcons')
            icons.innerHTML = `<i class="title-icon fab fa-facebook-f fa-sm"></i><i class="title-icon fab fa-twitter"></i>`
            title.append(icons)
        })
        title.addEventListener('mouseleave', e =>{
            title.style.color = '#676E7A'
            const icons = document.getElementsByClassName('titleIcons')[0]
            icons.parentElement.removeChild(icons.parentElement.childNodes[1])
        })
        title.setAttribute('class', 'innerbox news9-10')
        div.append(title);
    }
    div.setAttribute('class', 'color-grey')
    return div
}

function createBox4(data, index) {    
    let div = document.createElement('div')
    for(let news in data[index].box3){
        const title = document.createElement('p')
        title.textContent = `${data[index].box3[news]}`
        title.setAttribute('class', 'innerbox news11-12')
        title.addEventListener('mouseenter', e =>{
            title.style.color = '#D50000';
            const icons = document.createElement('div')
            icons.setAttribute('class', 'titleIcons')
            icons.innerHTML = `<i class="title-icon fab fa-facebook-f fa-sm"></i><i class="title-icon fab fa-twitter"></i>`
            title.append(icons)
        })
        title.addEventListener('mouseleave', e =>{
            title.style.color = '#676E7A'
            const icons = document.getElementsByClassName('titleIcons')[0]
            icons.parentElement.removeChild(icons.parentElement.childNodes[1])
        })
        div.append(title);
    }
    div.setAttribute('class', 'color-grey')
    return div
}

function handleList() {
    return fetch('http://localhost:3000/suggestionList')
    .then(res => res.json())
    .then(res => showList(res))
    .catch(err => console.log(err))
}

function showList(data) {
    let div = document.getElementById('list');
    let ul = document.createElement('ul');
    for(let value in data){
        let li = document.createElement('li');
        li.textContent = data[value]
        ul.append(li);
    }
    div.append(ul);
}

function quickLinks() {
    return fetch('http://localhost:3000/quickLinks')
    .then(res=>res.json())
    .then(res => showLinks(res))
    .catch(err => console.log(err))
}

const showLinks = (data) =>{
    const div = document.getElementById('quickLinks')
    const h3 = document.createElement('h3')
    h3.textContent = "Quick Links";
    const hr = document.createElement('hr')
    const ul = document.createElement('ul');
    for(let links in data){
        const li = document.createElement('li');
        li.textContent = data[links]
        console.log(data[links])
        ul.append(li)
    }
    div.append(h3, hr, ul)
}