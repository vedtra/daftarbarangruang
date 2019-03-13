<h1>DBR List</h1>
<table>
  <thead>
    <tr>
      <th>NUP</th>
      <th>Nama Barang</th>
      <th>Kode Ruang</th>
      <th>Jumlah Barang</th>
      <th>NIP</th>
      <th>no bast</th>
     

    </tr>
  </thead>
  <tbody>
    @foreach($dbr as $dbrs)
      <tr>
        <td>{{ $dbrs->kode_barang }}</td>
        <td>{{ $dbrs->nama_barang }}</td>
        <td>{{ $dbrs->kode_ruang_milik }}</td>
        <td>{{ $dbrs->jlh_brg }}</td>
        <td>{{ $dbrs->nip_dbr }}</td>
        <td>{{ $dbrs->no_bast }}</td>
      </tr>
    @endforeach
  </tbody>
</table>