<?php
// cate gỏy blog
class Categories
{
    public $category_id;
    public $category_name;
    public $post_count;
    public $blog_count;
    private $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Lấy category blog
    public function GetAll()
    {
        $sql = " 
        SELECT categories.* FROM `categories`
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}
