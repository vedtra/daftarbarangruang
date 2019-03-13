<div class="col-sm-12">
        <div class="white-box">

            <a href="{{ URL::to('/admin/getPDF') }}">Export PDF</a>
            
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
								<th>Kode Ruang</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Jumlah Barang</th>
                                <th>Nip Dbr</th>
                                <th>No Bast</th>
                                <th>Status</th>
                                <th>Tanggal Awal</th>
                                <th>Tanggal Akhir</th>
                                <th>Tanggal Bast</th>
								
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($showdbr as $dbr)
						<tr>
							<td>{{$dbr->kode_ruang_milik}}</td>
                            <td>{{$dbr->kode_barang}}</td>
                            <td>{{$dbr->nama_barang}}</td>
							<td>{{$dbr->jlh_brg}}</td>
							<td>{{$dbr->nip_dbr}}</td>
                            <td>{{$dbr->no_bast}}</td>
                            <td>{{$dbr->kode_status}}</td>
                            <td>{{$dbr->tgl_awal}}</td>
                            <td>{{$dbr->tgl_akhir}}</td>
                            <td>{{$dbr->tgl_bast}}</td>
						

							
						</tr>
						@endforeach
                        </tbody>
                    </table>
        </div>
    </div>