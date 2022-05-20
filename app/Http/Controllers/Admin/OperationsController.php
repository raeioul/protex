<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Operation;
use App\Models\Provider;
use App\Models\Producto;
use App\Models\OperationProvider;
use Illuminate\Http\Request;
use Image;

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
                ->latest()->paginate($perPage);
        } else {
            $operations = Operation::latest()->paginate($perPage);
        }

        $providers =  Provider::pluck('name','id');
        //$productos =  Producto::select('name', 'id', 'provider_id')->get();
        
        return view('admin.operations.index', compact('operations'))
        
        ->with('providers', $providers);
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

        $productos = $request->input('productos');//Necesario para guardar arreglo MULTIPLE
        $sizeImage=2048;

        $productos=array_combine($productos, $productos);
        $productos = implode(',', $productos);
        $input = $request->except('productos');
        $input['productos'] = $productos;//Assign the "mutated" news value to $input
        
        $operation = Operation::create($input);
                
        //Operation::create($requestData);
        $image = $request->file('image');
        $input['imagename'] = $request['user_id'].'.'.strtotime($operation->created_at);
        $destinationPath = public_path('facturas');
        $img = Image::make($image->getRealPath());
        $img->resize($sizeImage, $sizeImage, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename'].'.'.'jpg');

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
        
        return view('admin.operations.edit', compact('operation'))
        ->with('providers', $providers)
        ->with('proveedor', $proveedor)
        ->with('productos', $productos);
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
        $productos = $request->input('productos');//Necesario para guardar arreglo MULTIPLE
        $sizeImage=2048;

        $productos=array_combine($productos, $productos);
        $productos = implode(',', $productos);
        $input = $request->except('productos');
        $input['productos'] = $productos;//Assign the "mutated" news value to $input
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
