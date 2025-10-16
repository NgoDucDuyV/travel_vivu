<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $dataOneblog_chitiet->title; ?> - Monamedia Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="<?= CSS ?>css.css">
    <link rel="stylesheet" href="<?= CSS ?>post.css">
</head>

<body>
    <section class="hero-layout-fromdangnhap  hero-layout_blog">
        <div class="content hero-layout-fromdangnhap ">
            <div class="hero-layout-fromdangnhap_content">
                <h1>Blog</h1>
                <div class="hero-layout-fromdangnhap_content-a">
                    <a href="http://localhost/PHP1_FPT/simple-shop">Trang chủ</a>
                    <span> / </span>
                    <a href="http://localhost/PHP1_FPT/simple-shop/?page=blog">Travel</a>
                    <span>/ <?= $data->title ?></span>
                </div>
            </div>
        </div>
    </section>

    <section class="postsection">
        <div class="content main-content container single-post-content" style="display: flex;
            flex-wrap: nowrap;">
            <div class="post-detail">
                <div class="post-detail-image">
                    <img src="<?= $data->image_url ?>" alt="<?= $data->title ?>">
                </div>
                <h1 class="post-detail-title"><?= $data->title ?></h1>
                <div class="post-meta single-post-meta">
                    <span><i class="far fa-calendar-alt"></i> <?= $data->publish_date ?> </span>
                    <span><i class="far fa-eye"></i> Lượt xem (<?= $data->views ?>)</span>
                    <span><i class="far fa-comment"></i> <?= $data->comments_count ?> Bình luận</span>
                    <?php foreach ($dataBlogcategory as $value): ?>
                        <span><i class="fas fa-folder"></i><?= $value->categoryname ?></span>
                    <?php endforeach ?>
                </div>
                <div class="content-wrapper">
                    <article class="post-content">
                        <div class="image-gallery">
                            <?php foreach ($dataimagendc as $value): ?>
                                <img src="<?= $value->image ?>" alt="anh noi dung blog<?= $value->id ?>">
                            <?php endforeach ?>
                        </div>
                        <?php foreach ($datandc as $value): ?>
                            <p><?= $value->title ?></p>
                        <?php endforeach ?>
                        <div class="testimonial-block">
                            <div class="quote-icon">"</div>
                            <p class="quote-text"><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</i></p>
                            <div class="quote-author">
                                <hr>
                                <span class="author-name"><?= $dataUserAuthor->fullname ?></span>
                            </div>
                        </div>

                        <h2>Lorem ipsum dolor sit amet consectetur.</h2>

                        <div class="image-gallery">
                            <img src="<?= IMAGECHUNG ?>blog_chitet-item1.jpg" alt="Landscape 1">
                            <img src="<?= IMAGECHUNG ?>blog_chitet-item2.jpg" alt="Landscape 2">
                            <img src="<?= IMAGECHUNG ?>blog_chitet-item3.jpg" alt="Landscape 3">
                        </div>

                        <?php foreach ($datandp as $value): ?>
                            <p><?= $value->title ?></p>
                        <?php endforeach ?>

                        <div class="post-meta">
                            <hr class="meta-divider">
                            <div class="tags-share">
                                <div class="tags">
                                    <span>Thẻ:</span>
                                    <?php foreach ($dataBlogtags as $value): ?>
                                        <a href="#" class="tag-item"><?= $value->tagname ?></a>
                                    <?php endforeach ?>
                                </div>
                                <div class="share-icons">
                                    <span>Chia sẻ:</span>
                                    <a href="#" class="share-icon"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="share-icon"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="share-icon"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#" class="share-icon"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <hr class="meta-divider">
                        </div>

                        <nav class="post-navigation">
                            <?php if (isset($datatruoc->image_url)): ?>
                                <a href="<?= BASE_URL ?>?mode=client&act=blog_chitiet&id=<?= $datatruoc->blog_id ?>&idauthor=<?= $datatruoc->id_author ?>">
                                    <div class="nav-prev">
                                        <img src="<?= $datatruoc->image_url ?>" alt="Profile" class="profile-thumb">
                                        <span class="nav-label">Bài viết trước</span>
                                    </div>
                                </a>
                            <?php endif ?>

                            <div class="nav-center">
                                <i class="fas fa-th-large"></i>
                            </div>
                            <?php if (isset($datasau->image_url)): ?>
                                <a href="<?= BASE_URL ?>?mode=client&act=blog_chitiet&id=<?= $datasau->blog_id ?>&idauthor=<?= $datasau->id_author ?>">
                                    <div class="nav-prev">
                                        <img src="<?= $datasau->image_url ?>" alt="Profile" class="profile-thumb">
                                        <span class="nav-label">Bài viết Sau</span>
                                    </div>
                                </a>
                            <?php endif ?>
                        </nav>
                    </article>
                </div>
                <div class="post-detail-content">
                </div>

                <div class="comments-section">
                    <h3>Bình luận (<?php echo count($datacomen); ?>)</h3>
                    <div class="comment-box" id="comment-box">
                        <?php if (count($datacomen) > 0): ?>
                            <?php foreach ($datacomen as $value): ?>
                                <div class="comment-card-wrapper">
                                    <div class="comment-card-exact">
                                        <div class="comment-avatar-exact">
                                            <?php foreach ($datauser as $valueuser): ?>
                                                <?php if ($valueuser->name ==  $value->author_name && $valueuser->id == $value->comment_iduser): ?>
                                                    <?php if ($valueuser->image): ?>
                                                        <img src="<?= $valueuser->image ?>" alt="">
                                                    <?php endif  ?>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </div>
                                        <div class="comment-content-exact">
                                            <div class="comment-meta-exact">
                                                <span class="comment-date-exact">
                                                    <span style="margin-right: 5px; color:red"><i class="far fa-calendar-alt"></i></span>
                                                    <?= $value->comment_date ?>
                                                </span>
                                                <a href="#" class="comment-reply-exact">
                                                    Reply
                                                </a>
                                            </div>
                                            <h4 class="comment-author-exact"><?= $value->author_name ?></h4>
                                            <p class="comment-text-exact"><?= $value->comment_text ?></p>
                                            <p class="comment-moderation-exact">Your comment is awaiting moderation.</p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>Chưa có bình luận nào. Hãy là người đầu tiên bình luận!</p>
                        <?php endif; ?>
                    </div>
                    <!-- <div class="comment-btnSize">
                        <i onclick="OnclickCommentItem()" class='bxr  bx-chevrons-down'></i>
                    </div> -->
                    <div class="comment-form">
                        <h4>Để lại bình luận của bạn</h4>
                        <form action="<?= BASE_URL ?>?mode=client&act=blog_chitiet&id=<?= $data->blog_id ?>" method="post">
                            <input type="hidden" name="post_id" value="<?= $data->blog_id ?>">
                            <?php if (isset($_SESSION['username'])) { ?>
                                <p>Đã đăng nhập với tên <span style="color: red;"><?= $dataUser->name ?></span>. <a href="<?= BASE_URL ?>?page=auth&action=showfromlogin" style="color:red;">Đăng xuất?</a></p>
                                <input type="text" id="author_name" name="author_name" required value="<?= $dataUser->name ?>" style="display: none;">
                                <input type="text" id="comment_iduser" name="comment_iduser" required value="<?= $dataUser->id ?>" style="display: none;">
                            <?php } else { ?>
                                <label for="author_name">Tên của bạn:</label>
                                <input type="text" id="author_name" name="author_name">
                            <?php } ?>
                            <!-- required -->
                            <label for="comment_text">Bình luận:</label>
                            <textarea id="comment_text" name="comment_text" rows="5" required></textarea>
                            <button type="submit">Gửi bình luận</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            require_once $views_file;
            ?>
        </div>
    </section>


    <script>
        const commentBox = document.querySelector('.comment-box');

        let isDragging = false;
        let startY = 0;
        let scrollStart = 0;

        commentBox.addEventListener('mousedown', (e) => {
            isDragging = true;
            commentBox.classList.add('active');
            startY = e.clientY;
            scrollStart = commentBox.scrollTop;
        });

        document.addEventListener('mouseup', () => {
            isDragging = false;
            commentBox.classList.remove('active');
        });

        document.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            const dy = e.clientY - startY;
            commentBox.scrollTop = scrollStart - dy;
        });

        // Ngăn chọn chữ khi kéo
        commentBox.addEventListener('dragstart', (e) => e.preventDefault());
    </script>
</body>

</html>