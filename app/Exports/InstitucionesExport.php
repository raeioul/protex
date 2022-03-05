<?php

namespace App\Exports;

use App\Models\Institucione;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class InstitucionesExport implements FromView
{
    public function view(): View
    {
        return view('encuestas.instituciones.table', [
            'instituciones' => Institucione::all()
        ]);
    }
}
