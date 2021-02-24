var tabInfo = document.querySelector('.tab-info');
var tabButtons = document.querySelectorAll('.tab-info-btn');

// INFO DATA TABS

const dataUl = [
    {
        data: `
        <li>Aprenderas muchas habilidades dentro del curso relacionadas con el aprendizaje tecnico de Oleohidraulica naval</li>
        <li>Trabajaras en habilidades unicas y demandadas</li>
        <li>Elementos de lista de prueba en tab "Habilidades"</li>
    `
    },
    {
        data: `
        <li>Conocer los principios físicos que rigen las aplicaciones hidráulicas complementándolos con el conocimiento sobre fluidos.</li>

        <li>Distinguir la estructura básica de una <strong>centralina hidráulica</strong>, diferenciando entre los diferentes tipos de bombas a instalar y los accesorios que esta pueda presentar.</li>

        <li>Manejar los actuadores más comunes de las aplicaciones hidráulicas (desarrollando tanto función como cálculo).</li>
    `
    },
    {
        data: `
        <li>Recibiras un certificado avalado por diferentes entidades del area naval</li>
        <li>Demostraras tu asistencia y compromiso con la capacitacion que conlleva ser Técnico Oleohidraulico</li>
        <li>Elementos de lista de prueba en tab "Certificacion"</li>
    `
    },
    {
        data: `
        <li>Nuestro objetivo es expandir los conocimientos del area de Oleohidraulica Naval para capacitar a los futuros técnicos que decidan desarrollarse en la misma</li>
        <li>Contamos con </li>
        <li>Elementos de lista de prueba en tab "Objetivos"</li>
    `
    }
]

// DATA CHANGE 

tabButtons.forEach((e,indexBtn) => {
    e.addEventListener('click',() => {
        resetAnimation();
        changeData(indexBtn);
    })
})

const changeData = (index) => {
    return tabInfo.innerHTML = dataUl[index].data;
}

const resetAnimation = () => {
    tabInfo.classList.add('animate__fadeInLeft');
    setTimeout(() => {
        tabInfo.classList.remove('animate__fadeInLeft');
    },900)
}

