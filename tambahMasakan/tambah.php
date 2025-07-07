<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cleopatra Navbar</title>
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

        <div class="navbar-center">
            <a href="../login_sukses.php">Home</a>
            <a href="../programDiet/diet.php">Program Diet</a>
            <a href="../programBulking/bulking.php">Program Bulking</a>
            <a href="../about/about.php">About</a>
            <a href="../SignUp_LogIn_Form.php" class="btn-back">Logout</a>
        <!-- </div>

        <div class="navbar-right"> -->
            <div class="notification-icon icon-bell">
                <div class="notification-dot"></div>
            </div>
            <div class="notification-icon icon-search"></div>
            <div class="user-profile">
                <div class="user-avatar">M</div>
                <span class="user-name">MasAwan</span>
                <div class="dropdown-arrow"></div>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="form-container">
            <h2>Tambah Masak</h2>
            <form method="post" action="simpan.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="namaMasakan">Judul Masakan:</label>
                    <input type="text" id="nama" name="namaMasakan" required>
                </div>
                
                <div class="form-group">
                    <label for="waktuMasak">Waktu Memasak:</label>
                    <input type="number" id="alamat" name="waktuMasak" required>
                </div>
                
                <div class="form-group">
                    <label for="uploadGambar">Upload Gambar:</label>
                    <input type="file" id="upload_buku" name="uploadGambar" accept=".pdf,.jpg,.jpeg,.png,.gif,.doc,.docx">
                </div>
                
                <div class="form-group">
                    <label for="deskripsiMasakan">Deskripsi Singkat Masaskan:</label>
                    <textarea id="deskripsi_buku" name="deskripsiMasakan" rows="4" placeholder="Tulis deskripsi.." required></textarea>
                </div>
                
                <div class="button-group">
                    <button type="submit" class="kirim">KIRIM</button>
                    <button type="reset" class="batal">BATAL</button>
                </div>
            </form>
            
            
        </div>
        <div class="link-container">
            <a href="lihat_buku.php" class="view-link">Lihat Buku Tamu</a>
        </div>
</body>
</html>