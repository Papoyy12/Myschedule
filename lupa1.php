<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lupa Password - Step 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="lupa1.css">
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card p-4">
        <div class="card-body">
          <img src="https://upload.wikimedia.org/wikipedia/id/2/2c/Politeknik_Negeri_Batam.png" alt="logo" class="logo">
          
          <h2 class="card-title text-center mb-4">Lupa Password</h2>
          
          <form id="step1Form">
            <div class="mb-3">
              <label for="nim" class="form-label">NIM</label>
              <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM anda" required>
            </div>

            <div class="mb-3">
              <label for="phone" class="form-label">No. Telepon</label>
              <input type="tel" class="form-control" id="phone" placeholder="Masukkan nomor telepon anda" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Selanjutnya</button>

            <div class="text-center mt-3">
              <a href="login.php" class="back-link">← Kembali ke Login</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.getElementById('step1Form').addEventListener('submit', function(e) {
    e.preventDefault();

    const nim = document.getElementById('nim').value.trim();
    const phone = document.getElementById('phone').value.trim();

    if (nim === '' || phone === '') {
      alert('Semua kolom harus diisi!');
      return;
    }

    if (phone.length < 10 || phone.length > 13) {
      alert('Nomor telepon harus 10–13 digit!');
      return;
    }

    // Simpan data sementara (misalnya di sessionStorage)
    const resetData = { nim, phone, code: "123456" }; 
    sessionStorage.setItem('resetData', JSON.stringify(resetData));

    // Lanjut ke halaman berikut
    window.location.href = 'lupa2.php';
  });
</script>


</body>
</html>