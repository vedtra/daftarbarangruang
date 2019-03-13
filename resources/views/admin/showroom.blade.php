<div class="col-sm-12">
        <div class="white-box">
            
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
								<th>ID Ruang</th>
								<th>Nama Ruangan</th>
								<th>Keterangan</th>
								<th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($showruang as $rooms)
						<tr>
							<td>{{$rooms->id_ruang}}</td>
							<td>{{$rooms->nm_ruang}}</td>
							<td>{{$rooms->keterangan}}</td>
						

							
						</tr>
						@endforeach
                        </tbody>
                    </table>
        </div>
    </div>