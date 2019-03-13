@extends('layouts.master')
@section('row1')
<div class="col-sm-12">
       <div class="white-box">
			<div class="container">
				<div class="panel-heading"></div>
		    		<div class="row">
		    			<table class="table table-striped">
							<tr>
								<th>kode barang</th>
								<th>NIP</th>
								<th>Jenis Mohon</th>
								<th>Status</th>
								<th>Ruang Asal</th>
								<th>Ruang Tujuan</th>
								<th>Keterangan</th>
							</tr>
							@foreach($datamohon as $pemohons)
							<tr>
								<td>{{$pemohons->id_dbr_mohon}}</td>
								<td>{{$pemohons->nip}}</td>
								<td>{{$pemohons->jenis_mohon}}</td>
								<td>{{$pemohons->kode_status_mohon}}</td>
								<td>{{$pemohons->ruang_asal}}</td>
								<td>{{$pemohons->ruang_tujuan}}</td>
								<td>{{$pemohons->keterangan}}</td>
								
						
							</tr>
							@endforeach
						</table>
					</div>
				</div>
			</div>	
    </div>
</div>
	@endsection