<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Pago;
use Illuminate\Http\Request;
use Image;

class PagosController extends Controller
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
            $pagos = Pago::where('pago', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('operation_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $pagos = Pago::latest()->paginate($perPage);
        }

        return view('admin.pagos.index', compact('pagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pagos.create');
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
        $sizeImage=2048;

        $pago=Pago::create($requestData);
        
        if ($request->file('image')!=null) {
            $image = $request->file('image');
            $requestData['imagename'] = $request['user_id'].'.'.strtotime($pago->created_at);
            $destinationPath = public_path('pagos');
            $img = Image::make($image->getRealPath());
            $img->resize($sizeImage, $sizeImage, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$requestData['imagename'].'.'.'jpg');
        }

        return redirect('admin/operations')->with('flash_message', 'Operation added!');
        //return redirect('admin/pagos')->with('flash_message', 'Pago added!');
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
        $pago = Pago::findOrFail($id);

        return view('admin.pagos.show', compact('pago'));
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
        $item = Pago::findOrFail($id);

        return view('admin.pagos.edit', compact('item'));
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
        $pago = Pago::findOrFail($id);
        $sizeImage=2048;
        
        if ($request->file('image')!=null) {
            $image = $request->file('image');
            $requestData['imagename'] = $request['user_id'].'.'.strtotime($pago->created_at);
            $destinationPath = public_path('pagos');
            $img = Image::make($image->getRealPath());
            $img->resize($sizeImage, $sizeImage, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$requestData['imagename'].'.'.'jpg');
        }
        $pago->update($requestData);

        return redirect('admin/operations')->with('flash_message', 'Pago updated!');
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
        Pago::destroy($id);

        return redirect('admin/pagos')->with('flash_message', 'Pago deleted!');
    }
}
