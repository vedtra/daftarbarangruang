<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Ruang;
use App\Models\RuangMilik;
use App\Models\Dbr;
use App\Models\pindahbarang;
use App\Models\barang_tolak;
use App\Models\kode_aset;
use App\Models\barang;
use App\Models\stok_brg;
use App\Models\barang_baru;
use App\Models\User;
use App\Models\barang_tolak_baru;
use Validator;
use Response;
use DB;
use PDF;  
// use Input;
use Illuminate\Support\Facades\Input;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showruang()
    {
        $showruang =Ruang::all();

        return view ('admin.showroom',compact('showruang'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addroom()
    {
        return view('admin.addroom');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeruang(Request $request)
    {
        $ruang = new Ruang();
        $ruang->id_ruang = $request->id_ruang;
        $ruang->nm_ruang = $request->nm_ruang;
        $ruang->keterangan = $request->keterangan;
        $ruang->save();
        return redirect(url('/'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function addruangmilik()
    {   $ruang = Ruang::all();   
    
          return view ('admin.addruangmilik',compact('ruang'));  
    }
    
    public function storedbr(Request $request)
    {
        
        $dbr=new Dbr();
        $dbr->kode_ruang_milik = $request->kode_ruang_milik;
        $dbr->kode_barang = $request->kode_barang;
        $dbr->nama_barang = $request->nama_barang;
        $dbr->jlh_brg = $request->jlh_brg;
        $dbr->nip_dbr = $request->nip_dbr;
        $dbr->no_bast = $request->no_bast;
        $dbr->kode_status = $request->kode_status;
        $dbr->tgl_awal = $request->tgl_awal;
        $dbr->tgl_akhir = $request->tgl_akhir;
        $dbr->tgl_bast = $request->tgl_bast;
        $dbr->save();
        
        return redirect(url('/'));        

    }

    public function showruangmilik()
    {
        $showruangmilik =RuangMilik::all();

        return view ('admin.showroommilik',compact('showruangmilik'));

    }

    public function showdbr()
    {
        $showdbr =Dbr::all();

        return view ('admin.showdbr',compact('showdbr'));

    }

    public function addDbr()
    {   $ruang = Ruang::all();
        $brg =barang::all();
        return view('admin.addDbr',compact('ruang','brg')); 

    }

    public function storeruangmilik(Request $request)
    {
        
        $ruangmilik=new RuangMilik();
        $ruangmilik->kode_ruang = $request->kode_ruang;
        $ruangmilik->kd_unit = $request->kd_unit;
        $ruangmilik->nip_rekam = $request->nip_rekam;
        $ruangmilik->nip_tgjwb = $request->nip_tgjwb;
        $ruangmilik->nip_update = $request->nip_update;
        $ruangmilik->no_nd = $request->no_nd;
        $ruangmilik->tgl_awal = $request->tgl_awal;
        $ruangmilik->tgl_nd = $request->tgl_nd;
        $ruangmilik->save();
        
        return redirect(url('/'));        

    }

    
    public function addkodeaset()
    {
         return view('admin.addkodeaset');

    }

    public function storeaset(Request $request)
    {
        
        $aset=new kode_aset();
        $aset->id_gol = $request->id_gol;
        $aset->id_bid = $request->id_bid;
        $aset->id_kel = $request->id_kel;
        $aset->id_subkel = $request->id_subkel;
        $aset->id_ssubkel = $request->id_ssubkel;
        $aset->kondisi = $request->kondisi;
        $aset->nup =$request->id_gol.-$request->id_bid.-$request->id_kel.-$request->id_subkel.-$request->id_ssubkel;
        $aset->save();
        
        return redirect(url('/'));        

    }

    public function storebrg(Request $request)
    {
        
        $brg=new barang();
        $brg->kode_brg = $request->kode_brg;
        $brg->nm_brg = $request->nm_brg;
        $brg->merk = $request->merk;
        $brg->spek_lain = $request->spek_lain;
        $brg->type = $request->type;
        $brg->keterangan = $request->keterangan;
        $brg->save();
        
        return redirect(url('/'));        

    }

    public function showkodeaset()
    {   $kodeaset =kode_aset::all();
         return view ('admin.showkodeaset',compact('kodeaset'));

    }

    public function addbarang()
    {
        return view('admin.addbarang');
    }

    public function addstok_brg()
    {
        $kodeaset = kode_aset::all();
        return view('admin.addstokbrg',compact('kodeaset'));

    }

    public function storestokbrg(Request $request)
    {
        $brg = new barang();
        $stok = new stok_brg();
        $brg->kode_brg = $request->kode_brg;
        $brg->nm_brg = $request->nm_brg;
        $brg->keterangan = $request->keterangan;
        $brg->merk = $request->merk;
        $brg->spek_lain = $request->spek_lain;
        $brg->type = $request->type;
        
        $stok->kode_barang = $brg->kode_brg ;
        $stok->jumlah =$request->jumlah;
        $stok->no_bast =$request->no_bast;
        $stok->saldo =$request->saldo;
        $stok->tahun =$request->tahun;
        $stok->tgl_bast =$request->tgl_bast;

        $brg->save();
        $stok->save();
        return redirect('/');
    }

    public function showstokbrg()
    {   $stokbrg =barang::all();
         return view ('admin.showstokbarang',compact('stokbrg'));
         
    }

    public function confirm(Request $request, $id)
    {
        
     $dbr = Dbr::find($id);
     $pemohon = pindahbarang::find($id);
     $dbr->kode_ruang_milik = $request->input('kode_ruang_milik');
     $pemohon->kode_status_mohon = $request->input('kode_status_mohon');
     $pemohon->save();
     $dbr->save();
     $pemohon->save();
    return redirect(url('/'));
       
    }

    public function showmohon()
    {
        $mohon =pindahbarang::all();
        return view('admin.listmohon',compact('mohon'));
    }

    public function showmohondetail($id)
    {

        $pemohons =pindahbarang::find($id);
        
        $dbr = Dbr::find($id);
        
        return view('admin.mohondetail',compact('pemohons', 'dbr','id')); 

    }
    
   public function showrejectbaru($tolak)
    {
        $pemohons =barang_tolak_baru::find($tolak);

        return view('admin.tolakmohonbaru',compact('pemohons','tolak'));
    }

    public function showreject($tolak)
    {
        $pemohons =barang_tolak::find($tolak);

        return view('admin.tolakmohon',compact('pemohons','tolak'));
    }

    public function rejectprocessbaru(Request $request, $tolak)
    {
       
        $pemohons =barang_tolak_baru::find($tolak);
        $pemohons->keterangan =  $request->input('keterangan');
        $pemohons->kode_status_mohon =  $request->input('kode_status_mohon');
        $pemohons->save();
        return redirect(url('/'));

    } 

    public function rejectprocess(Request $request, $tolak)
    {
       
        $pemohons =barang_tolak::find($tolak);
        $pemohons->keterangan =  $request->input('keterangan');
        $pemohons->kode_status_mohon =  $request->input('kode_status_mohon');
        $pemohons->save();
        return redirect(url('/'));

    } 

    public function confirmbaru(Request $request, $id)
    {
        
     $dbr = Dbr::find($id);
     $pemohon = barang_baru::find($id);
     $stok = stok_brg::find($id);
     $pemohon->kode_status_mohon = $request->input('kode_status_mohon');
      
      $dbr=new Dbr();
        $dbr->kode_ruang_milik = $request->kode_ruang_milik;
        $dbr->kode_barang = $request->kode_barang;
        $dbr->nama_barang = $request->nama_barang;
        $dbr->jlh_brg = $request->jlh_brg;
        $dbr->nip_dbr = $request->nip_dbr;
        $dbr->no_bast = $request->no_bast;
        $dbr->kode_status = $request->kode_status;
        $dbr->tgl_awal = $request->tgl_awal;
        $dbr->tgl_akhir = $request->tgl_akhir;
        $dbr->tgl_bast = $request->tgl_bast;
        // $kurang = $stok->request->jumlah - $pemohon->request->jumlah;
        // $stok->jumlah = $stok->saldo - $pemohon->jumlah;
        // dd($stok);
        // $kurang =stok_brg::select(['jumlah']) - barang_baru::select(['jumlah']);
        $kurang= ((int)$stok->jumlah - (int)$pemohon->jumlah);

        $data = array(
            'jumlah'=>$kurang
            );
         // dd($kurang);
        // DB::table('td_brg_stok')->where("td_brg_stok.kode_barang", '=', $id)->update(['td_brg_stok.jumlah'=>$kurang]);

        DB::table('td_brg_stok')->where('id','=',$id)->update(array('jumlah' => $kurang));

        // $data =array(
        //     'jumlah' =>$kurang
        // );
        // DB::table('td_brg_stok')->where('id','=',Input::get('id'))->update($data);

     $pemohon->save();
     $dbr->save();
     $stok->save();
    return redirect(url('/'));
       
    }

    public function showmohonbaru()
    {
        $pemohon =barang_baru::all();
        return view('admin.listmohonbaru',compact('pemohon'));
    }

    public function showmohondetailbrg($id)
    {

        $pemohons =barang_baru::find($id);
        $dbr = Dbr::find($id);
        $brg =barang::all();

        return view('admin.mohonbarudetail',compact(['pemohons', 'dbr','brg'])); 
    }

    public function addakun()
    {
        return view('admin.addakun');
    }

     public function storeakun(Request $request)
    {
        $data = $request->all();
        User::create([
            'username' => $data['username'],
            'role' => $data['role'],
            'nip' => $data['nip'],
            'password' => bcrypt($data['password']),]

        );
        return redirect(url('/'));
    }

    public function showakun()
    {
        $users = DB::table('users')
                 ->join('divisis', 'users.role', '=', 'divisis.id_divisi')
                 ->select('users.*','divisis.*')
                 ->get();

        return view('admin.showakun')->with('users', $users);
    }

    public function exportpdf(Request $request, $id)
    { 
      $dbr = DB::table('td_dbr')->where('td_dbr.kode_ruang_milik', '=',$id)->get();
      // $dbr =Dbr::all();

      $pdf =PDF::loadView('pdf.dbr', compact('dbr'));
      return $pdf->download('dbr'.date("Y-m-d").'.pdf');

    }

     public function exportpdfAll()
    { 
      
      $dbr =Dbr::all();
      
      $pdf =PDF::loadView('pdf.dbr', compact('dbr'));
      return $pdf->download('dbr'.date("Y-m-d").'.pdf');

    }

    public function showlaporan()
    {
      $ruang=Ruang::all();

      return view('admin.showlaporan',compact('ruang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
