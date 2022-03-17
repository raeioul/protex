<?php

namespace App\Http\Controllers\Instituciones;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Institucione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Exports\InstitucionesExport;
use App\Exports\OneInstitucionExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Auth;

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
        $perPage = 10;
        
        if (Auth::guest()) {
            abort(404);
        }

        if (Auth::user()->hasRole('admin')) {

            if (!empty($keyword)) {
                $instituciones = Institucione::where('fecha', 'LIKE', "%$keyword%")
                    ->orWhere('institucion', 'LIKE', "%$keyword%")
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
                    ->orWhere('celular', 'LIKE', "%$keyword%")
                    ->latest()->paginate($perPage);
            } else {
                $instituciones = Institucione::latest()->paginate($perPage);
            }
        } else {
            abort(404);
        }

        return view('encuestas.instituciones.index', compact('instituciones'));
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
        $options = ['--','Malo(1)', 'Regular(2)','Bueno(3)','N/A'];

        return view('encuestas.instituciones.create')
        ->with('options', $options)
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
        $rules = [
            'institucion' => 'required',
            'respondidoPor' => 'required',
            'cargo' => 'required',
            'celular' => 'required|unique:instituciones|numeric',
        ];

        $messages = [
            'institucion.required' => 'Se necesita el nombre de la institución.',
            'respondidoPor.required' => 'Ingrese su nombre, por favor.',
            'cargo.required' => 'Por favor, ingrese su cargo.',
            'celular.required' => 'Se requiere su número de teléfono celular.',
            'celular.unique' => 'Este celular ya está registrado.',
            'celular.numeric' => 'Por favor, ingrese solo números.',
        ];
       
        $this->validate($request, $rules, $messages);
        
        $requestData = $request->all();
        
        Institucione::create($requestData);

        return redirect('encuestas/gracias')->with('flash_message', 'Institucione added!');
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
        if (Auth::guest()) {
            abort(404);
        }

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
        if (Auth::guest()) {
            abort(404);
        }

        $institucione = Institucione::findOrFail($id);
        $codigo=$institucione->codigo;
        $version=$institucione->version;
        $options = ['--','Malo(1)', 'Regular(2)','Bueno(3)','N/A'];

        return view('encuestas.instituciones.edit', compact('institucione'))
        ->with('codigo', $codigo)
        ->with('version', $version)
        ->with('options', $options)
        ;
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
        if (Auth::guest()) {
            abort(404);
        }

        Institucione::destroy($id);

        return redirect('encuestas/instituciones')->with('flash_message', 'Institucione deleted!');
    }

    public function export() 
    {
        if (Auth::guest()) {
            abort(404);
        }
        return Excel::download(new InstitucionesExport, 'instituciones.xlsx');
    }

    public function oneExport($id) 
    {
        if (Auth::guest()) {
            abort(404);
        }

        $data = Institucione::findOrFail($id);
        
        return Excel::download(new OneInstitucionExport("encuestas.instituciones.onetable", $data),'institucion'.$id.'.xlsx');
    }

    public function exportPdf($id) 
    {
        if (Auth::guest()) {
            abort(404);
        }

        $instituciones = Institucione::findOrFail($id);
        //view()->share('encuestas.instituciones.table', $instituciones);
        $pdf = PDF::loadView('encuestas.instituciones.onetable', [
            'institucione' => $instituciones,
        ]);
        
        return $pdf->stream();
    }
}
        