<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use PDF;
// use Barryvdh\DomPDF\PDF;

class EmployeeController extends Controller
{
    //
    public function showEmployees(){
        $employee = Employee::all();
        return view('index', compact('employee'));
    }

    // Generate PDF
    public function createPDF() {
        // retreive all records from db
        $data = Employee::all();
        
        // dd($data);die;
        // share data to view
        // view()->share('employee',$data);
        // $data =$datas->toArray();
        $pdf = PDF::loadView('pdf_view', compact('data'));
        // $pdf = PDF::loadView('pdf_view',compact('data'))->output();
        // download PDF file with download method
        // $pdf = PDF::loadView('myPDF', $data);
        
    
        return $pdf->download('itsolutionstuff.pdf');
        // return $pdf->download('pdf_file.pdf');
        // return response()->streamDownload(fn () => print($pdf),"filename.pdf");
      }
}
