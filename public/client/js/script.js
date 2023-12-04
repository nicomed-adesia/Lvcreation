// ici header
let nvbr = document.querySelector('.nvbr');
let togglenav = document.querySelector('.togglenav')

togglenav.onclick = function(){
    nvbr.classList.toggle('activer')
}
const btnCircle = document.querySelector('.btn-circle');
    const circleMenu = document.querySelector('.circle-menu');
    
    btnCircle.addEventListener('click',()=>{
        btnCircle.classList.toggle('menuAnime');
        circleMenu.classList.toggle('circleAnime');
})
//payement ici

