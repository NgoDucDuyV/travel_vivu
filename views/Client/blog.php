<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monamedia Blog</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= CSS ?>css.css">
    <link rel="stylesheet" href="<?= CSS ?>blog.css">
</head>

<body>
    <!--hero-layout-fromdangnhap  -->
    <section class="hero-layout-fromdangnhap">
        <img src="<?= IMAGECHUNG ?>breadcumb-bg-form-dangnhap.jpg" alt="">
        <div class="content hero-layout-fromdangnhap">
            <div class="hero-layout-fromdangnhap_content">
                <h1>Tài khoản</h1>
                <div class="hero-layout-fromdangnhap_content-a">
                    <a href="trangchu.html">Trang chủ</a>
                    <span>/</span>
                    <a href="fromdangnhap.html">Blog</a>
                </div>
            </div>
        </div>
    </section>

    <section class="blogsection">
        <div class=" main-content container">
            <div class="blog-posts">
                <?php
                foreach ($dataAll as $value): ?>
                    <div class="post-card">
                        <div class="post-image">
                            <img src="<?= $value->image_url ?>" alt="<?= $value->title ?>">
                            <div class="post-header">
                                <div class="author-info">
                                    <?php $dataUserAuthor = (new UserAdmin())->GetOne($value->id_author); ?>
                                    <?php if (isset($dataUserAuthor->image)) { ?>
                                        <img src="<?= $dataUserAuthor->image ?>" alt="monamedia avatar" class="user-avatar_img">
                                    <?php } else { ?>
                                        <i class="fa-solid fa-user"></i>
                                    <?php } ?>
                                    <span><?= $dataUserAuthor->fullname ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="post-text">
                                <h2 class="post-title"><?= $value->title ?></h2>
                                <p class="post-excerpt">
                                    <?=
                                    $value->content
                                    ?>
                                </p>
                            </div>
                            <div class="post-meta">
                                <span><i class='bxr  bx-calendar-alt'></i> <?= $value->publish_date ?></span>
                                <span><i class="bxr bx-eye-alt bx-flip-vertical "></i> Lượt xem (<?= $value->views ?>)</span>
                                <span><i class='bxr  bx-stamp'></i> <?= $value->comments_count ?> Bình luận</span>
                                <a href="<?= BASE_URL ?>?mode=client&act=blog_chitiet&id=<?= $value->blog_id ?>&idauthor=<?= $value->id_author ?>" class="read-more">ĐỌC THÊM <i class="bxr bx-arrow-right-stroke bx-flip-vertical bx-fade-right "></i></a>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach
                ?>
            </div>

            <?php
            require_once $views_file;
            ?>
        </div>
    </section>

</body>

</html>