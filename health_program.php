<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Kesehatan - StudyBlog</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <link rel="stylesheet" href="css/halamanUtama.css">
    <style>
        <style>
    /* Import Font Poppins jika belum ada di halamanUtama.css */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

    /* Reset dasar */
    body {
        background-color: #f4f7f6;
        font-family: 'Poppins', sans-serif;
        color: #333;
    }

    /* Tampilan utama container */
    .health-container {
        max-width: 800px;
        margin: 2rem auto;
        padding: 2.5rem;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        text-align: center; /* Membuat judul dan deskripsi jadi di tengah */
    }

    .health-container h2 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: #2c3e50;
    }

    .health-container p {
        font-size: 1rem;
        color: #7f8c8d;
        margin-bottom: 2.5rem;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    /* Gaya untuk form input */
    .health-form {
        display: grid;
        grid-template-columns: 1fr 1fr; /* Form jadi 2 kolom */
        gap: 1.5rem;
        margin-bottom: 2rem;
        text-align: left;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }
    
    .form-group label {
        font-weight: 600;
        margin-bottom: 0.5rem;
        font-size: 0.9rem;
    }

    .health-form input {
        width: 100%;
        padding: 0.9rem 1rem;
        border: 1px solid #dfe6e9;
        border-radius: 8px;
        font-size: 1rem;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .health-form input:focus {
        outline: none;
        border-color: #7494ec;
        box-shadow: 0 0 0 3px rgba(116, 148, 236, 0.2);
    }

    .health-form button {
        grid-column: 1 / -1; /* Tombol memanjang 2 kolom */
        padding: 1rem;
        background: linear-gradient(90deg, #7494ec, #5b79c1);
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 1.1rem;
        font-weight: 600;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .health-form button:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(116, 148, 236, 0.4);
    }

    /* Kartu Hasil BMI */
    .health-result {
        margin-top: 2rem;
        padding: 2rem;
        border-radius: 12px;
        text-align: left;
        border-left-width: 6px;
        border-left-style: solid;
    }

    .result-header {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .result-header i {
        font-size: 3rem;
    }
    
    .result-title h3 {
        margin: 0;
        font-size: 1.8rem;
        font-weight: 700;
    }
    
    .result-title h4 {
        margin: 0;
        font-size: 1.1rem;
        font-weight: 500;
    }

    .health-result ul {
        list-style: none;
        padding-left: 0;
    }

    .health-result li {
        padding-left: 2rem;
        position: relative;
        margin-bottom: 0.8rem;
        line-height: 1.6;
    }

    .health-result li::before {
        content: '\f00c'; /* Ikon cek dari Font Awesome */
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        position: absolute;
        left: 0;
        top: 4px;
        font-size: 0.9rem;
    }

    /* Penyesuaian ikon dan warna per kategori */
    .health-result.underweight { background-color: #e0f7fa; border-color: #00bcd4; color: #005f6b; }
    .health-result.underweight li::before { color: #00bcd4; }
    .health-result.normal { background-color: #e8f5e9; border-color: #4caf50; color: #1b5e20; }
    .health-result.normal li::before { color: #4caf50; }
    .health-result.overweight { background-color: #fffde7; border-color: #ffc107; color: #8d6e00; }
    .health-result.overweight li::before { color: #ffc107; }
    .health-result.obese { background-color: #ffebee; border-color: #f44336; color: #b71c1c; }
    .health-result.obese li::before { color: #f44336; }

    /* Responsif untuk layar kecil */
    @media (max-width: 600px) {
        .health-form {
            grid-template-columns: 1fr; /* Form kembali jadi 1 kolom */
        }
        .health-container {
            padding: 1.5rem;
        }
        .health-container h2 {
            font-size: 2rem;
        }
    }
</style>
    </style>
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
            <a href="login_sukses.html">Beranda</a>
            <a href="health_program.php">Kalkulator Kesehatan</a>
            <a href="about/about.php">Tentang</a>
            <a href="SignUp_LogIn_Form.php" class="btn-back">Keluar</a>
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

    <div class="health-container">
    <h2>Kalkulator Kesehatan Anda</h2>
    <p>Masukkan berat dan tinggi badan untuk mendapatkan analisis dan rekomendasi kesehatan berbasis Indeks Massa Tubuh (IMT).</p>
    
    <form action="health_program.php" method="POST" class="health-form">
        <div class="form-group">
            <label for="weight">Berat Badan (kg)</label>
            <input type="text" inputmode="decimal" id="weight" name="weight" placeholder="Contoh: 65.5" required>
        </div>
        <div class="form-group">
            <label for="height">Tinggi Badan (m)</label>
            <input type="text" inputmode="decimal" id="height" name="height" placeholder="Contoh: 1.72" required>
        </div>
        <button type="submit">Analisis Sekarang</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $weight_str = str_replace(',', '.', $_POST['weight']);
        $height_str = str_replace(',', '.', $_POST['height']);

        $weight = (float)$weight_str;
        $height = (float)$height_str;

        if (is_numeric($weight) && is_numeric($height) && $weight > 0 && $height > 0) {
            $bmi = $weight / ($height * $height);
            $bmi_rounded = round($bmi, 1);

            $icon = '';
            $category_class = '';
            $category_name = '';
            $tips_title = '';
            $tips = [];

            if ($bmi < 18.5) {
                $category_class = 'underweight';
                $icon = 'fa-solid fa-feather-alt';
                $category_name = 'Berat Badan Kurang';
                $tips_title = 'Rekomendasi Menaikkan Berat Badan:';
                $tips = [
                    "Makan lebih sering dengan porsi kecil tapi padat nutrisi.",
                    "Pilih makanan kaya kalori sehat seperti alpukat, kacang-kacangan, dan minyak zaitun.",
                    "Tingkatkan asupan protein dari ayam, ikan, telur, dan tahu/tempe.",
                    "Lakukan latihan kekuatan untuk membangun massa otot, bukan hanya kardio."
                ];
            } elseif ($bmi < 25) {
                $category_class = 'normal';
                $icon = 'fa-solid fa-heart-circle-check';
                $category_name = 'Berat Badan Normal';
                $tips_title = 'Rekomendasi Menjaga Berat Badan Ideal:';
                $tips = [
                    "Pertahankan pola makan seimbang dengan beragam sayur, buah, dan protein.",
                    "Lakukan aktivitas fisik secara teratur, minimal 30 menit setiap hari.",
                    "Pastikan hidrasi cukup dengan minum air putih sepanjang hari.",
                    "Kelola stres dan pastikan Anda mendapatkan tidur yang berkualitas."
                ];
            } elseif ($bmi < 30) {
                $category_class = 'overweight';
                $icon = 'fa-solid fa-triangle-exclamation';
                $category_name = 'Kelebihan Berat Badan';
                $tips_title = 'Rekomendasi Menurunkan Berat Badan:';
                $tips = [
                    "Kurangi asupan kalori secara bertahap, hindari diet ekstrem.",
                    "Fokus pada makanan utuh (whole foods) dan kurangi makanan olahan/instan.",
                    "Perbanyak konsumsi serat dari sayuran dan buah untuk rasa kenyang lebih lama.",
                    "Kombinasikan latihan kardio (lari, sepeda) dengan latihan kekuatan."
                ];
            } else {
                $category_class = 'obese';
                $icon = 'fa-solid fa-shield-halved';
                $category_name = 'Obesitas';
                $tips_title = 'Rekomendasi untuk Gaya Hidup Sehat:';
                $tips = [
                    "Sangat disarankan untuk berkonsultasi dengan dokter atau ahli gizi.",
                    "Fokus pada perubahan gaya hidup yang berkelanjutan, bukan perbaikan instan.",
                    "Mulailah dengan olahraga ringan seperti berjalan kaki setiap hari.",
                    "Catat asupan makanan harian untuk meningkatkan kesadaran pola makan."
                ];
            }

            echo "<div class='health-result " . $category_class . "'>";
            echo "  <div class='result-header'>";
            echo "      <i class='" . $icon . "'></i>";
            echo "      <div class='result-title'>";
            echo "          <h3>IMT Anda: " . $bmi_rounded . "</h3>";
            echo "          <h4>Kategori: " . $category_name . "</h4>";
            echo "      </div>";
            echo "  </div>";
            echo "  <p><strong>" . $tips_title . "</strong></p>";
            echo "  <ul>";
            foreach ($tips as $tip) {
                echo "      <li>" . $tip . "</li>";
            }
            echo "  </ul>";
            echo "</div>";

        } else if (!empty($_POST)) {
            echo "<p style='color: red;'>Data tidak valid. Harap masukkan berat dan tinggi badan dengan benar.</p>";
        }
    }
    ?>
</div>
</body>
</html>