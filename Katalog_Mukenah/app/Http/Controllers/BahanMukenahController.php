<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BahanMukenah;
use DB;

class BahanMukenahController extends Controller
{
    public function index(){
        $bm= DB::table('bahan_mukenah')->get();
        return view('bahan_mukenah.bm', compact(['bm']));
    }

    public function tambah(){       
        return view('bahan_mukenah.tambahBM');
    }

    public function store(Request $request){       
        BahanMukenah::create($request->except(['_token','submit']));
        $bm= DB::table('bahan_mukenah')->get();
        return view('bahan_mukenah.bm', compact(['bm']));
    }

    public function edit($id){     
       $bm=DB::table('bahan_mukenah')->where('bahan_id',$id)->get();
       return view('bahan_mukenah.editBM', compact(['bm']));
    }

    public function update(Request $request){
        BahanMukenah::where('bahan_id', $request->bahan_id)
             ->update([
                    'bahan_id' => $request->bahan_id,
                    'bahan' => $request->bahan,
                    'keterangan' => $request->keterangan,
             ]);
             $bm= DB::table('bahan_mukenah')->get();
        return view('bahan_mukenah.bm', compact(['bm']));
    }

    public function hapus($id){     
        BahanMukenah::where('bahan_id', $id)->delete();
        $bm= DB::table('bahan_mukenah')->get();
        return view('bahan_mukenah.hapusBM', compact(['bm']));
    }
}
