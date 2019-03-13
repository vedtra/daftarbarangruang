<div class="col-sm-12">
        <div class="white-box">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>USERNAME</th>
                                <th>ROLE</th>
                                <th>PASSWORD</th>
                                <th>NIP</th>
                                <th>ACTION</th>
                            </tr>
                            {{ csrf_field() }}
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td class="txt-oflo">{{ $user->username }}</td>
                                <td><span class="text-success">{{ $user->nama_divisi }}</span></td>
                                <td class="txt-oflo">{{ $user->password }}</td>
                                <td class="txt-oflo">{{ $user->nip }}</td>
    
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
        </div>
    </div>