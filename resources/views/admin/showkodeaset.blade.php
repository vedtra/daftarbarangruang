<h1>Data Kode aset</h1>
<div class="col-sm-12">
        <div class="white-box">
            
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
								<th>Kode Golongan</th>
								<th>Kode Bidang</th>
								<th>Kode Kelompok</th>
                                <th>Kode sub kelompok</th>
                                <th>Kode sub sub kelompok</th>
                                <th>Kondisi </th>
                                <th>NUP</th>
                                
								
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kodeaset as $kodeasets)
						<tr>
							<td>{{$kodeasets->id_gol}}</td>
							<td>{{$kodeasets->id_bid}}</td>
							<td>{{$kodeasets->id_kel}}</td>
                            <td>{{$kodeasets->id_subkel}}</td>
                            <td>{{$kodeasets->id_ssubkel}}</td>
                            <td>{{$kodeasets->kondisi}}</td>
                            <td>{{$kodeasets->nup}}</td>
                         
						</tr>
						@endforeach
                        </tbody>
                    </table>
        </div>
    </div>