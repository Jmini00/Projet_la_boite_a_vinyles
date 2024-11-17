/// Slider
document.addEventListener("DOMContentLoaded", () => {
    const headerSlides = [
      "./assets/slides/img_vinyls.webp",
      "./assets/slides/collection_3.webp",
      "./assets/slides/collection_2.webp",
      "./assets/slides/collection.webp",
      "./assets/slides/bar.webp",
    ];
  
    const random = Math.floor(Math.random() * headerSlides.length);
  
    const target = document.querySelector(".banner-img");
    target.src = `${headerSlides[random]}`;
  });


/// Fleche back to top
const btToTop = document.getElementById("back-to-top");
btToTop.style.display = 'none',
btToTop.style.animation = "fadeIn .7s ease-in forwards";
btToTop.addEventListener('click', (e) => {
    window.scrollTo({
        top:0,
        behavior:'smooth'
    })
});

window.addEventListener('scroll', ()=> {
    if(window.scrollY > 2000) {
        btToTop.style.display = 'block';
    } else {
        btToTop.style.display = 'none';
    }
});


/// Animation Titre
const titre = document.querySelector('h1');
setInterval(() => {
    titre.classList.toggle('rubberBand');
}, 7000);

/// Loader
const btConnect = document.getElementById('connect');
const loader = document.querySelector('.loader');

/// Bouton menu slider
const menuSlider = document.getElementById('side-nav');
const btSlider = document.querySelector('.sliderbtn');
let i = 0;
btSlider.addEventListener('click', (e) => {
    btSlider.classList.toggle('change');

    if (i === 0) {
        menuSlider.style.animation = "anim-sidenav-on .7s forwards";
        i = 1;
    } else {
        menuSlider.style.animation = "anim-sidenav-off .7s forwards";
        i = 0;
    }
})

/// Modal
const delay = 45000;
const timeOut = setTimeout(() => {
	openModal(data, l, h);
}, delay);

window.addEventListener('click', () => {
	clearTimeout(timeOut);
    closeModal();
})


const data = "NEWSLETTER";
const l = 520;
const h = 400;

const openModal = (data, l, h) => {
const bodyTagDoc = document.body;
const htmlModal = `
<div id="modal">
    <div id="popup">
        <h4>${data}</h4>
        <p>Rejoignez vite le club "La Boite à Vinyles" pour recevoir les dernières nouveautés et exclusivités.
         Vous pourrez également accéder à notre forum de discussion et échanger sur tout l'univers du vinyle.</p>
        <a href="/laboiteavinyles/register" style="color: white; border: 2px solid white">INSCRIPTION</a>
    </div>
</div>
`;

bodyTagDoc.insertAdjacentHTML('afterbegin', htmlModal);
const modal = document.getElementById("modal");
modal.style.width = "100vw";
modal.style.height = "100vh";
modal.style.background = "rgba(0,0,0,.6)";
modal.style.display = "flex";
modal.style.justifyContent = "center";
modal.style.alignItems = "center";
modal.style.position = "fixed";
modal.style.zIndex = 100;

const popup = document.getElementById('popup');
popup.style.width = l + "px";
popup.style.height = h + "px";
popup.style.borderRadius = "30px";
popup.style.border = "3px solid white";
popup.style.background = "black";
popup.style.color = "white";
popup.style.fontSize = "20px";
popup.style.display = "flex";
popup.style.flexDirection = "column";
popup.style.justifyContent = "space-evenly";
popup.style.textAlign = "center";
popup.style.padding = "30px";
popup.style.position = "relative";
popup.insertAdjacentHTML("afterbegin", '<div id="close">X</div>');

const btClose = document.getElementById("close");
btClose.style.position = "absolute";
btClose.style.right = "20px";
btClose.style.top = "10px";
btClose.style.cursor = "pointer";
btClose.style.color = "white";
btClose.style.fontSize = "20px";
}


const closeModal = () => {
const modal = document.getElementById("modal");
modal.remove();
}

// openModal(data, l, h);


const btClose = document.getElementById("close");
const modal = document.getElementById("modal");
//btClose.addEventListener('click', closeModal);
window.addEventListener('click', (e) => {
if (e.target === modal) {
    closeModal();
}
}) 

/*const snackbar = document.querySelector("snackbar");
  
    setTimeout(() => {
        snackbar.classList.add('show');
    }, 1000);*/
  


  