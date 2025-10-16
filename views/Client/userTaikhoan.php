<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= CSSDuyDumStomaty ?>userTaikhoan.css">
</head>

<body>
    <div class="container_users">
        <h2>Tài khoản</h2>
        <p>Chỉnh sửa chi tiết tài khoản và mật khẩu của bạn bằng cách sử dụng mẫu dưới đây.</p>

        <div class="profile-picture">
            <form action="<?= BASE_URL ?>?mode=client&act=themimage&id=<?= $data->id ?>" method="post" enctype="multipart/form-data" class="formUser-info">
                <div class="user-avatar user-avatar_taikhoan" style="position: relative; z-index: 100; width: 150px;
    height: 150px;">
                    <?php if (!empty($data->image)) { ?>
                        <img src="<?= $data->image ?>" alt="<?= $data->name ?>" class="user-avatar_img">
                        <?php $errorbtn = 'Edit photo'; ?>
                    <?php } else { ?>
                        <?php $errorbtn = 'Add image'; ?>
                        <i class="fa-solid fa-user"></i>
                    <?php } ?>
                    <input type="file" id="avatarInput" name="image"
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                </div>
                <button type="submit" onclick="return confirm('Bạn Có Muốn Đổi Ảnh!')"><?php echo $errorbtn ?></button>
            </form>
        </div>

        <form action="" method="post" class="user-account">
            <div class="form-group">
                <label for="firstName">First Name:<span class="required-star">*</span></label>
                <input type="text" id="firstName" name="firstName" value="">
            </div>

            <div class="form-group">
                <label for="lastName">Last Name:<span class="required-star">*</span></label>
                <input type="text" id="lastName" name="lastName" value="">
            </div>

            <div class="form-group">
                <label for="email">Email:<span class="required-star">*</span></label>
                <input type="email" id="email" name="email" value="ngoduysnign@palia.com">
            </div>
            <div class="form-group user-account_btn">
                <button type="submit">SAVE CHANGES</button>
            </div>
        </form>

        <div class="toggle-switch">
            <label>Thay đổi mật khẩu:</label>
            <label class="switch">
                <input type="checkbox" id="passwordToggle">
                <span class="slider round"></span>
            </label>
        </div>

        <div id="passwordFields" class="password-fields">
            <form action="" method="post">
                <div class="form-group">
                    <label for="currentPassword">Mật khẩu hiện tại:<span class="required-star">*</span></label>
                    <input type="password" id="currentPassword" name="currentPassword">
                </div>

                <div class="form-group">
                    <label for="newPassword">Mật khẩu mới:<span class="required-star">*</span></label>
                    <input type="password" id="newPassword" name="newPassword" placeholder="Hãy để trống nếu bạn không muốn thay đổi mật khẩu.">
                </div>

                <div class="form-group">
                    <label for="confirmNewPassword">Xác nhận mật khẩu mới:<span class="required-star">*</span></label>
                    <input type="password" id="confirmNewPassword" name="confirmNewPassword" placeholder="Hãy để trống nếu bạn không muốn thay đổi mật khẩu.">
                </div>
                <div class="button-container">
                    <button type="submit" class="save-button">LƯU THAY ĐỔI</button>
                </div>
            </form>
        </div>
        <script src="<?= Js_Client ?>UserTaiKhoan.js"></script>
    </div>
</body>

</html>