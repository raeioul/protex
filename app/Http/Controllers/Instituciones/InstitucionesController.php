<?php

namespace App\Http\Controllers\Instituciones;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Institucione;
use Illuminate\Http\Request;

class InstitucionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $instituciones = Institucione::where('fecha', 'LIKE', "%$keyword%")
                ->orWhere('distribuidor', 'LIKE', "%$keyword%")
                ->orWhere('version', 'LIKE', "%$keyword%")
                ->orWhere('codigo', 'LIKE', "%$keyword%")
                ->orWhere('respondidoPor', 'LIKE', "%$keyword%")
                ->orWhere('cargo', 'LIKE', "%$keyword%")
                ->orWhere('algodonSuavidad', 'LIKE', "%$keyword%")
                ->orWhere('algodonAbsorcion', 'LIKE', "%$keyword%")
                ->orWhere('algodonLaminado', 'LIKE', "%$keyword%")
                ->orWhere('algodonLibreImpurezas', 'LIKE', "%$keyword%")
                ->orWhere('gasaSuavidad', 'LIKE', "%$keyword%")
                ->orWhere('gasaAbsorcion', 'LIKE', "%$keyword%")
                ->orWhere('gasaLibreImpurezas', 'LIKE', "%$keyword%")
                ->orWhere('gasaLibreServicioCortadoDoblado', 'LIKE', "%$keyword%")
                ->orWhere('barbijoComodidadRostro', 'LIKE', "%$keyword%")
                ->orWhere('barbijoFacilRespiracion', 'LIKE', "%$keyword%")
                ->orWhere('barbijoHipoalergenico', 'LIKE', "%$keyword%")
                ->orWhere('barbijoBarraFijacionNariz', 'LIKE', "%$keyword%")
                ->orWhere('guanteElasticidad', 'LIKE', "%$keyword%")
                ->orWhere('guantePresenciaTalco', 'LIKE', "%$keyword%")
                ->orWhere('guanteSuperficieRugosa', 'LIKE', "%$keyword%")
                ->orWhere('guanteResistenciaUso', 'LIKE', "%$keyword%")
                ->orWhere('guanteExaminacionElasticidad', 'LIKE', "%$keyword%")
                ->orWhere('guanteExaminacionPresenciaTalco', 'LIKE', "%$keyword%")
                ->orWhere('guanteExaminacionResistenciaUso', 'LIKE', "%$keyword%")
                ->orWhere('jeringaEmpaquePrimario', 'LIKE', "%$keyword%")
                ->orWhere('jeringaFiltracionAguja', 'LIKE', "%$keyword%")
                ->orWhere('jeringaFiltracionEmbolo', 'LIKE', "%$keyword%")
                ->orWhere('jeringaCalidadAguja', 'LIKE', "%$keyword%")
                ->orWhere('jeringaImpresionEscala', 'LIKE', "%$keyword%")
                ->orWhere('equipoSueroEmpaque', 'LIKE', "%$keyword%")
                ->orWhere('equipoSueroCamaraGoteo', 'LIKE', "%$keyword%")
                ->orWhere('vendaGasaCalidadTejido', 'LIKE', "%$keyword%")
                ->orWhere('vendaGasaMemoria', 'LIKE', "%$keyword%")
                ->orWhere('vendaGasaBordes', 'LIKE', "%$keyword%")
                ->orWhere('vendaElasticaElasticidad', 'LIKE', "%$keyword%")
                ->orWhere('vendaElasticaCapacidadDistensión', 'LIKE', "%$keyword%")
                ->orWhere('vendaElasticaMemoria', 'LIKE', "%$keyword%")
                ->orWhere('vendaElasticaCalidadTejido', 'LIKE', "%$keyword%")
                ->orWhere('cumplimiento', 'LIKE', "%$keyword%")
                ->orWhere('calidadProducto', 'LIKE', "%$keyword%")
                ->orWhere('precio', 'LIKE', "%$keyword%")
                ->orWhere('atencionGestionReclamos', 'LIKE', "%$keyword%")
                ->orWhere('atencionAmabilidad', 'LIKE', "%$keyword%")
                ->orWhere('sugerencias', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $instituciones = Institucione::latest()->paginate($perPage);
        }

        return view('encuestas.instituciones.index', compact('instituciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('encuestas.instituciones.create');
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
        
        Institucione::create($requestData);

        return redirect('encuestas/instituciones')->with('flash_message', 'Institucione added!');
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
        $institucione = Institucione::findOrFail($id);

        return view('encuestas.instituciones.show', compact('institucione'));
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
        $institucione = Institucione::findOrFail($id);

        return view('encuestas.instituciones.edit', compact('institucione'));
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
        
        $institucione = Institucione::findOrFail($id);
        $institucione->update($requestData);

        return redirect('encuestas/instituciones')->with('flash_message', 'Institucione updated!');
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
        Institucione::destroy($id);

        return redirect('encuestas/instituciones')->with('flash_message', 'Institucione deleted!');
    }
}
