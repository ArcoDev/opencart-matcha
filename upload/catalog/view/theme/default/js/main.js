// FUNCIONALIDAD NAVEGATION MOBILE
const navMov = document.getElementById('nav-mov');
const links = document.querySelector('.links');

navMov.addEventListener('click', () => {
    links.classList.toggle('activo');
});

links.addEventListener('click', () => {
    links.classList.remove('activo');
})

// FUNCIONALIDAD ICON SEARCH
const navMora = document.querySelector('.nav-mora');
const search = document.getElementById('icon-search');
const inputSrc = document.querySelector('.input-hidden');
const btnSearch = document.querySelector('.button-search');
const closeSearch = document.getElementById('close-search');

search.addEventListener('click', () => {
    inputSrc.style.display = "block";
    btnSearch.style.display = "block";
    navMora.style.paddingBottom = "5rem";
    closeSearch.classList.add('active-close');
});

closeSearch.addEventListener('click', () => {
    inputSrc.style.display = "none";
    btnSearch.style.display = "none";
    navMora.style.paddingBottom = "2.5rem";
    closeSearch.classList.remove('active-close');
});