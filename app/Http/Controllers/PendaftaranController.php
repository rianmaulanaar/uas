<?php

namespace App\Http\Controllers;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function indexorder(){
        $eks = Pendaftaran::join('ekskuls','ekskuls.id','=','pendaftarans.id_ekskul')
        ->get(['pendaftarans.*','ekskuls.*']);
        
        return view('pendaftaran.index', compact('eks'));
    }

    public function tambahpen(){
        return view('pendaftaran.tambah');
    }

    public function storeorder(Request $request){
        Pendaftaran::create($request->all());
        return redirect('order/view');
    }
    
    public function vieworder(){
        $eks = Ekskul::all();
        return view('pendaftaran.view', compact('eks'));
    }
}
