<?php
// Basic form validation and processing

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $email = htmlspecialchars($_POST['email']);

    // Here you would typically process the registration (e.g., store in a database)
    // For demonstration, we'll just display a success message
    $message = "Registration successful! Welcome, $username.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - AtlasStresser</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="https://telegra.ph/file/2aa72263be440acbeb8f9.jpg" type="image/jpg">
    <!-- Include Nunito font from Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap">
</head>
<body>
    <!-- Header with Logo -->
    <header class="header">
        <div class="container">
            <!-- Header content like logo or navigation could go here -->
            <h1>AtlasStresser</h1>
        </div>
    </header>

    <!-- Signup Section -->
    <section class="signup">
        <div class="container">
            <h2>Create an Account</h2>
            <form action="signup.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

            <?php if (isset($message)): ?>
                <p class="signup-message"><?php echo $message; ?></p>
            <?php endif; ?>
        </div>
                <a href="https://wa.me/6285184432291?text=mas+saya+mau+beli+C2+nya" class="btn-primary" role="button">Sign Up</a>

                </form>
                <p class="login-redirect">Already have an account? <a href="login.php" class="btn-login">Login here</a></p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 AtlasStresser. All rights reserved.</p>
            <p>Tor v3 Address: <a href="https://atlasstresser.fun/hub" target="_blank">Visit on Tor</a></p>
            <p>Telegram Channel: <a href="https://t.me/neftghaming" target="_blank" class="telegram-link">
                <img src="https://telegra.ph/file/675249a018bc16699ed39.png" alt="Telegram Icon" class="social-icon">
                Join on Telegram
            </a></p>
        </div>
    </footer>
</body>
</html>
