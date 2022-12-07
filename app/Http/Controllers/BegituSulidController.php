<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BegituSulid;

class BegituSulidController extends Controller
{
    public function index(){

        $data = BegituSulid::get();
  
      return view('index')
      ->with('data', $data);
     }

     public function store(Request $request)
     {
         $request->validate([
             'Nis' => 'required',
             'Nama' => 'required',
             'Rayon' => 'required',
             'Uang' => 'required',
         ]);
 
         BegituSulid::create($request->all());
 
         return redirect()->route('index')
                     ->with('success', 'Create Succesfully!');
     }
}
