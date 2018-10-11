<?php

namespace Training_Management_System\Http\Controllers;

use Illuminate\Http\Request;
use Training_Management_System\Training;
use PDF;

class PdfController extends Controller
{
	public function index($id)
	{

		$data = Training::find($id);
        $pdf = PDF::loadView('pdf.index', compact('data'));
        return $pdf->stream('costume.pdf');

	}
}
