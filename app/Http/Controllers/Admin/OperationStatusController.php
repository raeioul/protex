<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Status;
use App\Models\OperationStatus;
use Illuminate\Http\Request;

class OperationStatusController extends Controller
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
            $operationstatus = OperationStatus::where('name', 'LIKE', "%$keyword%")
                ->orWhere('operation_id', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $operationstatus = OperationStatus::latest()->paginate($perPage);
        }

        return view('admin.operation-status.index', compact('operationstatus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.operation-status.create');
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
        
        OperationStatus::create($requestData);

        return redirect('admin/operations')->with('flash_message', 'OperationStatus added!');
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
        $operationstatus = OperationStatus::findOrFail($id);

        return view('admin.operation-status.show', compact('operationstatus'));
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
        $item = OperationStatus::findOrFail($id);
        $status =  Status::pluck('name','id')->toArray();
        $status = array_combine($status, $status);

        return view('admin.operation-status.edit', compact('item'))
        ->with('status', $status);
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
        
        $operationstatus = OperationStatus::findOrFail($id);
        $operationstatus->update($requestData);

        return redirect('admin/operations')->with('flash_message', 'OperationStatus updated!');
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
        OperationStatus::destroy($id);

        return redirect('admin/operations')->with('flash_message', 'OperationStatus deleted!');
    }
}
