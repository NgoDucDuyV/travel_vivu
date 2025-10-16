<?php
class BlogController
{
    // Hiển thị các danh sách blog
    public function ShowBlog()
    {
        $blog = new Blog();
        $dataAll = $blog->GetAll();

        // dữ liệu siderbar blog
        $categories = new Categories();
        $datacate = $categories->GetAll();

        $comment = new Comments();
        $datacomen = $comment->GetAll();

        $tags = new Tags();
        $datatags = $tags->GetAll();

        $views_file = Views_Client . "partials/siderbarBlog.php";
        include Views_Client . "blog.php";
    }

    // xem chi tiết trang blog 
    public function ShowBlog_Chitiet($id, $idauthor)
    {
        $blog = new Blog();
        $dataAll = $blog->GetAll();

        $categories = new Categories();
        $datacate = $categories->GetAll();

        $tags = new Tags();
        $datatags = $tags->GetAll();
        // var_dump($data_blog_details);
        // die;
        $user = new User();
        $datauser = $user->GetAll();

        $blog = new Blog();
        $data = $blog->GetOns($id);

        $blog = new Blog();
        $dataOneblog_chitiet = $blog->GetOns($id);

        $Blog_category = new Blog_category();
        $dataBlogcategory = $Blog_category->GetOns($id);

        $Blog_tags = new Blog_tags();
        $dataBlogtags = $Blog_tags->GetOns($id);
        // var_dump($dataBlogcategory -> categoryname);
        // die;
        $ndc = new Ndc();
        $datandc = $ndc->GetOns($id);

        $ndp = new Ndp();
        $datandp = $ndp->GetOns($id);

        $image_ndc_blog = new Image_ndc_blog();
        $dataimagendc = $image_ndc_blog->GetOns($id);

        $comment = new Comments();
        $datacomen = $comment->GetOns($id);

        $tags = new Tags();
        $datatags = $tags->GetAll();

        // các blog trước sau 

        $datasau = $blog->GetOns($id + 1);

        $datatruoc = $blog->GetOns($id - 1);

        $dataUserAuthor = (new UserAdmin())->GetOne($idauthor);
        // var_dump($dataUserAuthor);
        // die;
        if (isset($_SESSION['valueUserClient'])) {
            $dataUser = (new User())->GetOne($_SESSION['valueUserClient']->id);
        }

        $views_file = Views_Client . "partials/siderbarBlog.php";
        include Views_Client . "blog_chitiet.php";
    }
    // Sử lý thêm bình luận
    public function SulyslBinhluan($id)
    {
        $blog = new Blog();
        $datablog = $blog->GetOns($id);

        $valueslbinhluan = $datablog->comments_count + 1;
        // var_dump($valueslbinhluan);
        // die;
        (new Blog())->UpdataComenCount($id, $valueslbinhluan);
    }

    // Sử lý views khí xem chi tiết blog
    public function Views($id)
    {
        $blog = new Blog();
        $data = $blog->GetOns($id);

        $ValueViews = $data->views + 1;
        (new Blog())->UpdataViews($id, $ValueViews);
    }

    // thêm bình luận
    public function InssetBinhluan($id, $comment_iduser)
    {
        $blog = new Blog();
        $data = $blog->GetOns($id);
        if (
            $_POST['author_name'] == ""
            || $_POST['comment_text'] == ""
        ) {
            header("Location: " . BASE_URL . "?mode=client&act=blog_chitiet&id=$id&idauthor=" . $data->id_author);
            exit;
        }

        $comment = new Comments();
        (new BlogController())->SulyslBinhluan($id);

        $comment->InssetBinhluanModel($id, $comment_iduser);
        var_dump(BASE_URL . "?mode=client&act=blog_chitiet&id=$id");
        header("Location: " . BASE_URL . "?mode=client&act=blog_chitiet&id=$id&idauthor=" . $data->id_author);
        exit;
    }
}
