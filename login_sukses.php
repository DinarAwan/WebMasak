<?php
$file_path = "tambahMasakan/dataMasakan.txt";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyBlog - Resep Masakan</title>
    <link rel="stylesheet" href="css/halamanUtama.css">
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
            <a href="login_sukses.php">Home</a>
            <a href="health_program.php">Kalkulator Kesehatan</a>
            <a href="about/about.php">Tentang</a>
            <a href="SignUp_LogIn_Form.php">Logout</a>
            
            <a href="tambahMasakan/tambah.php">
                <div class="notification-icon">
                    <h1>+</h1>
                </div>
            </a>
            
            <div class="notification-icon icon-search"></div>
            <div class="user-profile">
                <div class="user-avatar">M</div>
                <span class="user-name">MasAwan</span>
                <div class="dropdown-arrow"></div>
            </div>
        </div>
    </nav>

    <div class="content">
        <h2 class="section-title">Resep Terpopuler</h2>
        <div class="card-grid">
            <div class="recipe-card">
                <div class="recipe-image food1">🍝</div>
                <div class="recipe-content">
                    <h3 class="recipe-title">Spaghetti Carbonara</h3>
                    <p class="recipe-description">Pasta Italia klasik dengan saus krim, telur, dan keju parmesan yang lezat.</p>
                    <div class="recipe-meta">
                        <div class="recipe-rating">
                            <span class="stars">★★★★★</span>
                            <span>4.8</span>
                        </div>
                        <div class="recipe-time">
                            <span>⏱</span>
                            <span>25 min</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="recipe-card">
                <div class="recipe-image food2">🍛</div>
                <div class="recipe-content">
                    <h3 class="recipe-title">Nasi Goreng Spesial</h3>
                    <p class="recipe-description">Nasi goreng khas Indonesia dengan campuran sayuran dan protein pilihan.</p>
                    <div class="recipe-meta">
                        <div class="recipe-rating">
                            <span class="stars">★★★★☆</span>
                            <span>4.5</span>
                        </div>
                        <div class="recipe-time">
                            <span>⏱</span>
                            <span>20 min</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="recipe-card">
                <div class="recipe-image food3">🥗</div>
                <div class="recipe-content">
                    <h3 class="recipe-title">Caesar Salad</h3>
                    <p class="recipe-description">Salad segar dengan dressing caesar, crouton, dan parmesan cheese.</p>
                    <div class="recipe-meta">
                        <div class="recipe-rating">
                            <span class="stars">★★★★★</span>
                            <span>4.7</span>
                        </div>
                        <div class="recipe-time">
                            <span>⏱</span>
                            <span>15 min</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="recipe-card">
                <div class="recipe-image food4">🍣</div>
                <div class="recipe-content">
                    <h3 class="recipe-title">Sushi Platter</h3>
                    <p class="recipe-description">Aneka ragam sushi segar yang disajikan dengan wasabi dan jahe.</p>
                    <div class="recipe-meta">
                        <div class="recipe-rating">
                            <span class="stars">★★★★★</span>
                            <span>4.9</span>
                        </div>
                        <div class="recipe-time">
                            <span>⏱</span>
                            <span>30 min</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="recipe-card">
                <div class="recipe-image food5">🍔</div>
                <div class="recipe-content">
                    <h3 class="recipe-title">Classic Beef Burger</h3>
                    <p class="recipe-description">Burger daging sapi dengan roti bun lembut, sayuran segar, dan saus spesial.</p>
                    <div class="recipe-meta">
                        <div class="recipe-rating">
                            <span class="stars">★★★★☆</span>
                            <span>4.6</span>
                        </div>
                        <div class="recipe-time">
                            <span>⏱</span>
                            <span>20 min</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="recipe-card">
                <div class="recipe-image food6">🍜</div>
                <div class="recipe-content">
                    <h3 class="recipe-title">Ramen Tonkotsu</h3>
                    <p class="recipe-description">Mi ramen dengan kuah kaldu babi yang kaya rasa, disajikan dengan chashu.</p>
                    <div class="recipe-meta">
                        <div class="recipe-rating">
                            <span class="stars">★★★★★</span>
                            <span>4.8</span>
                        </div>
                        <div class="recipe-time">
                            <span>⏱</span>
                            <span>45 min</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="section-title">Resep Dari Komunitas</h2>
        <div class="card-grid">
            <?php foreach (array_reverse($entries) as $entry): ?>
                <div class="recipe-card">
                    <div class="recipe-image">
                        <?php
                            $file_path = "tambahMasakan/uploads/" . $entry['file'];
                            $is_image = in_array(strtolower(pathinfo($file_path, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png', 'gif']);
                        ?>
                        <?php if ($is_image && file_exists($file_path)): ?>
                            <img src="<?= htmlspecialchars($file_path) ?>" alt="<?= htmlspecialchars($entry['nama']) ?>">
                        <?php else: ?>
                            <span>🍽️</span>
                        <?php endif; ?>
                    </div>
                    <div class="recipe-content">
                        <h3 class="recipe-title"><?= htmlspecialchars($entry['nama']) ?></h3>
                        <p class="recipe-description"><?= htmlspecialchars($entry['deskripsi']) ?></p>
                        <div class="recipe-meta">
                            <div class="recipe-rating">
                                <span class="stars">★★★★☆</span>
                                <span>4.6</span>
                            </div>
                            <div class="recipe-time">
                                <span>⏱</span>
                                <span><?= htmlspecialchars($entry['alamat']) ?> min</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div> 
    </div>
</body>
</html>