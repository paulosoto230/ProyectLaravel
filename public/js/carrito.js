

let carritoObjeto = []
//localStorage.clear()
document.addEventListener('click', e => {
    if(e.target.matches('#boton')){
       
        agregarCarrito(e)

    }
   
    
    })

    const agregarCarrito = (e) => {
        // crea el objeto
        carritoObjeto = obtenerProductosLocalStorage()
            const producto = {
                id: e.target.dataset.id,
                marca: e.target.dataset.marca,
                modelo: e.target.dataset.modelo,
                precio: parseInt(e.target.dataset.precio),
                cantidad: 1
            }
           
            const indice = carritoObjeto.findIndex((item) =>
                  
                     item.id === producto.id       
            )
              console.log(indice)
            if (indice === -1){

                carritoObjeto.push(producto)

            }else{
                carritoObjeto[indice].cantidad ++
                console.log("hla")
             // carritoObjeto[indice].precio =  carritoObjeto[indice].cantidad * producto.precio
            }

            guardarCarrito()
           
        
   }

const guardarCarrito = () => {

    localStorage.setItem('productos', JSON.stringify(carritoObjeto));

/*carritoObjeto.forEach( item => {
   localStorage.setItem('productos',JSON.stringify(item))
})*/
}


const obtenerProductosLocalStorage = () => {

    let productoLS;
    //Comprobar si hay algo en LS
    if(localStorage.getItem('productos') === null){
        productoLS = [];
    }
    else {
        productoLS = JSON.parse(localStorage.getItem('productos'));
    }
    return productoLS;
}