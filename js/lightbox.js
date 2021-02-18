var containerLight = document.querySelector('.lightbox-container')

document.onreadystatechange = () => {
    if (document.readyState === 'complete') {
        containerLight.style.display = 'flex';
    }
}

var galleryImages = document.querySelectorAll('.img-gallery-works');
var lightboxData = document.querySelector('.lightbox-data');
var close = document.querySelector('.close-lightbox');

galleryImages.forEach((element,index) => {
    element.addEventListener('click', () => {
        showLightbox();
    })
})

const showLightbox = () => {
    containerLight.classList.toggle('show');
}

close.addEventListener('click', () => {
    containerLight.classList.toggle('show');
})