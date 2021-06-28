<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
Use Alert;

class mahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = Mahasiswa::all();
        return view ('mahasiswa.index', compact('mahasiswa'));
    }
    public function create(){
        return view ('mahasiswa.tambah');
    }
    public function store(Request $request){
        Mahasiswa::create($request->all());
        return redirect()->route('index');
    }
    public function edit($id){
        $mahasiswa = Mahasiswa::find($id);
        return view ('mahasiswa.edit', compact('mahasiswa'));
    }
    public function update(Request $request, $id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        return redirect()->route('index');
    }
}
