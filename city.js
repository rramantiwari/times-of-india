
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

(async function metroNews(){
    let data = await fetch('http://localhost:3000/metroCity')
    data = await data.json()
    var container = document.createElement('div')
    var mainContainer = document.querySelector('.metroNews')
    console.log(data);
    data.forEach(function(ele){
        let mainDiv = document.createElement('div')

        mainDiv.setAttribute('class', 'metroNewsCard')
        let divOne = document.createElement('div')
        let divTwo = document.createElement('div')
        let divThree = document.createElement('div')

        let imageTitle = document.createElement('p')
        let titleOne = document.createElement('p')
        let titleTwo = document.createElement('p')
        let titleThree = document.createElement('p')

        divTwo.style.backgroundImage = `url(${ele.imageURL})`;
        imageTitle.innerText = ele.imageTitle
        titleOne.innerText = ele.titleOne
        titleTwo.innerText = ele.titleTwo
        titleThree.innerText = ele.titleThree
        divOne.innerText = ele.mainTitle
        divTwo.append(imageTitle)
        divThree.append(titleOne,titleTwo,titleThree)
        mainDiv.append(divOne,divTwo,divThree)
        container.append(mainDiv)

    })

    mainContainer.append(container)
})();


(async function cityNews(){
    let data = await fetch('http://localhost:3000/stateCityNews')
    data = await data.json()
    var container = document.createElement('div')
    var mainContainer = document.querySelector('.cityNews')
    console.log(data);
    data.forEach(function(ele){
        let mainDiv = document.createElement('div')

        mainDiv.setAttribute('class', 'cityNewsCard')
        let divOne = document.createElement('div')
        // let divTwo = document.createElement('div')
        let divThree = document.createElement('div')

        // let imageTitle = document.createElement('p')
        let titleOne = document.createElement('p')
        let titleTwo = document.createElement('p')
        let titleThree = document.createElement('p')

        // divTwo.style.backgroundImage = `url(${ele.imageURL})`;
        // imageTitle.innerText = ele.imageTitle
        titleOne.innerText = ele.titleOne
        titleTwo.innerText = ele.titleTwo
        titleThree.innerText = ele.titleThree
        divOne.innerText = ele.mainTitle
        // divTwo.append(imageTitle)
        divThree.append(titleOne,titleTwo,titleThree)
        mainDiv.append(divOne,divThree)
        container.append(mainDiv)

    })

    mainContainer.append(container)
})();