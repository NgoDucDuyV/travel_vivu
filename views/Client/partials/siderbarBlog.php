<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monamedia Blog</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS ?>tagblog.css">
    <style>
    </style>
</head>

<body>
    <aside class="sidebar">
        <div class="sidebar-block search-block">
            <h3>Tìm kiếm</h3>
            <form action="#" method="get">
                <input type="text" name="search_query" placeholder="Tìm kiếm...">
                <button type="submit"><i class='bx bx-search-alt-2'></i></button>
            </form>
        </div>

        <div class="sidebar-block recent-posts-block">
            <h3>Bài viết mới</h3>
            <ul>
                <?php foreach ($dataAll as $value): ?>
                    <li><a href="post.php?id=<?= $value->post_id ?>"><?= $value->title ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="sidebar-block recent-comments-block">
            <h3>Phản hồi gần đây</h3>
            <ul>
                <?php foreach ($datacomen as $value): ?>
                    <li>
                        <strong><?= $value->author_name ?></strong> trong
                        <span><?= $value->comment_text ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="sidebar-block categories-block">
            <h3>Categories</h3>
            <ul>
                <?php foreach ($datacate as $value): ?>
                    <li><a href="#"><?= $value->category_name ?> (<?= $value->post_count ?>)</a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="sidebar-block newsletter-block">
            <h3>Newsletter</h3>
            <p>Nhận thông tin cập nhật mới nhất.</p>
            <form action="#" method="post">
                <input type="email" name="email" placeholder="Email của bạn">
                <button type="submit" class="subscribe-btn">SUBSCRIBE</button>
            </form>
        </div>

        <div class="sidebar-block tags-block">
            <h3>Tag</h3>
            <div class="tags-list">
                <?php foreach ($datatags as $value): ?>
                    <a href="#"><?= $value->tag_name ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </aside>
    </section>

</body>

</html>