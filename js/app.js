document.addEventListener('DOMContentLoaded', function(){
    tallatennis()

})
const tallasdisponibles = ['7', '7.5', '8', '8.5', '9']
 
tallasdisponibles.forEach((element) => console.log(element));


function tallatennis(){
    const tennis = document.querySelector('.novedades-div')

    const tallas = document.createElement('DIV')

    tallas.classList.add('mostrar-tallas')

    tennis.appendChild(tallas)
}