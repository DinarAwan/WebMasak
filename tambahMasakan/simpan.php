<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = isset($_POST['namaMasakan']) ? trim($_POST['namaMasakan']) : '';
    $alamat = isset($_POST['waktuMasak']) ? trim($_POST['waktuMasak']) : '';
    $deskripsi_buku = isset($_POST['deskripsiMasakan']) ? trim($_POST['deskripsiMasakan']) : '';
    
    if (empty($nama) || empty($alamat) || empty($deskripsi_buku)) {
        $error = "Semua field harus diisi!";
    } else {
        $nama_file = time() . "_" . preg_replace("/[^a-zA-Z0-9\.\-_]/", "", $file['name']);
        $upload_success = true;
        
        if (isset($_FILES['uploadGambar']) && $_FILES['uploadGambar']['error'] != UPLOAD_ERR_NO_FILE) {
            $file = $_FILES['uploadGambar'];
            
            if ($file['error'] != UPLOAD_ERR_OK) {
                $error = "Error saat upload file!";
                $upload_success = false;
            } else {
                if ($file['size'] > 5 * 1024 * 1024) {
                    $error = "Ukuran file terlalu besar! Maksimal 5MB.";
                    $upload_success = false;
                } else {
                    $allowed_types = ['pdf', 'jpg', 'jpeg', 'png', 'gif', 'doc', 'docx'];
                    $file_extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
                    
                    if (!in_array($file_extension, $allowed_types)) {
                        $error = "Tipe file tidak diizinkan! Hanya PDF, JPG, PNG, GIF, DOC, DOCX.";
                        $upload_success = false;
                    } else {
                        $upload_dir = "uploads/";
                        if (!file_exists($upload_dir)) {
                            mkdir($upload_dir, 0777, true);
                        }
                        
                        $nama_file = time() . "_" . preg_replace("/[^a-zA-Z0-9\.\-_]/", "", $file['name']);
                        $upload_path = $upload_dir . $nama_file;
                        
                        if (!move_uploaded_file($file['tmp_name'], $upload_path)) {
                            $error = "Gagal mengupload file!";
                            $upload_success = false;
                            $nama_file = "";
                        }
                    }
                }
            }
        }
        
        if ($upload_success) {
            $nama = htmlspecialchars($nama);
            $alamat = htmlspecialchars($alamat);
            $deskripsi_buku = htmlspecialchars($deskripsi_buku);
            
            $data = "$nama|$alamat|$deskripsi_buku|$nama_file" . PHP_EOL;
            
            $file_data = fopen("dataMasakan.txt", "a");
            if ($file_data) {
                fwrite($file_data, $data);
                fclose($file_data);
                header("Location: ../login_sukses.php");
                exit;
            } else {
                $error = "Gagal menyimpan data. Periksa permission folder.";
            }
        }
    }
}
?>

