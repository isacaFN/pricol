document.addEventListener('DOMContentLoaded', function(){
    tallatennis()

})

// var tennis = document.querySelectorAll('.novedades-div')
const tallasdisponibles = ['7', '7.5', '8', '8.5', '9']
 

function tallatennis(){

    document.querySelectorAll('.novedades-div').forEach(elemento => {
        elemento.addEventListener('mouseenter', function() {
            // agregar el titulo selecionar talla 
            const selectalla = document.createElement('P')
            selectalla.classList.add('selectalla')
            selectalla.textContent = ("Selecionar talla")
            elemento.appendChild(selectalla)

            elemento.classList.add('novedades-hover')

            // agregamos un div, que va a contener todas la tallas disponibles
            const tallas = document.createElement('DIV')
            tallas.classList.add('tallas-contenedor')
            elemento.appendChild(tallas)

            // bucle para agregar una por una las tallas 
            for(let i = 0; i < tallasdisponibles.length; i++){
                const talla = document.createElement('P')
                talla.textContent = (tallasdisponibles[i])
                tallas.append(talla)
            }
        });
    
        elemento.addEventListener('mouseleave', function() {
                const novedhover = document.querySelectorAll('.novedades-hover')
                const removertalla = document.querySelectorAll('.tallas-contenedor')
                const remselectalla = document.querySelectorAll('.selectalla')
                
                novedhover.forEach(function(ele) {
                    ele.classList.remove('novedades-hover')
                });

                removertalla.forEach(function(elem) {
                    elem.remove(); 
                });

                remselectalla.forEach(function(elemt) {
                    elemt.remove(); 
                });
        });
    });
}
