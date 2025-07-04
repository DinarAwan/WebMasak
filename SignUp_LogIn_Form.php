<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup Form</title>
    <link rel="stylesheet" href="SignUp_LogIn_Form.css">
</head>
<body>

    <div class="container">
        <div class="form-box login">
            <form action="login.php" method="POST">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" required name="username">
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" required name="password">
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <div class="forgot-link">
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>

        <div class="form-box register">
            <form action="register.php" method="POST">
                <h1>Daftar</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" required name="username">
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="email" placeholder="Email" required name="email">
                    <i class='bx bxs-envelope' ></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" required name="password">
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <button type="submit" class="btn">Daftar</button>
            </form>
        </div>

        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>Belum punya akun ?</h1>
                <p>Daftar dulu !</p>
                <button class="btn register-btn">Daftar</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Sudah punya akun ?</h1>
                <p>Let's GO</p>
                <button class="btn login-btn">Masuk</button>
            </div>
        </div>
    </div>

    <script src="SignUp_LogIn_Form.js"></script>

    <?php
    // Cek jika ada parameter 'error' di URL
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        // Jika ada, tampilkan pop-up alert JavaScript
        echo "<script>alert('Username atau Password salah');</script>";
    }
    ?>
    </body>
</html>