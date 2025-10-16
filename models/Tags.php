<?php
// Thẻ Tag Blog
class Tags
{
    public $tag_id;
    public $tag_name;
    public $blog_id;
    private $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Lấy Toàn Bộ tag blog
    public function GetAll()
    {
        $sql = " SELECT tags.* FROM tags
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}
