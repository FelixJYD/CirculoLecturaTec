<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
     public function store(Request $request) {
        Report::create ([
            'user_id' =>$request->user_id,
            'book_id' =>$request->book_id,
            'cont_report' =>$request->cont_report,
        ]);
     } 
}
