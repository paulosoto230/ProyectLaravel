<?php

namespace App\Http\Controllers;

use App\Models\Galeriaproducto;
use Illuminate\Http\Request;

/**
 * Class GaleriaproductoController
 * @package App\Http\Controllers
 */
class GaleriaproductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeriaproductos = Galeriaproducto::paginate();

        return view('galeriaproducto.index', compact('galeriaproductos'))
            ->with('i', (request()->input('page', 1) - 1) * $galeriaproductos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galeriaproducto = new Galeriaproducto();
        return view('galeriaproducto.create', compact('galeriaproducto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Galeriaproducto::$rules);

        $galeriaproducto = Galeriaproducto::create($request->all());

        return redirect()->route('galeriaproductos.index')
            ->with('success', 'Galeriaproducto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galeriaproducto = Galeriaproducto::find($id);

        return view('galeriaproducto.show', compact('galeriaproducto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeriaproducto = Galeriaproducto::find($id);

        return view('galeriaproducto.edit', compact('galeriaproducto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Galeriaproducto $galeriaproducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeriaproducto $galeriaproducto)
    {
        request()->validate(Galeriaproducto::$rules);

        $galeriaproducto->update($request->all());

        return redirect()->route('galeriaproductos.index')
            ->with('success', 'Galeriaproducto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $galeriaproducto = Galeriaproducto::find($id)->delete();

        return redirect()->route('galeriaproductos.index')
            ->with('success', 'Galeriaproducto deleted successfully');
    }
}
