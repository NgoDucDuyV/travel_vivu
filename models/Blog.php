<?php
// Nội Dung Blog
class Blog
{
    public $blog_id;
    public $title;
    public $content;
    public $publish_date;
    public $views;
    public $comments_count;
    public $image_url;
    public $category_id;
    public $id_author;
    public $categoriescategoryName;
    private $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Lấy hết danh sách Blog
    public function GetAll()
    {
        $sql = " SELECT blog.*, categories.category_name AS categoriescategoryName  FROM blog JOIN categories ON blog.category_id = categories.category_id
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }
    // lấy một danh sách blog Theo id 
    public function GetOns($id)
    {
        $sql = " SELECT blog.*, categories.category_name AS categoriescategoryName  FROM blog JOIN categories ON blog.category_id = categories.category_id WHERE blog.blog_id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    // Cập nhật số lượng bình luận theo id blog
    public function UpdataComenCount($id, $valueslbinhluan)
    {

        $sql = "
        UPDATE `blog` SET `comments_count`= :comments_count  WHERE blog.blog_id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':comments_count', $valueslbinhluan);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    // Cập Nhật lượt Views Theo id Blog
    public function UpdataViews($id, $views)
    {
        $sql = "
        UPDATE `blog` SET `views`= :views WHERE blog.blog_id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':views', $views);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}


class Ndc
{
    public $id;
    public $title;
    public $blog_id;
    private $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function GetAll()
    {
        $sql = " SELECT ndc_blog.* FROM ndc_blog 
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public function GetOns($id)
    {
        $sql = " SELECT ndc_blog.* FROM ndc_blog WHERE ndc_blog.blog_id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}

class Ndp
{
    public $id;
    public $blog_id;
    public $title;
    private $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function GetAll()
    {
        $sql = " SELECT ndp_blog.* FROM ndp_blog 
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public function GetOns($id)
    {
        $sql = " SELECT ndp_blog.* FROM ndp_blog WHERE ndp_blog.blog_id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}

class Image_ndc_blog
{
    public $id;
    public $blog_id;
    public $image;
    private $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function GetAll()
    {
        $sql = " SELECT image_ndc_blog.* FROM image_ndc_blog 
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public function GetOns($id)
    {
        $sql = " SELECT image_ndc_blog.* FROM image_ndc_blog WHERE image_ndc_blog.blog_id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}

class Blog_category
{
    public $blog_id;
    public $categoryname;
    private $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function GetOns($id)
    {
        $sql = " SELECT blog_category.blog_id , categories.category_name AS categoryname FROM blog_category LEFT JOIN categories ON blog_category.category_id = categories.category_id WHERE blog_category.blog_id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}

class Blog_tags
{
    public $blog_id;
    public $tagname;
    private $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function GetOns($id)
    {
        $sql = " SELECT blog_tags.blog_id , tags.tag_name AS tagname FROM blog_tags LEFT JOIN tags ON blog_tags.tag_id = tags.tag_id WHERE blog_tags.blog_id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}
