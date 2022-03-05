<?php

namespace App\Http\Controllers\Satisfacciones;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Satisfaccione;
use Illuminate\Http\Request;

class SatisfaccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 20;

        if (!empty($keyword)) {
            $satisfacciones = Satisfaccione::where('fecha', 'LIKE', "%$keyword%")
                ->orWhere('distribuidor', 'LIKE', "%$keyword%")
                ->orWhere('version', 'LIKE', "%$keyword%")
                ->orWhere('codigo', 'LIKE', "%$keyword%")
                ->orWhere('respondidoPor', 'LIKE', "%$keyword%")
                ->orWhere('cargo', 'LIKE', "%$keyword%")
                ->orWhere('algodon', 'LIKE', "%$keyword%")
                ->orWhere('gasa', 'LIKE', "%$keyword%")
                ->orWhere('barbijo', 'LIKE', "%$keyword%")
                ->orWhere('guanteExaminacion', 'LIKE', "%$keyword%")
                ->orWhere('jeringa', 'LIKE', "%$keyword%")
                ->orWhere('vendaGasa', 'LIKE', "%$keyword%")
                ->orWhere('vendaElastica', 'LIKE', "%$keyword%")
                ->orWhere('cumplimiento', 'LIKE', "%$keyword%")
                ->orWhere('calidadEmpaque', 'LIKE', "%$keyword%")
                ->orWhere('calidadEntrega', 'LIKE', "%$keyword%")
                ->orWhere('atencionAmabilidad', 'LIKE', "%$keyword%")
                ->orWhere('precio', 'LIKE', "%$keyword%")
                ->orWhere('atencionQuejas', 'LIKE', "%$keyword%")
                ->orWhere('sugerencias', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $satisfacciones = Satisfaccione::latest()->paginate($perPage);
        }

        return view('encuestas.satisfacciones.index', compact('satisfacciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $codigo = $request->get('codigo')?$request->get('codigo'):null;
        $version = $request->get('version')?$request->get('version'):null;

        return view('encuestas.satisfacciones.create')
        ->with('codigo', $codigo)
        ->with('version', $version)
        ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Satisfaccione::create($requestData);

        return redirect('encuestas/satisfacciones')->with('flash_message', 'Satisfaccione added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $satisfaccione = Satisfaccione::findOrFail($id);

        return view('encuestas.satisfacciones.show', compact('satisfaccione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $satisfaccione = Satisfaccione::findOrFail($id);

        return view('encuestas.satisfacciones.edit', compact('satisfaccione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $satisfaccione = Satisfaccione::findOrFail($id);
        $satisfaccione->update($requestData);

        return redirect('encuestas/satisfacciones')->with('flash_message', 'Satisfaccione updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Satisfaccione::destroy($id);

        return redirect('encuestas/satisfacciones')->with('flash_message', 'Satisfaccione deleted!');
    }
}
