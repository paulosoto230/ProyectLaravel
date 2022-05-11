<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Galeriaproducto;
use Illuminate\Http\Request;

/**
 * Class ProductoController
 * @package App\Http\Controllers
 */
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {

            $productos = \DB::table('producto')->select('producto.id','producto.marca','producto.modelo','producto.precio','galeriaproducto.imagen')
            ->join('galeriaproducto','galeriaproducto.id', '=', 'producto.galeria_id')->get();
           
          // echo($productos) ;
            
            return view('producto.index', compact('productos'));
           
            
        //    return view('producto.index', ['Producto' => $productos]);
          
        } catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
       // $datos['productos'] = producto::paginate(5);// con este metodo se llama a los resgistros y se hace una paginación de 5
       
       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = new Producto();
        return view('producto.create', compact('producto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Producto::$rules);

        $producto = Producto::create($request->all());

        return redirect()->route('productos.index')
            ->with('success', 'Producto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productoImagen = Producto::find($id)->Galeriaproducto;
        $producto = Producto::find($id);
        return view('producto.show', compact('producto','productoImagen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     /*   $productoImagen = Producto::find($id)->Galeriaproducto;
        $producto = Producto::find($id);
        return view('producto.edit', compact('producto','productoImagen'));*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        request()->validate(Producto::$rules);

        $producto->update($request->all());

        return redirect()->route('productos.index')
            ->with('success', 'Producto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $producto = Producto::find($id)->delete();

        return redirect()->route('productos.index')
            ->with('success', 'Producto deleted successfully');
    }
}
