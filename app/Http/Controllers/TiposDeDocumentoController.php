<?php

namespace App\Http\Controllers;

use App\Models\TiposDeDocumento;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TiposDeDocumentoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TiposDeDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tiposDeDocumentos = TiposDeDocumento::paginate();

        return view('tipos-de-documento.index', compact('tiposDeDocumentos'))
            ->with('i', ($request->input('page', 1) - 1) * $tiposDeDocumentos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tiposDeDocumento = new TiposDeDocumento();

        return view('tipos-de-documento.create', compact('tiposDeDocumento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TiposDeDocumentoRequest $request): RedirectResponse
    {
        TiposDeDocumento::create($request->validated());

        return Redirect::route('tipos-de-documentos.index')
            ->with('success', 'TiposDeDocumento created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tiposDeDocumento = TiposDeDocumento::find($id);

        return view('tipos-de-documento.show', compact('tiposDeDocumento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tiposDeDocumento = TiposDeDocumento::find($id);

        return view('tipos-de-documento.edit', compact('tiposDeDocumento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TiposDeDocumentoRequest $request, TiposDeDocumento $tiposDeDocumento): RedirectResponse
    {
        $tiposDeDocumento->update($request->validated());

        return Redirect::route('tipos-de-documentos.index')
            ->with('success', 'TiposDeDocumento updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TiposDeDocumento::find($id)->delete();

        return Redirect::route('tipos-de-documentos.index')
            ->with('success', 'TiposDeDocumento deleted successfully');
    }
}
