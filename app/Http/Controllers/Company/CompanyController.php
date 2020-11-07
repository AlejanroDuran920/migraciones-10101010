<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index(){
        $companies=Company::all();
       return view('company.index',compact('companies'));
    }
    public function create(){
        return view('company.create');
    }
    public function store(Request $request){
        $company=Company::create($request->all());
        return redirect()->route('company.index');
    }
    public function show($id){
        // SELECT * FROM entity WHERE ID = ? 111  FIND
        $company=Company::find($id);
        return view('company.show',compact('company'));
    }
}
