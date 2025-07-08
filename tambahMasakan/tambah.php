<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Resep - StudyBlog</title>
    <link rel="stylesheet" href="../css/halamanUtama.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-left">
            <div class="logo">
                <div class="logo-icon">SB</div>
                <span>StudyBlog</span>
            </div>
        </div>

        <div class="navbar-right">
            <a href="../login_sukses.php">Home</a>
            <a href="../health_program.php">Kalkulator Kesehatan</a>
            <a href="../about/about.php">Tentang</a>
            <a href="../SignUp_LogIn_Form.php" class="btn-back">Logout</a>
            <a href="tambah.php"><div class="notification-icon">
                <h1>+</h1>
            </div></a>
            <div class="user-profile">
                <div class="user-avatar">M</div>
                <span class="user-name">MasAwan</span>
                <div class="dropdown-arrow"></div>
            </div>
        </div>
    </nav>

    <div class="form-container-wrapper">
        <div class="form-container">
            <h2>Tambah Resep Masakan</h2>
            <form method="post" action="simpan.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="namaMasakan">Judul Masakan:</label>
                    <input type="text" id="namaMasakan" name="namaMasakan" placeholder="Contoh: Soto Ayam Lamongan" required>
                </div>
                
                <div class="form-group">
                    <label for="waktuMasak">Waktu Memasak (menit):</label>
                    <input type="number" id="waktuMasak" name="waktuMasak" placeholder="Contoh: 45" required>
                </div>
                
                <div class="form-group">
                    <label for="uploadGambar">Upload Gambar Masakan:</label>
                    <input type="file" id="uploadGambar" name="uploadGambar" accept=".jpg,.jpeg,.png,.gif">
                </div>
                
                <div class="form-group">
                    <label for="deskripsiMasakan">Deskripsi Singkat Masakan:</label>
                    <textarea id="deskripsiMasakan" name="deskripsiMasakan" rows="4" placeholder="Tulis deskripsi singkat, bahan, atau cara membuatnya di sini..." required></textarea>
                </div>
                
                <div class="button-group">
                    <button type="reset" class="batal">BATAL</button>
                    <button type="submit" class="kirim">KIRIM RESEP</button>
                </div>
            </form>
        </div>
        <div class="link-container">
            <a href="lihat_buku.php" class="view-link">Lihat Semua Resep</a>
        </div>
    </div>
</body>
</html>