document.addEventListener('DOMContentLoaded', function(){
    var main = document.querySelector('.main')
    var button = document.querySelector('#navbtn')
    var sidebar = document.querySelector('.sidebar')
    var content = document.querySelector('.content')
    var footer = document.querySelector('.footer')

    button.addEventListener('click', function(){
        main.classList.toggle('nav-open')
        sidebar.classList.toggle('open')
        footer.classList.toggle('nav-open')
        button.classList.toggle('closebtn')
        content.classList.toggle('contentOpen')
        document.body.classList.toggle('nav-open')

    })
})

