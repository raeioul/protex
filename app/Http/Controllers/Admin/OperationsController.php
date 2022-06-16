<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Operation;
use App\Models\Provider;
use App\Models\Status;
use App\Models\OperationProvider;
use Illuminate\Http\Request;
use Image;
use Mail;

class OperationsController extends Controller
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
            $operations = Operation::where('name', 'LIKE', "%$keyword%")
                ->orWhere('proveedor', 'LIKE', "%$keyword%")
                ->orWhere('productos', 'LIKE', "%$keyword%")
                ->orWhere('precio', 'LIKE', "%$keyword%")
                ->orWhere('currency', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $operations = Operation::latest()->paginate($perPage);
        }

        $status =  Status::pluck('name','id')->toArray();
        $status = array_combine($status, $status);

        $l = Operation::with('hasPagos')->get();

        $suma = $l->map(function ($item) {
            $item->total = $item->hasPagos->sum('pago');
            return $item;
        })->sum('total');
        
        $x = Operation::with('hasPagos')->with('hasOperationStatus')->get();
        $operationAlmacen = array();
        foreach ($x as $value) {
            if($value->hasOperationStatus) {
                foreach ($value->hasOperationStatus as $op) {
                    if($op->name == 'Almacen') {
                        $operationAlmacen[] = $value;
                    }
                }
            }
        }

        $almacen = collect($operationAlmacen)->map(function ($item) {
            $item->total = $item->hasPagos->sum('pago');
            return $item;
        })->sum('total');

        $y = Operation::with('hasPagos')->with('hasOperationStatus')->get();
        $operationCancel = array();
        foreach ($y as $value) {
            if(isset($value->hasCancel)) {
                if($value->hasCancel->cancelar == 1) {
                    $operationCancel[] = $value;
                }
            }
        }
        
        $cancel = collect($operationCancel)->map(function ($item) {
            $item->total = $item->hasPagos->sum('pago');
            return $item;
        })->sum('total');

        return view('admin.operations.index', compact('operations'))
        ->with('status', $status)
        ->with('suma', $suma)
        ->with('almacen', $almacen)
        ->with('cancel', $cancel)
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $providers =  Provider::pluck('name','id');
        //$providers = array_combine($providers, $providers);

        return view('admin.operations.create')
        ->with('providers', $providers);
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

        $productos = $request->input('productos');
        $cantidades = $request->input('cantidades');//Necesario para guardar arreglo MULTIPLE
        $sizeImage=2048;

        $productos=array_combine($productos, $productos);
        $cantidades=array_combine($cantidades, $cantidades);
        $productos = implode(',', $productos);
        $cantidades = implode(',', $cantidades);
        $input = $request->except('productos');
        $input = $request->except('cantidades');
        $input['productos'] = $productos;//Assign the "mutated" news value to $input
        $input['cantidades'] = $cantidades;
        $operation = Operation::create($input);
                
        //Operation::create($requestData);
        if ($request->file('image')!=null) {
            $image = $request->file('image');
            $input['imagename'] = $request['user_id'].'.'.strtotime($operation->created_at);
            $destinationPath = public_path('facturas');
            $img = Image::make($image->getRealPath());
            $img->resize($sizeImage, $sizeImage, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['imagename'].'.'.'jpg');
        }
        $emails = ['raeioul@gmail.com', 'protex.sys@gmail.com'];
        Mail::send(
            'mail.publico',
            $requestData,
            function ($message) use ($requestData, $emails) {
            $message->to($emails, 'protex')->subject('Se ha creado una nueva operación');
            $message->from('info@protex.com', 'Protex');
        });

        return redirect('admin/operations')->with('flash_message', 'Operation added!');
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
        $operation = Operation::findOrFail($id);

        return view('admin.operations.show', compact('operation'));
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
        $operation = Operation::findOrFail($id);
        $providers =  Provider::pluck('name','id');
        $proveedor = $operation->proveedor;
        $productos = explode(',',$operation->productos);
        $cantidades = explode(',',$operation->cantidades);
        
        return view('admin.operations.edit', compact('operation'))
        ->with('providers', $providers)
        ->with('proveedor', $proveedor)
        ->with('productos', $productos)
        ->with('cantidades', $cantidades)
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
        $productos = $request->input('productos');
        $cantidades = $request->input('cantidades');//Necesario para guardar arreglo MULTIPLE
        $sizeImage=2048;

        $productos=array_combine($productos, $productos);
        $cantidades=array_combine($cantidades, $cantidades);
        $productos = implode(',', $productos);
        $cantidades = implode(',', $cantidades);
        $input = $request->except('productos');
        $input = $request->except('cantidades');
        $input['productos'] = $productos;//Assign the "mutated" news value to $input
        $input['cantidades'] = $cantidades;
        $operation = Operation::findOrFail($id);
        $operation->update($input);

        if ($request->file('image')!=null) {
            $image = $request->file('image');
            $input['imagename'] = $request['user_id'].'.'.strtotime($operation->created_at);
            $destinationPath = public_path('facturas');
            $img = Image::make($image->getRealPath());
            $img->resize($sizeImage, $sizeImage, function ($constraint) {
            $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['imagename'].'.'.'jpg');
        }                    
        return redirect('admin/operations')->with('flash_message', 'Operation updated!');
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
        Operation::destroy($id);

        return redirect('admin/operations')->with('flash_message', 'Operation deleted!');
    }
}
