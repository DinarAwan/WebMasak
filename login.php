<?php
// Pastikan ada data yang dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Ambil input dari form login
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // Nama file database kita
    $file_name = 'data_registrasi.txt';

    // Variabel untuk menandai apakah login berhasil
    $login_sukses = false;

    // Cek apakah file database ada
    if (file_exists($file_name)) {
        // Baca semua baris dari file ke dalam array
        $lines = file($file_name, FILE_IGNORE_NEW_LINES);

        // Loop melalui setiap baris data
        foreach ($lines as $line) {
            // Pecah setiap baris berdasarkan pemisah '|'
            $parts = explode('|', $line);

            // Ekstrak username dan password dari setiap bagian
            // trim() digunakan untuk menghapus spasi kosong
            $stored_user_part = trim(explode(':', $parts[1])[1]);
            $stored_pass_part = trim(explode(':', $parts[3])[1]);

            // Bandingkan data input dengan data yang tersimpan
            if ($stored_user_part == $input_username && $stored_pass_part == $input_password) {
                $login_sukses = true;
                break; // Hentikan loop jika data sudah ditemukan
            }
        }
    }

    // Arahkan pengguna berdasarkan hasil login
    if ($login_sukses) {
        // Jika login berhasil, arahkan ke halaman sukses
        header('Location: login_sukses.html');
        exit();
    } else {
        // Jika gagal, kembalikan ke halaman login dengan parameter error
        header('Location: SignUp_LogIn_Form.php?error=1');
        exit();
    }
}
?>