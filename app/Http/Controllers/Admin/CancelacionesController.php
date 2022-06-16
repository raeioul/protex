<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Cancelacione;
use Illuminate\Http\Request;

class CancelacionesController extends Controller
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
            $cancelaciones = Cancelacione::where('cancelar', 'LIKE', "%$keyword%")
                ->orWhere('operation_id', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $cancelaciones = Cancelacione::latest()->paginate($perPage);
        }

        return view('admin.cancelaciones.index', compact('cancelaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.cancelaciones.create');
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
        
        Cancelacione::create($requestData);

        return redirect('admin/operations')->with('flash_message', 'Cancelacione added!');
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
        $cancelacione = Cancelacione::findOrFail($id);

        return view('admin.cancelaciones.show', compact('cancelacione'));
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
        $cancelacione = Cancelacione::findOrFail($id);

        return view('admin.cancelaciones.edit', compact('cancelacione'));
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
        
        $cancelacione = Cancelacione::findOrFail($id);
        $cancelacione->update($requestData);

        return redirect('admin/operations')->with('flash_message', 'Cancelacione updated!');
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
        Cancelacione::destroy($id);

        return redirect('admin/cancelaciones')->with('flash_message', 'Cancelacione deleted!');
    }
}
