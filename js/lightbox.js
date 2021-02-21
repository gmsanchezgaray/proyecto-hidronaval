/*******CARGA DEL LIGHTBOX AL INICIAR LA PAGINA**********/

var containerLight = document.querySelector('.lightbox-container')

document.onreadystatechange = () => {
    if (document.readyState === 'complete') {
        containerLight.style.display = 'flex';
    }
}

/***********OBJETOS E INFO DE IMAGENES*******************/

    const works = [
        {
            title: 'Polaris',
            date: '22/03/2013',
            description: 'Este es uno de los trabajos posta, pero todavia no tengo la descripcion ni la de los demas, mi viejo iba a conseguir la data.'
        },
        {
            title: 'Rubimar',
            date: '12/10/2004',
            description: 'Barco Rubimar'
        },
        {
            title: 'San Julian',
            date: '06/11/2009',
            description: 'Barco San Julian'
        },
        {
            title: 'San Matias',
            date: '08/04/2012',
            description: 'Barco San Matias'
        },
        {
            title: 'Velero en el Caribe',
            date: '05/07/2014',
            description: 'Aca se grabó Danzakuduro.'
        },
        {
            title: 'Replica del Titanic',
            date: '12/08/1997',
            description: 'Una replica de como hubiera sido amarrado el Titanic si Leo Di Caprio hubiera agarrado el timon, y no a Rose.'
        }
    ]

/*************LIGHTBOX VARS************************/

var galleryImages = document.querySelectorAll('.img-gallery-works');
var lightboxData = document.querySelector('.lightbox-data');
var lightboxInfo = document.querySelector('.lightbox-info')
var close = document.querySelector('.close-lightbox');

/************LIGHTBOX FUNCTION***********************/

galleryImages.forEach((e,index) => {
    e.addEventListener('click', () => {
        showLightbox(e.src,index);
    })
})

const showLightbox = (img,indexImg) => {
    lightboxData.style.backgroundImage = `url(${img})`;

    lightboxInfo.innerHTML = `
    <h3 class="light_title">${works[indexImg].title}</h3>
    <p class="small work-date">Fecha: ${works[indexImg].date} </p>
    <hr>
    <p class="work-description">${works[indexImg].description}</p>
    `

    containerLight.classList.toggle('show');
}

close.addEventListener('click', () => {
    containerLight.classList.toggle('show');
})