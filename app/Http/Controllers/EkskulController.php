<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekskul;

class EkskulController extends Controller
{
    public function indexekskul(){
        $eks = Ekskul::all();
        return view('admin.ekskul', compact('eks'));
    }

    public function tambaheks(){
        return view('admin.tambah');
    }

    public function storeekskul(Request $request){

        Ekskul::create($request->all());
        return redirect('admin');
    }

    public function editeks(Ekskul $eks){
        return view('admin.edit', compact('eks')) ;
    }
    
    public function updateeks(Request $request, Ekskul $eks)
    {
        $eks->update($request->all());
        return redirect('admin') ;
    }

    public function destroy(Ekskul $eks)
    {
        $eks->delete();
        return redirect('admin');
    }
}
