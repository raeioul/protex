<?php

namespace App\Exports;

use App\Models\Satisfaccione;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SatisfaccionesExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('encuestas.satisfacciones.table', [
            'satisfacciones' => Satisfaccione::all()
        ]);
    }
}
