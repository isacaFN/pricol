document.addEventListener('DOMContentLoaded', function(){
    tallatennis()

})

var tennis = document.querySelectorAll('.novedades-div')
const tallasdisponibles = ['7', '7.5', '8', '8.5', '9']
 
// tallasdisponibles.forEach((element) => console.log(element));

function tallatennis(){
    tennis.forEach(elemento =>{
        for(let i = 0; i < tallasdisponibles.length; i++ ){
            

            const tallas = document.createElement('DIV')
            const talla = document.createElement('P')
            //talla.textContent = (tallasdisponibles[i])
            //tallas.classList.add('tallas-contenedor')
            elemento.appendChild(tallas) 
           // tallas.append(talla)

        }
    })

    for (var i = 0; i < tennis.length; i++) {
        
    
        tennis[i].addEventListener('mouseover', function() {
            const verificar = document.querySelector('.clasetalla')
            if(verificar != 'clasetalla'){
                for(let e = 0; e < tallasdisponibles.length; e++ ){
                            ta = document.createElement('P')
                            ta.classList.add('clasetalla')
                            ta.textContent = tallasdisponibles[e]
                            this.appendChild(ta)
                }
            }else{ e= tallasdisponibles.length}
        });
    
        tennis[i].addEventListener('mouseout', function() {
            const clasetalla = document.querySelectorAll('.clasetalla')
            console.log(clasetalla.length)

            for (var i = 1; i <= clasetalla.length; i++) {
                clasetalla?.remove()
            }
        });
    
      }
}
