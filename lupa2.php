<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lupa Password - Step 2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="lupa2.css">
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card p-4">
        <div class="card-body">
          <img src="https://upload.wikimedia.org/wikipedia/id/2/2c/Politeknik_Negeri_Batam.png" alt="logo" class="logo">
          
          <h2 class="card-title text-center mb-4">Kode Verifikasi</h2>
          
          <form id="step2Form">
            <div class="mb-3">
              <label for="code" class="form-label">Masukkan Kode 6 Digit</label>
              <input type="text" class="form-control" id="code" placeholder="000000" required maxlength="6">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Verifikasi</button>

            <div class="text-center mt-3">
              <a href="forgot-password-step1.html" class="back-link">← Kembali</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- SCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Contoh kode yang seharusnya diterima (nanti bisa diisi dari server)
  const resetData = { code: "123456" };

  // Hanya izinkan angka
  document.getElementById('code').addEventListener('input', function(e) {
    this.value = this.value.replace(/[^0-9]/g, '');
  });

  // Validasi kode verifikasi
  document.getElementById('step2Form').addEventListener('submit', function(e) {
    e.preventDefault();

    const inputCode = document.getElementById('code').value.trim();

    if (inputCode.length !== 6) {
      alert('Kode verifikasi harus 6 digit!');
      return;
    }

    if (inputCode !== resetData.code) {
      alert('Kode verifikasi salah!');
      return;
    }

    // Jika benar
    alert('Kode benar! Mengalihkan ke halaman berikut...');
    window.location.href = 'lupa3.php';
  });
</script>

</body>
</html>
