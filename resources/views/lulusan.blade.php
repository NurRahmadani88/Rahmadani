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
<div class="card mb-3" style="max-width: 100%;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="{{ ('image/faiz.jpg') }}" style="height: 500px; width: 480px;">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title" style="position: relative; font-weight:bold;">Profile Lulusan</h5>
            <p class="card-text">Profil Lulusan : <br>
    1. Lulusan memiliki kemampuan mengembangkan rencana dan kebijakan keamanan informasi serta memiliki kemampuan menguji, analisis dan menilai potensi risiko keamanan informasi pada sistem informasi beserta perangkat pendukungnya untuk memastikan kerahasiaan, integritas, dan ketersediaan informasi yang dimiliki oleh organisasi.<br>
    2. Lulusan memiliki kemampuan menganalisis, merancang, membangun dan menguji dan mengimplementasikan sistem informasi sesuai dengan tujuan organisasi<br>
    3. Lulusan memiliki kemampuan merancang jaringan komputer, mengimplementasikan, mengelola dan mengujinya sesuai dengan prinsip keamanan informasi untuk melindungan aset informasi yang dimiliki oleh organisasi<br>
    4. Lulusan memiliki kemampuan etika profesionalitas, integritas, jujur dan bertanggung jawab terhadap peran yang diemban<br>
    5. Lulusan memiliki kemampuan kerja tim, kepemimpinan, berfikir kritis, komunikasi, dan kolaborasi serta jiwa enterpreneurship<br>
            </p>
        </div>
        </div>
    </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>