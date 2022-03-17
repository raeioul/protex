<?php

namespace App\Http\Controllers\Satisfacciones;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Exports\SatisfaccionesExport;
use App\Exports\OneSatisfaccionExport;
use App\Models\Satisfaccione;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Auth;

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
        $perPage = 10;

        if (Auth::guest()) {
            abort(404);
        }

        if (Auth::user()->hasRole('admin')) {

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
                    ->orWhere('celular', 'LIKE', "%$keyword%")
                    ->latest()->paginate($perPage);
            } else {
                $satisfacciones = Satisfaccione::latest()->paginate($perPage);
            }
        } else {
            abort(404);
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

        $options = ['--','Malo(1)', 'Regular(2)','Bueno(3)','N/A'];
        return view('encuestas.satisfacciones.create')
        ->with('codigo', $codigo)
        ->with('version', $version)
        ->with('options', $options)
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
            'distribuidor' => 'required',
            'respondidoPor' => 'required',
            'cargo' => 'required',
            'celular' => 'required|unique:satisfacciones|numeric',
        ];

        $messages = [
            'distribuidor.required' => 'Se necesita el nombre del distribuidor.',
            'respondidoPor.required' => 'Ingrese su nombre, por favor.',
            'cargo.required' => 'Por favor, ingrese su cargo.',
            'celular.required' => 'Se requiere su número de teléfono celular.',
            'celular.unique' => 'Este celular ya está registrado.',
            'celular.numeric' => 'Por favor, ingrese solo números.',
        ];
       
        $this->validate($request, $rules, $messages);

        $requestData = $request->all();
        
        Satisfaccione::create($requestData);

        return redirect('encuestas/gracias')->with('flash_message', 'Satisfaccione added!');
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
        if (Auth::guest()) {
            abort(404);
        }

        $satisfaccione = Satisfaccione::findOrFail($id);
        $codigo=$satisfaccione->codigo;
        $version=$satisfaccione->version;
        $options = ['--','Malo(1)', 'Regular(2)','Bueno(3)','N/A'];

        return view('encuestas.satisfacciones.edit', compact('satisfaccione'))
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
        if (Auth::guest()) {
            abort(404);
        }

        Satisfaccione::destroy($id);

        return redirect('encuestas/satisfacciones')->with('flash_message', 'Satisfaccione deleted!');
    }

    public function export() 
    {
        if (Auth::guest()) {
            abort(404);
        }
        return Excel::download(new SatisfaccionesExport, 'satisfacciones.xlsx');
    }

    public function oneExport($id) 
    {
        if (Auth::guest()) {
            abort(404);
        }

        $data = Satisfaccione::findOrFail($id);
        
        return Excel::download(new OneSatisfaccionExport("encuestas.satisfacciones.onetable", $data),'satisfaccion'.$id.'.xlsx');
    }

    public function exportPdf($id) 
    {
        if (Auth::guest()) {
            abort(404);
        }

        $satisfacciones = Satisfaccione::findOrFail($id);
        //view()->share('encuestas.instituciones.table', $instituciones);
        $pdf = PDF::loadView('encuestas.satisfacciones.onetable', [
            'satisfaccione' => $satisfacciones,
        ]);
        
        return $pdf->stream();
    }
}
