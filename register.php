<?php
// Cek jika ada data yang dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Ambil data dari form. Pastikan atribut 'name' di HTML sesuai.
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; // PERINGATAN: Menyimpan password seperti ini tidak aman!

    // Format data yang akan kita simpan ke file
    $data_string = "Waktu Daftar: " . date("Y-m-d H:i:s") . " | Username: " . $username . " | Email: " . $email . " | Password: " . $password . "\n";

    // Nama file untuk menyimpan data
    $file_name = 'data_registrasi.txt';

    // Proses menyimpan data ke file
    // FILE_APPEND berarti data baru akan ditambahkan di baris akhir, bukan menimpa isi file.
    file_put_contents($file_name, $data_string, FILE_APPEND | LOCK_EX);

    // Setelah berhasil, arahkan pengguna ke halaman sukses
    header('Location: sukses.html');
    exit();

} else {
    // Jika ada yang mencoba mengakses file ini secara langsung, kembalikan ke form
    header('Location: SignUp_LogIn_Form.php');
    exit();
}
?>