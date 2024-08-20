<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AtlasStresser</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="https://telegra.ph/file/2aa72263be440acbeb8f9.jpg" type="image/jpg">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap">
</head>
<body>
    <header class="header">
        <div class="container">
            <!-- Header content like logo or navigation could go here -->
        </div>
    </header>
    <section class="login">
        <div class="container">
            <h2>Login to Your Account</h2>
            <form action="login_process.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit" class="btn-primary">Login</button>
            </form>
            <p class="signup-redirect">Don't have an account? <a href="signup.php" class="btn-signup">Sign Up here</a></p>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 AtlasStresser. All rights reserved.</p>
            <p>Tor v3 Address: <a href="https://atlasstresser.fun/hub" target="_blank">Visit on Tor</a></p>
            <p>Telegram Channel: <a href="https://t.me/neftghaming" target="_blank">Join on Telegram</a></p>
        </div>
    </footer>
</body>
</html>
