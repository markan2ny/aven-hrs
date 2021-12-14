<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Imports\EmployeeImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('role:admin');

    }

    public function index() {
        // $data = Employee::all();
        // dd($data);
        return view('admin.dashmain');
        
    }

    public function table() {
        
        return view('admin.table');

    }

    public function store(Request $request) {
        
        
        $file = $request->file('import_file');
        
        Excel::import(new EmployeeImport, $file);

        return back()->withStatus('Imported!');

    }
}
