<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cài Đặt Thông Tin Cá Nhân</title>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CssAdmin ?>TaiKhoanAdmin.css">
</head>

<body>
    <!-- Main Content Area -->
    <main class="main-content-area">
        <div class="page-wrapper">
            <div class="page-header">
                <h1 class="page-title">Cài đặt thông tin cá nhân</h1>
                <button class="btn-save" disabled style="cursor: default;">
                    <i class="fas fa-save"></i> Lưu Thay Đổi
                </button>
            </div>

            <!-- Notification Messages (hidden by default in static version) -->
            <div class="notification-message success hidden" role="alert">
                <span class="font-medium">Thành công!</span> Cài đặt đã được lưu.
            </div>
            <div class="notification-message error hidden" role="alert">
                <span class="font-medium">Lỗi!</span> Đã có lỗi xảy ra khi lưu cài đặt. Vui lòng thử lại.
            </div>

            <!-- Main Profile Content Grid -->
            <div class="profile-layout">
                <!-- Left Pane: Avatar & Quick Info -->
                <div class="profile-summary">
                    <div class="avatar-upload-wrapper">
                        <form action="<?= BASE_URL ?>?mode=admin&act=UpdateAvataUserAdmin&id=<?= $datauserAdmin->id ?>" method="post" class="FromAvatar-upload-wrapper" enctype="multipart/form-data">
                            <div class="image_avata">
                                <img src="<?= $datauserAdmin->image ?>" alt="Avatar <?= $datauserAdmin->fullname ?>" class="avatar-preview">
                            </div>
                            <button class="btn-submitavata" type="submit"
                                onclick="return confirm('Bạn chắc chắn muốn đổi Avata')">Save</button>
                            <label class="avatar-upload-button">
                                <i class="fas fa-camera"></i>
                                <!-- Input type file is kept for styling, but is not functional -->
                                <input type="file" name="image" class="inputFileImage" id="avatar-upload-button">
                            </label>
                        </form>
                        <script>
                            const imageavata = document.querySelector('.image_avata');
                            const inputimage = document.querySelector('.inputFileImage');
                            const avatarpreview = document.querySelector('.avatar-preview');

                            imageavata.addEventListener('click', () => {
                                inputimage.click();
                            })

                            inputimage.addEventListener('change', function() {
                                const file = this.files[0];
                                console.log(file);

                                if (file) {
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        // Hiển thị preview ngay
                                        avatarpreview.src = e.target.result;
                                        // Confirm lưu vào DB
                                    };
                                    reader.readAsDataURL(file);
                                }
                            })
                        </script>
                    </div>
                    <h2 class="display-full-name"><?= $datauserAdmin->fullname ?></h2>
                    <p class="display-email"><?= $datauserAdmin->email ?></p>
                    <span class="display-role-badge"><?= $datauserAdmin->rolesname ?></span>
                </div>

                <!-- Right Pane: Forms -->
                <div class="profile-forms">
                    <form action="" method="post" enctype="multipart/form-data">
                        <!-- Thông tin cơ bản -->
                        <div class="form-section">
                            <h3 class="section-title">Thông tin cơ bản</h3>
                            <div class="form-grid">
                                <div class="col-span-2">
                                    <label for="fullName" class="form-label">Họ và tên</label>
                                    <input type="text" id="fullName" name="fullName" class="form-input" placeholder="Nhập Đầy Đủ Họ tên" value="<?= $datauserAdmin->fullname ?>">
                                </div>
                                <div class="sm-col-span-1">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" name="email" class="form-input" placeholder="Nhập email" value="<?= $datauserAdmin->useremail ?>" disabled>
                                    <p class="input-hint">Email tài khoản gốc không thể thay đổi.</p>
                                    <!-- disabled Không Thể thay đổi giá trị-->
                                </div>
                                <div class="sm-col-span-1">
                                    <label for="email" class="form-label">Email Của Bạn</label>
                                    <input type="email" id="email" name="email" class="form-input" placeholder="Nhập email" value="<?= $datauserAdmin->email ?>">
                                    <!-- disabled Không Thể thay đổi giá trị-->
                                </div>
                                <div class="sm-col-span-1">
                                    <label for="phoneNumber" class="form-label">Số điện thoại</label>
                                    <input type="tel" id="phoneNumber" name="phoneNumber" class="form-input" placeholder="Nhập số điện thoại" value="<?= $datauserAdmin->sdt ?>">
                                </div>
                                <div class="col-span-2 col-span-2_role">
                                    <label for="role" class="form-label">Chức Vụ</label>

                                    <select name="role" id="role" class="form-input"
                                        <?php if ($datauserAdmin->role_id  !== 1): ?>
                                        disabled
                                        <?php endif ?>>
                                        <?php if ($datauserAdmin->role_id  == 1): ?>
                                            <?php foreach ($dataRole as $value): ?>
                                                <option value="<?= $value->role_id ?>"
                                                    <?php if ($value->role_id == $datauserAdmin->role_id): ?>
                                                    selected
                                                    <?php endif ?>>
                                                    <?= $value->name ?>
                                                </option>
                                            <?php endforeach ?>
                                        <?php endif ?>

                                        <?php if ($datauserAdmin->role_id  !== 1): ?>
                                            <option value="<?= $datauserAdmin->role_id ?>">
                                                <?= $datauserAdmin->rolesname ?>
                                            </option>
                                        <?php endif ?>
                                    </select>
                                    <p class="input-hint input-hint_role">Vai trò của bạn được quản lý bởi hệ thống.</p>
                                    <script>
                                        const role = document.querySelector('.col-span-2_role');
                                        const roleId = <?= $datauserAdmin->role_id ?>;
                                        const inputHint = document.querySelector('.input-hint_role');

                                        function ClickRole(event) {
                                            if (roleId == 1) {
                                                inputHint.textContent = "Bạn cân nhắc thay đổi nhé !";
                                                return;
                                            }
                                            inputHint.textContent = "Bạn không đủ quyền để thay đổi!";
                                        }
                                        role.addEventListener('click', ClickRole);
                                    </script>
                                </div>
                            </div>
                        </div>

                        <!-- Đổi mật khẩu -->
                        <div class="form-section">
                            <h3 class="section-title">Đổi mật khẩu</h3>
                            <div class="form-grid UpdatePassword">
                                <div class="col-span-2 col-span">
                                    <label for="currentPassword" class="form-label">Mật khẩu hiện tại</label>
                                    <input type="password" id="currentPassword" name="currentPassword" class="form-input" placeholder="Nhập mật khẩu hiện tại ">
                                </div>
                                <div class="sm-col-span-1 col-span">
                                    <label for="newPassword" class="form-label">Mật khẩu mới</label>
                                    <input type="password" id="newPassword" name="newPassword" class="form-input" placeholder="Nhập mật khẩu mới!">
                                    <div class="password-strength-indicator">Độ mạnh mật khẩu: <span class="font-semibold text-red-500">Yếu</span></div>
                                </div>
                                <div class="sm-col-span-1 col-span">
                                    <label for="confirmNewPassword" class="form-label">Xác nhận mật khẩu mới</label>
                                    <input type="password" id="confirmNewPassword" name="confirmNewPassword" class="form-input" placeholder="Nhập lại mật khẩu để Thay đổi">
                                </div>

                                <div class="Checked_password">
                                    <input type="checkbox" id="checkPassword" class="checkPassword" value="1">
                                    <label for="checkbox" class="form-label">Hiển Thị password</label>
                                </div>
                            </div>
                            <script>
                                // ẩN hIỆN mât khẩu 
                                const ChexBox = document.getElementById('checkPassword');
                                const InputPasswords = document.querySelectorAll('.UpdatePassword>.col-span   >input');

                                function OmOfPassword() {
                                    if (ChexBox.checked) {
                                        InputPasswords.forEach(function(inputpassword) {
                                            inputpassword.type = 'text';
                                        });
                                        return;
                                    }
                                    InputPasswords.forEach(function(inputpassword) {
                                        inputpassword.type = 'password';
                                    })
                                }
                                ChexBox.addEventListener('click', OmOfPassword);
                            </script>
                        </div>
                        <!-- Cài đặt bảo mật -->
                        <!-- <div class="form-section">
                            <h3 class="section-title">Cài đặt bảo mật</h3>
                            <div style="margin-bottom: 1rem;">
                                <div>
                                    <label class="checkbox-label">
                                        <input type="checkbox" disabled class="form-checkbox">
                                        <span class="ml-2">Bật xác thực 2 lớp (2FA)</span>
                                    </label>
                                    <p class="input-hint">Thêm một lớp bảo mật cho tài khoản của bạn.</p>
                                </div>
                                <div>
                                    <label class="form-label" style="margin-top: 1rem;">Thiết bị đã đăng nhập</label>
                                    <ul class="device-list">
                                        <li>Máy tính để bàn (Chrome trên Windows) - Hiện tại</li>
                                        <li>Điện thoại (Safari trên iOS) - Đăng nhập 2 ngày trước</li>
                                        <li>Máy tính bảng (Android App) - Đăng nhập 1 tuần trước</li>
                                    </ul>
                                    <button type="button" class="btn-logout-devices" disabled>
                                        Đăng xuất tất cả thiết bị khác
                                    </button>
                                </div>
                            </div>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>