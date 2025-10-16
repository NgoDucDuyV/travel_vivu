<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Touar Mới</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CssAdmin ?>base.css">
    <link rel="stylesheet" href="<?= CssAdmin ?>layout.css">
    <link rel="stylesheet" href="<?= CssAdmin ?>quanlysTuar.css">
</head>

<body>
    <?php if (isset($_SESSION['errorInsertTouar'])): ?>
        <div class="errorInsertTouar"><?= $_SESSION['errorInsertTouar'] ?></div>
    <?php endif ?>
    <header class="header_breadcrumb">
        <div class="breadcrumb">
            <a href="#">Các sản phẩm Tuar</a>
        </div>
    </header>
    <div class="contentAdmin">
        <header class="header-edit">
            <a href="<?= BASE_URL ?>?page=authAdmin&action=quanlyTuarHoatDong" class="back-icon"><i class="fas fa-chevron-left"></i></a>
            <h1 class="page-title">Tạo Touar Mới</h1>
        </header>

        <form action="<?= BASE_URL ?>?page=authAdmin&action=ThemTouarMoi" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="description">Title Tiêu Đề Touar</label>
                <textarea id="description" name="title" class="form-control-textarea">
                    Nhập Tiêu Đề Touar
                </textarea>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <div class="form-group-flex">
                    <button type="button" class="btn-generate-description">
                        <i class="fa-solid fa-wand-magic-sparkles"></i> Generate from name & category
                    </button>
                    <button type="button" class="btn-describe-picture">
                        <i class="fa-solid fa-image"></i> Describe picture
                    </button>
                </div>
                <textarea id="description" name="description" class="form-control-textarea">
                    Nhập Miêu Tả Touar
                </textarea>
            </div>

            <div class="form-group">
                <label for="Destination">Destination Điểm Đến</label>
                <div class="select-container">
                    <select id="Destination" name="destination_id" class="form-control">
                        <?php foreach ($dataDestination as $value): ?>
                            <option value="<?= $value->id ?>"> <?= $value->title ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="category">Activities Các Hoat Động</label>
                <div class="select-container">
                    <select id="category" name="activities_id" class="form-control">
                        <?php foreach ($dataActivities as $value): ?>
                            <option value="<?= $value->id ?>"> <?= $value->title ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="category">Typeodtouar Các Loại Touar</label>
                <div class="select-container">
                    <select id="category" name="typeodtouar_id" class="form-control">
                        <?php foreach ($dataTypeodtouar as $value): ?>
                            <option value="<?= $value->id ?>"> <?= $value->title ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="category">Difficulty Độ Khó</label>
                <div class="select-container">
                    <select id="category" name="difficulty_id" class="form-control">
                        <?php foreach ($dataDifficulty as $value): ?>
                            <option value="<?= $value->id ?>"> <?= $value->difficulty_name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="category">Categories_destination Trong Nước Or Ngoài Nước </label>
                <div class="select-container">
                    <select id="category" name="categories_destination_id" class="form-control">
                        <?php foreach ($dataCategories_destinationModel as $value): ?>
                            <option value="<?= $value->id ?>"> <?= $value->title ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="price">Time_days Số Ngày Touar</label>
                <input type="number" id="time_days" name="time_days" class="form-control form-group" placeholder="Mời Nhập Số Lượng Ngày touar">
                <div class="error" id="errortime_days"></div>
            </div>

            <div class="form-group">
                <label for="soluong_people">Soluong_people Số Người Trong Touar</label>
                <input type="number" id="soluong_people" name="soluong_people" class="form-control form-group" placeholder="Nhập Số Người Trong Touar ">
                <div class="error" id="errorsoluong_people"></div>
            </div>

            <div class="form-group">
                <label for="price">Price Giá Touar</label>
                <input type="price" id="price" name="price" class="form-control form-group" placeholder="Nhập Giá Tiền">
                <div class="error" id="errorprice"></div>
            </div>

            <div class="form-group">
                <label for="picture">Picture</label>
                <div class="form-group-flex">
                    <button type="button" class="btn-generate-ai">
                        <i class="fa-solid fa-wand-magic-sparkles"></i> Generate with AI
                    </button>
                </div>
                <div id="dropzone" class="dropzone">
                    <div class="dropzone-icon" id="preview">
                        <i class="fa-solid fa-image" style="font-size: 40px;"></i>
                    </div>
                    <div class="dropzone-text">
                        Tải Ảnh Sản Phẩm
                    </div>
                </div>
                <input type="file" id="file-input" name="image" style="display: none;">
            </div>
            <img src="" alt="" style="width: 400px; height:220px;" class="imagepreviews">
            <div style="text-align: right; margin-top: 30px;">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
    <script src="<?= Js_Admin ?>QuanLyTouarHoatDong.js"></script>
</body>

</html>