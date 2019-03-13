<h1>Data Ruang Milik</h1>
<div class="col-sm-12">
        <div class="white-box">
            
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
								<th>Kode Ruang</th>
								<th>Kd Unit</th>
								<th>NIP Rekam</th>
                                <th>NIP Tanggung jawab</th>
                                <th>NIP Update</th>
                                <th>NO Nd </th>
                                <th>Tanggal awal</th>
                                <th>Tanggal akhir</th>
								
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($showruangmilik as $rooms)
						<tr>
							<td>{{$rooms->kode_ruang}}</td>
							<td>{{$rooms->kd_unit}}</td>
							<td>{{$rooms->nip_rekam}}</td>
                            <td>{{$rooms->nip_tgjwb}}</td>
                            <td>{{$rooms->nip_update}}</td>
                            <td>{{$rooms->no_nd}}</td>
                            <td>{{$rooms->tgl_awal}}</td>
                            <td>{{$rooms->tgl_nd}}</td>

						</tr>
						@endforeach
                        </tbody>
                    </table>
        </div>
    </div>