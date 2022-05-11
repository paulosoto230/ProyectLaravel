
 //guardado = localStorage.getItem('productos');
 let template = document.getElementById('template')
 let carrito = document.getElementById('carrito')
 let fragment = document.createDocumentFragment()
 let templateFooter = document.getElementById("templateFooter")
 let footer = document.getElementById('footer')
 let productos = []
 document.addEventListener('DOMContentLoaded', () =>{

    requerirProductos()

    document.addEventListener('click', e => {
     
        if(e.target.matches('div .btn-danger')){
        
            quitarCarrito(e)
        }
        if(e.target.matches('div .btn-success')){
        
           aumentarCarro(e)
        }
        
        })


})

const requerirProductos = () =>{

   productos = JSON.parse(localStorage.getItem('productos'))
  pintarCarrito(productos)
}

const pintarCarrito = (productos) => {

    carrito.textContent = ''
// recorrer los objetos al transformarlo en un array
    productos.forEach(item =>{
    const clone = template.content.cloneNode(true)
    clone.querySelector('.lead').textContent = item.modelo;
    clone.querySelector('.badge').textContent = item.cantidad;   
    clone.querySelector('div .lead span').textContent = parseFloat(item.precio * item.cantidad);
    clone.querySelector('.btn-danger').dataset.id = item.id
    clone.querySelector('.btn-success').dataset.id = item.id
    fragment.appendChild(clone)
    })
    carrito.appendChild(fragment)
    sumador(productos)
  
}

const sumador = (productos) =>{

    let totalProducto = 0;
    footer.textContent = '';
    productos.forEach(item => {
    totalProducto += (item.precio*item.cantidad)
    })
    
    const clone = templateFooter.content.cloneNode(true)
    clone.querySelector('.card-body span').textContent = totalProducto;
    footer.appendChild(clone)
    if(totalProducto === 0){
        footer.remove()
    }

   
    //carrito.appendChild(footer)
 }

 const quitarCarrito = (e) => {

    productos = productos.filter(item => {

        if(item.id === e.target.dataset.id){

            if(item.cantidad > 0){

                item.cantidad --
            }
            if(item.cantidad === 0) return
            return item
        }else{
            return item
        }
    })
    localStorage.clear()
    localStorage.setItem('productos', JSON.stringify(productos));
    pintarCarrito(productos)
 }

const aumentarCarro = (e) => {

    productos = productos.map(item => {
   
        if(item.id === e.target.dataset.id){
            item.cantidad ++
        }
        return item
    })
    localStorage.clear()
    localStorage.setItem('productos', JSON.stringify(productos));
    pintarCarrito(productos)
}