<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="<?= CSS ?>resetPassword.css">
    <link rel="stylesheet" href="<?= CSS ?>css.css">
    <link rel="stylesheet" href="<?= CSS ?>login_sigin.css">
</head>

<body>
    <div class="reset-password-container">
        <div class="reset-password-content">
            <div class="text-section">
                <h1>Reset your password</h1>
                <p>Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.</p>
            </div>
            <div class="form-section">
                <form action="#" method="POST">
                    <?php if (isset($_SESSION['errorlogin']) || isset($_SESSION['success'])): ?>
                        <div class="error">
                            <div class="icon">
                                <i class='bxr  bx-alert-shield'></i>
                            </div>
                            <div class="conten_error">
                                <p>
                                    <?php if (isset($_SESSION['errorlogin'])): echo $_SESSION['errorlogin'];
                                    endif ?>
                                    <?php if (isset($_SESSION['success'])): echo $_SESSION['success'];
                                    endif ?>
                                </p>
                            </div>
                        </div>
                    <?php endif ?>
                    <div class="form-group">
                        <label for="email_username">Email or username*</label>
                        <input type="text" id="email_username" name="email_username" placeholder="duy@gmail.com" required>
                    </div>
                    <button type="submit" class="reset-button">RESET PASSWORD</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>