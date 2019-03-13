@extends('layouts.master')
@section('row1')
    <form class="form-horizontal form-material" role="form" method="POST" enctype="multipart/form-data" action="{{url('admin/confirm',$pemohons->id)}}"">
        {{ csrf_field() }}
        
 
       <div class="form-group">
            <label class="col-md-12">Status</label>
            <div class="col-md-12">
                <input type="text"  value="Diterima" name="kode_status_mohon" class="form-control form-control-line" readonly=""> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Ruang Baru</label>
            <div class="col-md-12">
                <input type="text"  value="{{ $pemohons->ruang_tujuan }}" name="kode_ruang_milik" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12">
                <button class="btn btn-success">Konfirmasi</button>
            </div>
        </div>

        </form>
@endsection
