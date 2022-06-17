<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Log;
use App\Models\Purchase;
use App\Models\Refund;
use App\Models\Project;
use App\Models\Admin;
use App\Models\Cheque;

class PDFMaker extends Controller
{
    //

    function generateProjectSummaryReport() {

        $rand = rand(100000, 100000000000000);
        // $purchases = Purchase::where('project_id', $id)->get();
        // $funds = Refund::where('project_id', $id)->get();
        // $project = Project::find($id);

        // // return $logs;

        

        $projects = Project::all();
        $projectStart = Project::select('project_start')->orderBy('project_start', 'ASC')->get();
        $projectEnd = Project::select('project_ETA')->orderBy('project_ETA', 'DESC')->get();
        // return $projectEnd;

        $expenses = array();
        $profits = array();
        $totalAmountOfProjectValue = 0;
        $totalAmountOfExpenses = 0;
        $totalProfit = 0;

        for($i = 0; $i < count($projects); $i++) {
            $funds = Refund::orderByDesc('id')->where('project_id', $projects[$i]->id)->get();
            
            $totalExpenses = 0;
            for($j = 0; $j < count($funds); $j++) {
                $totalExpenses += $funds[$j]->amount;
            }

            $expenses[$i] = $totalExpenses;

            $profits[$i] = $projects[$i]->project_budget - $totalExpenses;

            $totalAmountOfProjectValue += $projects[$i]->project_budget;
            $totalAmountOfExpenses += $totalExpenses;
            $totalProfit = $totalAmountOfProjectValue - $totalAmountOfExpenses;
        }

        $projectSupervisor = Admin::select('name')
        ->where('user_type_id', 1)
        ->get();

        $projectManager = Admin::select('name')
        ->where('user_type_id', 2)
        ->get();

        $todayTime =  date("F d, Y h:i:s A", time());

        // return view('reports.projectSummaryReport')
        // ->with('projects', $projects)
        // ->with('expenses', $expenses)
        // ->with('numOfProjects', count($projects))
        // ->with('profits', $profits)
        // ->with('totalAmountOfProjectValue', $totalAmountOfProjectValue)
        // ->with('totalAmountOfExpenses', $totalAmountOfExpenses)
        // ->with('totalProfit', $totalProfit)
        // ->with('projectSupervisor', $projectSupervisor)
        // ->with('projectManager', $projectManager)
        // ->with('projectStart', $projectStart)
        // ->with('projectEnd', $projectEnd)
        // ->with('timeToday', $todayTime);

        $pdf = PDF::loadView('reports.projectSummaryReport', [
        'projects'=>$projects,
        'expenses'=>$expenses,
        'numOfProjects'=>count($projects),
        'profits'=>$profits,
        'totalAmountOfProjectValue'=>$totalAmountOfProjectValue,
        'totalAmountOfExpenses'=>$totalAmountOfExpenses,
        'totalProfit'=>$totalProfit,
        'projectSupervisor'=>$projectSupervisor,
        'projectManager'=>$projectManager,
        'projectStart'=> $projectStart,
        'projectEnd'=> $projectEnd,
        'timeToday'=>$todayTime
        ]);

        return $pdf->download('project_summary_report_'.$rand.'_'.$todayTime.'.pdf');
    }

    function chequesUtilizationReport($id) {
        // $purchases = Purchase::where('project_id', $id)->get();
        // $funds = Refund::where('project_id', $id)->get();
        // $project = Project::find($id);

        // // return $logs;
        $rand = rand(100000, 100000000000000);


       

        $cheques = Cheque::find($id);

        $purchases = Purchase::select('*')->where('cheque_id', $id)->get();

        $totalExpenses = 0;

        foreach($purchases as $purchase) {
            $totalExpenses += $purchase->amount;
        }


        $projectSupervisor = Admin::select('name')
        ->where('user_type_id', 1)
        ->get();

        $projectManager = Admin::select('name')
        ->where('user_type_id', 2)
        ->get();

        $todayTime =  date("F d, Y h:i:s A", time());


        // return $purchases;
         $pdf = PDF::loadView('reports.chequeUtilizationReport', [
            'cheques'=>$cheques,
            'purchases'=>$purchases,
            'projectSupervisor'=>$projectSupervisor,
            'projectManager'=>$projectManager,
            'timeToday'=>$todayTime,
            'totalExpenses'=>$totalExpenses,
         ]);

        return $pdf->download('cheque_utilization_report_'.$rand.'_'.$todayTime.'.pdf');

        // return view('reports.chequeUtilizationReport')
        // ->with('cheques', $cheques)
        // ->with('purchases', $purchases)
        // ->with('projectSupervisor', $projectSupervisor)
        // ->with('projectManager', $projectManager)
        // ->with('timeToday', $todayTime)
        // ->with('totalExpenses', $totalExpenses);
    }

    function disburseChequeSummary() {
        // $purchases = Purchase::where('project_id', $id)->get();
        // $funds = Refund::where('project_id', $id)->get();
        // $project = Project::find($id);
        $rand = rand(100000, 100000000000000);

        // // return $logs;

        $projectSupervisor = Admin::select('name')
        ->where('user_type_id', 1)
        ->get();

        $projectManager = Admin::select('name')
        ->where('user_type_id', 2)
        ->get();

        $todayTime =  date("F d, Y h:i:s A", time());

        $purchases = Purchase::all();
        $chequeStart = Cheque::all()[0];
        $chequeEnd = Cheque::find(count(Cheque::all()));

        $totalAmount = 0;

        foreach($purchases as $purchase) {
            $totalAmount += $purchase->cheque->amount;
        }

        $pdf = PDF::loadView('reports.disbursementChequeSummary', [
            'purchases'=>$purchases,
            'projectSupervisor'=>$projectSupervisor,
            'projectManager'=>$projectManager,
            'timeToday'=>$todayTime,
            'chequeStart'=>$chequeStart,
            'chequeEnd'=>$chequeEnd,
            'totalAmount'=>$totalAmount,
        ]);

        return $pdf->download('disbursement_cheque__summary_'.$rand.'_'.$todayTime.'.pdf');

        // return view('reports.disbursementChequeSummary')
        // ->with('purchases', $purchases)
        // ->with('projectSupervisor', $projectSupervisor)
        // ->with('projectManager', $projectManager)
        // ->with('timeToday', $todayTime)
        // ->with('chequeStart', $chequeStart)
        // ->with('chequeEnd', $chequeEnd)
        // ->with('totalAmount', $totalAmount);
    }


    function gen($id) {

        // return $id;
        // $pdf = App::make('dompdf.wrapper');


        // $pdf->loadHTML('<h1>Test</h1>');
        
        // return $pdf->stream();

        // $logs = Log::all();

        $rand = rand(100000, 100000000000000);
        $purchases = Purchase::where('project_id', $id)->get();

        $funds = Refund::where('project_id', $id)->get();
        
        $project = Project::find($id);

        $projectSupervisor = Admin::select('name')
        ->where('user_type_id', 1)
        ->get();
        

        $projectManager = Admin::select('name')
        ->where('user_type_id', 2)
        ->get();
        

        $todayTime =  date("F d, Y h:i:s A", time());

        $totalExpenses = 0;

        // foreach($funds as $fund) {
        //     $totalExpenses += $fund->amount;
        // }

        foreach($purchases as $purchase) {
            $totalExpenses += $purchase->amount;
        }

        $totalFunds = 0;

        foreach($funds as $fund) {
            $totalFunds += $fund->amount;
        }




        // return $purchases;

        // // return $logs;

        $pdf = PDF::loadView('reports.projectInvoice', [
            'purchases'=> $purchases,
            'project'=> $project,
            'funds'=> $funds,
            'projectSupervisor'=>$projectSupervisor,
            'projectManager'=>$projectManager,
            'timeToday'=> $todayTime,
            'totalExpenses'=> $totalExpenses,
            'totalFunds' => $totalFunds
        ]);

        return $pdf->download('project_invoice_'.$rand.'_'.$todayTime.'.pdf');

        

        // return $funds;


        // return view('reports.projectInvoice')
        // ->with('purchases', $purchases)
        // ->with('project', $project)
        // ->with('funds', $funds)
        // ->with('projectSupervisor',$projectSupervisor)
        // ->with('projectManager',$projectManager)
        // ->with('timeToday', $todayTime)
        // ->with('totalExpenses', $totalExpenses)
        // ->with('totalFunds', $totalFunds);
        

    }


}
