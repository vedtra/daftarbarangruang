@extends('layouts.master')
@section('row1')
    <form class="form-horizontal form-material" role="form" method="POST" enctype="multipart/form-data" action="{{action('AdminController@rejectprocessbaru', $tolak)}}">
        {{ csrf_field() }}

          <div class="form-group">
            <label class="col-md-12">Status</label>
            <div class="col-md-12">
                <input type="text"  value="Ditolak" name="kode_status_mohon" class="form-control form-control-line" readonly=""> </div>
        </div>

        

        <div class="form-group">
            <label class="col-md-12">Keterangan</label>
            <div class="col-md-12">
                <input type="text" name="keterangan" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12">
                <button class="btn btn-success">Konfirmasi</button>
            </div>
        </div>

        </form>
@endsection
