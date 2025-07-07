<?php
$file_path = "dataMasakan.txt";
$entries = [];

if (file_exists($file_path)) {
    $file = fopen($file_path, "r");
    if ($file) {
        while (($line = fgets($file)) !== false) {
            $line = trim($line);
            if (!empty($line)) {
                $data = explode("|", $line);
                if (count($data) >= 3) {
                    $entries[] = [
                        'nama'      => $data[0],
                        'alamat'    => $data[1],
                        'deskripsi' => $data[2],
                        'file'      => $data[3] ?? ''
                    ];
                }
            }
        }
        fclose($file);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Lihat Buku Tamu</title>
    <link rel="stylesheet" href="style/lihat.css">
</head>
<body>
    <div class="container">
        <h2>DAFTAR BUKU TAMU</h2>

        <?php if (empty($entries)): ?>
            <p style="text-align:center; color:red;">Belum ada data dalam buku tamu.</p>
        <?php else: ?>
            <?php foreach ($entries as $entry): ?>
                <div class="entry">
                    <div class="entry-field">
                        <span class="entry-label">Nama</span>: 
                        <span class="entry-value"><?= htmlspecialchars($entry['nama']) ?></span>
                    </div>
                    <div class="entry-field">
                        <span class="entry-label">Alamat</span>: 
                        <span class="entry-value"><?= htmlspecialchars($entry['alamat']) ?></span>
                    </div>
                    <div class="entry-field">
                        <span class="entry-label">Komentar</span>: 
                        <span class="entry-value"><?= htmlspecialchars($entry['deskripsi']) ?></span>
                    </div>
                    <div class="entry-field">
                        <span class="entry-label">File Buku</span>: 
                        <span class="entry-value">
                            <?php
                                $file_path = "uploads/" . $entry['file'];
                                $file_ext = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
                                $is_image = in_array($file_ext, ['jpg', 'jpeg', 'png', 'gif']);

                                if (!empty($entry['file']) && file_exists($file_path)) {
                                    if ($is_image) {
                                        echo "<img src=\"$file_path\" alt=\"Gambar\" style=\"max-width:200px; max-height:200px; border-radius:8px;\">";
                                    } else {
                                        echo "<a href=\"$file_path\" target=\"_blank\" class=\"file-link\">" . htmlspecialchars($entry['file']) . "</a>";
                                    }
                                } else {
                                    echo "<span class=\"no-file\">(tidak ada)</span>";
                                }
                            ?>
                        </span>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

        <div class="link-container">
            <a href="index.html" class="view-link">Kembali ke Form Buku Tamu</a>
        </div>
    </div>
</body>
</html>
