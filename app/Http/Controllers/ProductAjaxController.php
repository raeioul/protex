<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class ProductAjaxController extends Controller
{
    public function token(Request $request)
    {
        $data = [];
        if ($request->has('q')) {
            $search = $request->q;
            $proveedor = $request->proveedor;
            $data = DB::table("productos")
                ->select("id", "name", "provider_id")
         		->where('provider_id','=', $proveedor)
                ->where('name', 'LIKE', "%$search%")
                ->get();
            foreach ($data as $tag) {
                $formatted_tags[] = ['id' => $tag->name, 'text' => $tag->name];
            }
        }
        return response()->json($formatted_tags);
    }
}

