<?php

namespace App\Http\Controllers;

use App\makul;
use Illuminate\Http\Request;
use Alert;

class makulController extends Controller
{
    public function index(){
        $makul = makul::all();
        return view('makul.index', compact('makul'));
    }
    public function create(){
        return view('makul.create');
    }
    public function store(Request $request){
        Makul::create($request->all());
        alert()->success('Success','Berhasil Menyimpan Data');
        return redirect()->route('makul');
    }
    public function edit($id){
        $makul = Makul::find($id);
       return view('makul.edit', compact('makul')); 
    }
    public function update(Request $request, $id){
        $makul = Makul::find($id);
        $makul->update($request->all());
        toast('Oke Data Berhasil Di Edit','success');
        return redirect()->route('makul');
    }
    public function del($id){
        $makul = Makul::find($id);
        $makul->delete();
        toast('Data Telah Berhasil Dihapus','success');
        return redirect()->route('makul');
    }
}
