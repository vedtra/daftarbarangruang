@extends('layouts.master')
@section('row1')
<div class="col-sm-12">
       <div class="white-box">
			<div class="container">
				<div class="panel-heading"></div>
		    		<div class="row">
		    			<table class="table table-striped">
							<tr>
								<th>Nama Barang</th>
								<th>Jenis Mohon</th>
								<th>Jumlah</th>
								<th>NIP</th>
								<th>Status</th>
								<th>Ruang Tujuan</th>
								<th>Keperluan</th>
								<th>Keterangan</th>
							</tr>
							@foreach($datamohon as $pemohons)
							<tr>
								<td>{{$pemohons->nm_brg}}</td>
								<td>{{$pemohons->jenis_mohon}}</td>
								<td>{{$pemohons->jumlah}}</td>
								<td>{{$pemohons->Nip}}</td>
								<td>{{$pemohons->kode_status_mohon}}</td>
								<td>{{$pemohons->ruang_tujuan}}</td>
								<td>{{$pemohons->keperluan}}</td>
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