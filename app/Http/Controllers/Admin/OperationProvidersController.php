<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\OperationProvider;
use Illuminate\Http\Request;

class OperationProvidersController extends Controller
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
            $operationproviders = OperationProvider::where('operation_id', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $operationproviders = OperationProvider::latest()->paginate($perPage);
        }

        return view('admin.operation-providers.index', compact('operationproviders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.operation-providers.create');
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
        
        $rules = [
            'provider_id' => 'required|unique:operation_providers,provider_id,NULL,id,operation_id,'.$request->operation_id
            //'idioma' => 'required|unique:idiomas,idioma,NULL,id,user_id,'.$request->user_id

        ];

        $messages = [
            'provider_id.unique' => 'Ya seleccionaste este proveedor',
        ];

        $this->validate($request, $rules, $messages);
        
        OperationProvider::create($requestData);

        return redirect('admin/operations')->with('flash_message', 'Operation added!');
//        return redirect('admin/operation-providers')->with('flash_message', 'OperationProvider added!');
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
        $operationprovider = OperationProvider::findOrFail($id);

        return view('admin.operation-providers.show', compact('operationprovider'));
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
        $operationprovider = OperationProvider::findOrFail($id);

        return view('admin.operation-providers.edit', compact('operationprovider'));
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
        
        $operationprovider = OperationProvider::findOrFail($id);
        $operationprovider->update($requestData);

        return redirect('admin/operation-providers')->with('flash_message', 'OperationProvider updated!');
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
        OperationProvider::destroy($id);

        return redirect('admin/operation-providers')->with('flash_message', 'OperationProvider deleted!');
    }
}
