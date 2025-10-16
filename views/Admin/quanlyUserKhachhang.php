<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản lý</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CssAdmin ?>quanlysTuar.css">
    <link rel="stylesheet" href="<?= CssAdmin ?>base.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header class="header_breadcrumb">
        <div class="breadcrumb">
            <a href="#">Khách hàng</a>
        </div>
    </header>
    <div class="quanlytuar contentAdmin">
        <div class="content-container">
            <div class="header-section">
                <div class="title-section">
                    <h1 class="page-title">Khách hàng</h1>
                    <span class="item-count">
                        <?php echo count($datauser); ?>
                    </span>
                </div>
                <div class="action-buttons">
                    <a href="">
                        <button class="btn btn-secondary" id="filter-btn">
                            <i class="fa-solid fa-filter"></i> Lọc
                        </button>
                    </a>
                </div>
            </div>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="check-all"></th>
                            <th>ID</th>
                            <th>Tên Hiển Thị</th>
                            <th>Email</th>
                            <th>Ngày Khởi Tạo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datauser as $key => $value) { ?> <tr>
                                <td><input type="checkbox"></td>
                                <td>
                                    <div class="cell-content"><?= $key + 1 ?></div>
                                </td>
                                <td><?= $value->name ?></td>
                                <td><?= $value->email ?></td>
                                <td> <?= $value->date_update ?></td>
                                <td>
                                    <div class="dropdown">
                                        <i class="fa-solid fa-ellipsis dropdown-toggle"></i>
                                        <div class="dropdown-menu">
                                            <a href="<?= BASE_URL ?>?mode=admin&act=authAdmin" class="dropdown-item show-action">
                                                <i class="fa-solid fa-desktop"></i>
                                                <span>Show</span>
                                            </a>
                                            <a href="<?= BASE_URL ?>?mode=admin&act=authAdmin" class="dropdown-item edit-action">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                <span>Edit</span> </a>
                                            <a href="<?= BASE_URL ?>?mode=admin&act=authAdmin" class="dropdown-item delete-action">
                                                <i class="fa-solid fa-trash-can"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="pagination">
                <a href="#" class="pagination-link" id="first-page"><i class="fa-solid fa-chevron-left"></i></a>
                <a href="#" class="pagination-link" id="prev-page"><i class="fa-solid fa-chevron-left fa-2xs"></i></a>
                <a href="#" class="pagination-link">1</a>
                <a href="#" class="pagination-link">2</a>
                <a href="#" class="pagination-link active">3</a>
                <a href="#" class="pagination-link disabled">...</a>
                <a href="#" class="pagination-link" id="next-page"><i class="fa-solid fa-chevron-right fa-2xs"></i></a>
                <a href="#" class="pagination-link" id="last-page"><i class="fa-solid fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</body>

</html>