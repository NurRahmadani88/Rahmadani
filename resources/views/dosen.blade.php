<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Homepage</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Politeknik Negeri Bengkalis | D-IV Keamanan Sistem Informasi</a>
        </div>
        <div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-primary p-4">
  <a href="{{ route('beritaksi') }}" class="navbar-brand">Berita KSI</a>
    <a href="{{ route('lulusan') }}" class="navbar-brand">Profile Lulusan KSI</a>
    <a href="{{ route('dosen') }}" class="navbar-brand">Profile Dosen</a>
  <a href="{{ route('user.home')}}" class="navbar-brand">Home</a>

  </div>
</div>
    <nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    </nav>
</nav>
<div class="container mt-3 m-5 font-weight:bold;"><h5>Data Dosen Jurusan Teknik Informatika</div>
<table class="container table table-bordered table-primary border-dark mt-5">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIP/NIK</th>
      <th scope="col">Nama</th>
      <th scope="col">NIDN</th>
      <th scope="col">Program Studi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>1</th>
      <td>198805072015041003</td>
      <td>Fajri Profesio Putra, M.Cs</td>
      <td>0007058802</td>
      <td>D4 Rekayasa Perangkat Lunak</td>
    </tr>
    <tr>
      <th>2</th>
      <td>197706072014041001</td>
      <td>Kasmawi, M.Kom</td>
      <td>1007067701</td>
      <td>D4 Keamanan Sistem Informasi</td>
    </tr>
    <tr>
      <th>3</th>
      <td>197912172021212008</td>
      <td>Sri Mawarni, M.Si</td>
      <td>1017127901</td>
      <td>D3 Teknik Informatika</td>
    </tr>
  </tbody>
</table>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>