<?php

namespace App\Http\Controllers;

use App\Models\Tipoproducto;
use Illuminate\Http\Request;

/**
 * Class TipoproductoController
 * @package App\Http\Controllers
 */
class TipoproductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoproductos = Tipoproducto::paginate();

        return view('tipoproducto.index', compact('tipoproductos'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoproductos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoproducto = new Tipoproducto();
        return view('tipoproducto.create', compact('tipoproducto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipoproducto::$rules);

        $tipoproducto = Tipoproducto::create($request->all());

        return redirect()->route('tipoproductos.index')
            ->with('success', 'Tipoproducto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoproducto = Tipoproducto::find($id);

        return view('tipoproducto.show', compact('tipoproducto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoproducto = Tipoproducto::find($id);

        return view('tipoproducto.edit', compact('tipoproducto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipoproducto $tipoproducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipoproducto $tipoproducto)
    {
        request()->validate(Tipoproducto::$rules);

        $tipoproducto->update($request->all());

        return redirect()->route('tipoproductos.index')
            ->with('success', 'Tipoproducto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoproducto = Tipoproducto::find($id)->delete();

        return redirect()->route('tipoproductos.index')
            ->with('success', 'Tipoproducto deleted successfully');
    }
}
