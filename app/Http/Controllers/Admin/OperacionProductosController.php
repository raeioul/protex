<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\OperacionProducto;
use Illuminate\Http\Request;

class OperacionProductosController extends Controller
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
            $operacionproductos = OperacionProducto::where('operation_id', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $operacionproductos = OperacionProducto::latest()->paginate($perPage);
        }

        return view('admin.operacion-productos.index', compact('operacionproductos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.operacion-productos.create');
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
        
        OperacionProducto::create($requestData);
    
        return redirect('admin/operations')->with('flash_message', 'Operation added!');
        //return redirect('admin/operacion-productos')->with('flash_message', 'OperacionProducto added!');
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
        $operacionproducto = OperacionProducto::findOrFail($id);

        return view('admin.operacion-productos.show', compact('operacionproducto'));
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
        $operacionproducto = OperacionProducto::findOrFail($id);

        return view('admin.operacion-productos.edit', compact('operacionproducto'));
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
        
        $operacionproducto = OperacionProducto::findOrFail($id);
        $operacionproducto->update($requestData);

        return redirect('admin/operacion-productos')->with('flash_message', 'OperacionProducto updated!');
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
        OperacionProducto::destroy($id);

        return redirect('admin/operacion-productos')->with('flash_message', 'OperacionProducto deleted!');
    }
}
