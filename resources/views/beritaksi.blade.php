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
  <a href="{{ route('user.home') }}" class="navbar-brand">Home</a>

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

<div class="card mb-3" style="max-width: 100%;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="{{ ('image/faiz.jpg') }}" style="height: 500px; width: 480px;">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title" style="position: relative; font-weight:bold;">Keamanan Sistem Informasi</h5>
            <p class="card-text">Visi: <br> Visi program studi Sarjana Terapan Keamanan Sistem Informasi adalah Menjadi Program Studi Sarjana Terapan yang Unggul dalam bidang Keamanan Informasi.</p>
            <p class="card-text">Misi: <br> Untuk dapat merealisasikan Visi yang telah ditetapkan tersebut, Prodi Sarjana Terapan KSI menetapkan Misi, sebagai berikut: <br>
            
    1. Menyelenggarakan pendidikan vokasi berkualitas yang berfokus dibidang keamanan informasi, dengan kurikulum yang komprehensif dan relevan, untuk mempersiapkan mahasiswa yang professional dan berkualitas untuk menghadapi tantangan global<br>
    2. Membangun budaya akademik dan organisasi yang berkarakter dan bermartabat dengan menjunjung tinggi etika professional kepada Mahasiswa<br>
    3. Melakukan  penelitian terapan dan inovasi dibidang keamanan informasi untuk menghasilkan kontribusi dalam pemecahan masalah keamanan informasi sesuai dengan kebutuhan masyarakat dan industry.<br>
    4. Mengembangkan kemitraan dengan industri dan lembaga terkait untuk memperkaya pengalaman mahasiswa dan mendorong adopsi solusi keamanan yang efektif.<br>
    5. Melakukan program pengabdian pada masyrakat untuk menghasilkan karya yang dapat diaplikasikan untuk menyelesaikan permasalahan yang terjadi di masyarakat dan industry.<br>
            </p>
        </div>
        </div>
    </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>