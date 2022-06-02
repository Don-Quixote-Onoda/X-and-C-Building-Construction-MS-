<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Log;
use App\Models\Purchase;
use App\Models\Refund;
use App\Models\Project;

class PDFMaker extends Controller
{
    //
    function gen($id) {

        // return $id;
        // $pdf = App::make('dompdf.wrapper');


        // $pdf->loadHTML('<h1>Test</h1>');
        
        // return $pdf->stream();

        // $logs = Log::all();

        $rand = rand(100000, 100000000000000);

        // // return $logs;

        // $pdf = PDF::loadView('reports.projectInvoice');

        // return $pdf->download('project'.$rand.'invoice.pdf');

        $purchases = Purchase::where('project_id', $id)->get();
        $funds = Refund::where('project_id', $id)->get();
        $project = Project::find($id);

        // return $funds;

        return view('reports.projectInvoice')
        ->with('purchases', $purchases)
        ->with('project', $project)
        ->with('funds', $funds);
        

    }
}
