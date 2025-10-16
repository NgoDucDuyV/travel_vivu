<?php
$act = isset($_GET['act']) ? $_GET['act'] : '/';

ob_start();
match ($act) {
    '/' => (new TrangchuController())->ShowTrangchu(),
    'trangchu' => (new TrangchuController())->ShowTrangchu(),
    'tour' => (new TuarController())->ShowTuar(),
    'tour_details' => (new TuarController())->ShowTourDetails($_GET['id']),
    'tourdiemden' => (new TuarController())->ShowDiemDen(),
    'tourcachoatdong' => (new TuarController())->ShowCacHoatDong(),
    'tourcacloaitouar' => (new TuarController())->ShowCacLoaiTouar(),
    'vechungtoi' => (new VechungtoiController())->ShowVechungtoi(),
    'lienhe' => (new LienheController())->ShowLienhe(),
    'blog' => (new BlogController())->ShowBlog(),
    'blog_chitiet' => (function () {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $comment_iduser = isset($_POST['comment_iduser']) ? $_POST['comment_iduser'] : Null;
            (new BlogController())->InssetBinhluan($_GET['id'], $comment_iduser);
        } else {
            (new BlogController())->Views($_GET['id']);
            (new BlogController())->ShowBlog_Chitiet($_GET['id'], $_GET['idauthor']);
        }
    })(),

    // kjhi log in đăng nhập trang tại khoản userclietn
    'clientaccount' => (function () {
        if (!isset($_SESSION['username'])) {
            $src = '?mode=client&act=showfromlogin';
            (new Showformloidangnhap())->Showformloidangnhap($src);
            exit;
        } else {
            (new UserLoginSiginController())->ShowSiderbarUser();
        }
    })(),

    'TuarDaLuu' => (function () {
        echo json_encode([
            (new UserLoginSiginController())->ShowTuarDaLuu(),
        ]);
        exit;
    })(),

    'TuarChoThanhToan' => (function () {
        echo json_encode([
            (new UserLoginSiginController())->ShowTuarChoThanToan(),
        ]);
        exit;
    })(),

    'diachi' => (function () {
        echo json_encode([
            (new UserLoginSiginController())->ShowDiachi(),
        ]);
        exit;
    })(),

    'taikhoan' => (function () {
        echo json_encode([
            (new UserLoginSiginController())->ShowTaikoan(),
        ]);
        exit;
    })(),

    'ThemTouarlove' => (function () {
        echo json_encode([
            (new TuarController())->issetTouarYeuThich($_GET['tuar_id']),
        ]);
        exit;
    })(),

    'XoaTouarlove' => (function () {
        echo json_encode([
            (new TuarController())->deleteTouarYeuThich($_GET['tuar_id']),
        ]);
        exit;
    })(),

    'ThemTouarChoThanhToan' => (function () {
        echo json_encode([
            (new TuarController())->issetUsserShoping($_GET['tuar_id']),
        ]);
        exit;
    })(),

    'themimage' => (function () {
        echo json_encode([
            (new UserLoginSiginController())->Themimageuser($_GET['id']),
        ]);
        exit;
    })(),

    'showfromlogin' => (new UserLoginSiginController())->ShowFromLogin(),
    'login' => (new UserLoginSiginController())->login(),
    'showformsigin' => (new UserLoginSiginController())->ShowFromSigin(),
    'sigin' => (new UserLoginSiginController())->Sigin(),
    'logout' => (new UserLoginSiginController())->logout(),
    'resetPassword' => (new UserLoginSiginController())->resetPassword(),



    default => (new TrangchuController())->ShowTrangchu(),
};
$content_views =  ob_get_clean();
// var_dump((new UserLoginSiginController())->ShowFromLogin());
// die;
?>
<main class="content-area">
    <?php (new TrangchuController)->ShowHeader(); ?>
    <div class="contentClient">
        <?= $content_views ?>
    </div>
    <?php (new TrangchuController)->ShowFooter(); ?>
</main>


<!-- <script>
    const loadtrang = document.querySelector('.loadtrang');

    const menuItem = document.querySelectorAll('a');
    const itemconMenu = document.querySelectorAll('.itemcon_menu>a');
    const contentClient = document.querySelector('.contentClient');
    const jsclient = document.querySelectorAll('jsclient');
    const BASE_URL = '<?= BASE_URL ?>';
    fetch(`${BASE_URL}?page=trangchu`)
        .then(response => response.text())
        .then(data => {
            document.querySelector('.contentClient').innerHTML = data;
        });

    function fetchContent(e) {
        e.preventDefault();
        loadtrang.style.display = 'block';
        let url = this.getAttribute('href');
        console.log(url);
        if (url !== '') {
            fetch(`${url}`)
                .then(response => response.text())
                .then(html => {
                    contentClient.innerHTML = html;
                    scrollbtnTop();
                })
                .catch(error => {
                    console.error('Error fetching content:', error);
                })
                .finally(() => {
                    loadtrang.style.display = 'none';
                });
        } else {
            loadtrang.style.display = 'none';
        }
    }

    // menuitem
    menuItem.forEach(item => {
        item.addEventListener('click', fetchContent);
    });
    // menuitemcon
    itemconMenu.forEach(item => {
        item.addEventListener('click', fetchContent);
    });

    document.querySelector('.HeaderA-fromdangnhap').addeventListener('click', fetchContent);
</script> -->