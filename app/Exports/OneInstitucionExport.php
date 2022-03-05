<?php

namespace App\Exports;

use App\Models\Institucione;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class OneInstitucionExport implements FromView
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
            'institucione' => $this->data
        ]);
    }
}