
const addShadowOnHeader = () => {
    const scrollY = window.scrollY; 
    const header = document.getElementById('header');
    const listMenu = document.getElementById('listMenu');
    
    if (scrollY > 0) {
        if(!header.classList.contains('header-sticky')) {
            header.classList.add('header-sticky');
        }
    } else {
        header.classList.remove('header-sticky');
    }
}

const showMenuList = e => {
    console.log('clicou');
    const listMenu = document.getElementById('listMenu');
    const burgerToggle = document.getElementById("burgerToggle");

    listMenu.classList.toggle('active');
    burgerToggle.classList.toggle('on');
    
}

const burgerToggle = document.getElementById("burgerToggle");
burgerToggle.onclick = showMenuList;

window.onscroll = addShadowOnHeader;