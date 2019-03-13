<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Dbr;
use App\Models\pindahbarang;
use App\Models\User;
use App\Models\barang;
use App\Models\barang_baru;
use App\Models\stok_brg;
use App\Models\Ruang;
use DB;
use Auth;
class PemohonController extends Controller
{
    public function addpindah()
    {      
        $dbr =Dbr::all();
        $ruang = Ruang::all();
        return view ('pemohon.addpindah',compact('dbr','ruang')); 
    }

    public function showmohonpindah()
    {    
        $datamohon = DB::table('td_dbr_mohon')->where('td_dbr_mohon.nip', '=', Auth::user()->nip)->get();  
       
        return view ('pemohon.showmohonpindah',compact('datamohon')); 
    }
                                                                                                
    public function showmohonbaru()
    {    
        $datamohon = DB::table('td_mohon_baru')->where('td_mohon_baru.nip', '=', Auth::user()->nip)->get();  
        
        return view ('pemohon.showmohonbaru',compact('datamohon')); 
    }

    public function addbarangbaru()
    {   $dbr =Dbr::all();   
        $storebrg =barang::all();
        $stok = stok_brg::all();
        return view ('pemohon.addbarangbaru',compact('storebrg','dbr','stok')); 
    }

    public function storepindah(Request $request)
    {   
        $dbr =new Dbr();
        $reqpindah = new pindahbarang();
        $reqpindah->id = $request->id;
        $reqpindah->id_dbr_mohon = $request->id_dbr_mohon;
        $reqpindah->nip = $request->nip;
        $reqpindah->jenis_mohon = $request->jenis_mohon;
        $reqpindah->kode_status_mohon = $request->kode_status_mohon;
        $reqpindah->ruang_asal = $request->ruang_asal;
        $reqpindah->ruang_tujuan = $request->ruang_tujuan;
        $reqpindah->save();
        return redirect(url('/'));
    }

    public function storebaru(Request $request)
    {   
        $reqbaru = new barang_baru();
        $reqbaru->id = $request->id;
        $reqbaru->nm_brg = $request->nm_brg;
        $reqbaru->jenis_mohon = $request->jenis_mohon;
        $reqbaru->jenis_mohon = $request->jenis_mohon;
        $reqbaru->jumlah = $request->jumlah;
        $reqbaru->Nip = $request->Nip;
        $reqbaru->kode_status_mohon = $request->kode_status_mohon;
        $reqbaru->ruang_tujuan = $request->ruang_tujuan;
        $reqbaru->keperluan = $request->keperluan;
        $reqbaru->save();
        return redirect(url('/'));
    }
}
