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
								<th>Action</th>
							</tr>
							@foreach($mohon as $mohons)
							<tr>
								<td>{{$mohons->id_dbr_mohon}}</td>
								<td>{{$mohons->nip}}</td>
								<td>{{$mohons->jenis_mohon}}</td>
								<td>{{$mohons->kode_status_mohon}}</td>
								<td>{{$mohons->ruang_asal}}</td>
								<td>{{$mohons->ruang_tujuan}}</td>
								
								<td>

                                    
                                    <a href="{{action('AdminController@showmohondetail',$mohons->id)}}" class="btn btn-primary">terima</a>
                                
                                </td>

                                <td>

                                    
                                    <a href="{{action('AdminController@showreject', $mohons->tolak)}}" class="btn btn-primary">tolak</a>
                                
                                </td>
						
							</tr>
							@endforeach
						</table>
					</div>
				</div>
			</div>	
    </div>
</div>
	@endsection