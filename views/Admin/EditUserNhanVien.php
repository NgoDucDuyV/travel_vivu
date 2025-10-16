<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Nhân ViêN Mới</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CssAdmin ?>base.css">
    <link rel="stylesheet" href="<?= CssAdmin ?>layout.css">
    <link rel="stylesheet" href="<?= CssAdmin ?>quanlysTuar.css">
</head>

<body>
    <?php if (isset($_SESSION['errorEditNhanVienMoi'])): ?>
        <div class="errorInsertTouar"><?= $_SESSION['errorEditNhanVienMoi'] ?></div>
    <?php endif ?>
    <header class="header_breadcrumb">
        <div class="breadcrumb">
            <a href="#">Nhân Viên Mới</a>
        </div>
    </header>
    <div class="contentAdmin">
        <header class="header-edit">
            <a href="<?= BASE_URL ?>?mode=admin&act=quanlyUserNhanVien" class="back-icon"><i class="fas fa-chevron-left"></i></a>
            <h1 class="page-title">Tạo Tài Khoản Nhân viên mới </h1>
        </header>

        <form action="<?= BASE_URL ?>?mode=admin&act=EditUserNhanVien&id=<?= $datauserAdmin->id ?>" method="post">
            <div class="form-group">
                <label for="Destination">fullname Tên Hiển Thị </label>
                <input type="text" id="fullname" name="fullname" class="form-control form-group" placeholder="Nhập Đầy đủ tên hiển thị " value="<?= $datauserAdmin->fullname ?>">
            </div>

            <div class="form-group">
                <label for="Destination">sdt Số Điện Thoại </label>
                <input type="number" id="sdt" name="sdt" class="form-control form-group" placeholder="Nhập Số Điện Thoại " value="<?= $datauserAdmin->sdt ?>">
            </div>

            <div class="form-group">
                <label for="Destination">useremail Email Đăng Nhập </label>
                <input type="email" id="useremail" name="useremail" class="form-control form-group" placeholder="Nhập Email đăng nhập " value="<?= $datauserAdmin->useremail ?>">
            </div>

            <div class="form-group">
                <label for="Destination">password Mật Khẩu Đăng Nhập </label>
                <input type="text" id="password" name="password" class="form-control form-group" placeholder="Nhập Pasword đăng nhập " value="<?= $datauserAdmin->password ?>">
            </div>

            <div class="form-group">
                <label for="role_id">role_id Chức Vụ Nhân Viên </label>
                <div class="select-container">
                    <select id="role_id" name="role_id" class="form-control">
                        <?php foreach ($dataRole as $value): ?>
                            <option value="<?= $value->role_id ?>"
                                <?php if ($datauserAdmin->role_id == $value->role_id): ?>
                                selected
                                <?php endif ?>> <?= $value->name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div style="text-align: right; margin-top: 30px;">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</body>

</html>