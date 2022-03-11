<?php

namespace App\Exports;

use App\Models\Satisfaccione;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class OneSatisfaccionExport implements FromView
{
    public $view;
	public $data;

	public function __construct($view, $data = "")
	{
	    $this->view = $view;
	    $this->data = $data;
	}
	/**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view(
        	$this->view, [
            'satisfaccione' => $this->data
        ]);
    }
}