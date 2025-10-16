<?php
// coment Blog
class Comments
{
    public $comment_id;
    public $blog_id;
    public $author_name;
    public $comment_text;
    public $comment_date;
    public $comment_iduser;

    private $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    // lấy toàn bộ coment
    public function GetAll()
    {
        $sql = " SELECT comments.* FROM `comments`
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    // lấy 1 coment theo id blog
    public function GetOns($id)
    {
        $sql = " SELECT comments.* FROM comments WHERE comments.blog_id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }
    // Thêm coment mới theo id blog và id user đăng nhập coment
    public function InssetBinhluanModel($id, $comment_iduser)
    {
        $sql = " INSERT INTO `comments`( `blog_id`, `author_name`, `comment_text`, `comment_date` ,`comment_iduser`) VALUES 
        (:blog_id, :author_name , :comment_text , :comment_date ,:comment_iduser )
        ";
        date_default_timezone_set('Asia/Ho_Chi_Minh'); // GMT+7 cho Việt Nam
        $date = date("Y-m-d H:i:s");
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":blog_id", $id);
        $stmt->bindParam(":author_name", $_POST['author_name']);
        $stmt->bindParam(":comment_text", $_POST['comment_text']);
        $stmt->bindParam(":comment_date", $date);
        $stmt->bindParam(":comment_iduser", $comment_iduser);
        $stmt->execute();
    }
}
