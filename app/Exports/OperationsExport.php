<?php

namespace App\Exports;

use App\Models\Institucione;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class OperationsExport implements FromView
{
    
	public $view;
	public $data;
    public $suma;
    public $almacen;
    public $cancel;

	public function __construct($view, $data, $suma = "", $almacen = "", $cancel = "")
	{
	    $this->view = $view;
	    $this->data = $data;
        $this->suma = $suma;
        $this->almacen = $almacen;
        $this->cancel = $cancel;
	}
	/**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view(
        	$this->view, [
            'operations' => $this->data,
            'suma' => $this->suma,
            'almacen' => $this->almacen,
            'cancel' => $this->cancel,
        ]);
    }
}
