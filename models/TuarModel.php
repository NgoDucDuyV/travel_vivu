<?php
// Thông tin touar chính
class TuarModel
{
    public $id;
    public $title;
    public $time_days;
    public $soluong_people;
    public $price;
    public $image;
    public $date_creation;
    public $date_update;
    public $destination_id;
    public $activities_id;
    public $typeodtouar_id;
    public $difficulty_id;
    public $description;
    public $categories_destination_id;
    public $destinationtitle;
    public $activitiestitle;
    public $typeodtouartitle;
    public $difficultyname;
    public $categories_destinationtitle;
    private $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    // ngày giờ chuẩn hiên âtij viêthnam =
    // date_default_timezone_set('Asia/Ho_Chi_Minh'); // GMT+7 cho Việt Nam
    // $date = date("Y-m-d H:i:s");


    // getAll toàn bộ danh sách touar
    public function getAll()
    {
        $sql = "
        SELECT 
        tuar.*, 
        destination.title AS destinationtitle, 
        activities.title AS activitiestitle, 
        typeodtouar.title AS typeodtouartitle, 
        difficulty.difficulty_name AS difficultyname,
        categories_destination.title AS categories_destinationtitle
        FROM tuar
        LEFT JOIN destination ON tuar.destination_id = destination.id
        LEFT JOIN activities ON tuar.activities_id = activities.id
        LEFT JOIN typeodtouar ON tuar.typeodtouar_id = typeodtouar.id
        LEFT JOIN difficulty ON tuar.difficulty_id = difficulty.id
        LEFT JOIN categories_destination ON tuar.categories_destination_id = categories_destination.id
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    // lấy danh 1 danh sách tảu bằng id
    public function getOne($id)
    {
        $sql = "
        SELECT 
        tuar.*, 
        destination.title AS destinationtitle, 
        activities.title AS activitiestitle, 
        typeodtouar.title AS typeodtouartitle, 
        difficulty.difficulty_name AS difficultyname,
        categories_destination.title AS categories_destinationtitle
        FROM tuar
        LEFT JOIN destination ON tuar.destination_id = destination.id
        LEFT JOIN activities ON tuar.activities_id = activities.id
        LEFT JOIN typeodtouar ON tuar.typeodtouar_id = typeodtouar.id
        LEFT JOIN difficulty ON tuar.difficulty_id = difficulty.id
        LEFT JOIN categories_destination ON tuar.categories_destination_id = categories_destination.id 
        WHERE tuar.id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    // thêm touar mới
    public function InsertTouarModel($url)
    {
        $sql = "
        INSERT INTO `tuar`( `title`, `time_days`, `soluong_people`, `price`, `image`, `date_creation`, `date_update`, `destination_id`, `activities_id`, `typeodtouar_id`, `difficulty_id`, `description`,`categories_destination_id`) VALUES 
        (:title,:time_days,:soluong_people,:price,:image,:date_creation,:date_update,:destination_id,:activities_id,:typeodtouar_id,:difficulty_id, :description , :categories_destination_id)
        ";
        date_default_timezone_set('Asia/Ho_Chi_Minh'); // GMT+7 cho Việt Nam
        $date = date("Y-m-d H:i:s");
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':title', $_POST['title']);
        $stmt->bindParam(':time_days', $_POST['time_days']);
        $stmt->bindParam(':soluong_people', $_POST['soluong_people']);
        $stmt->bindParam(':price', $_POST['price']);
        $stmt->bindParam(':image', $url);
        $stmt->bindParam(':date_creation', $date);
        $stmt->bindParam(':date_update', $date);
        $stmt->bindParam(':destination_id', $_POST['destination_id']);
        $stmt->bindParam(':activities_id', $_POST['activities_id']);
        $stmt->bindParam(':typeodtouar_id', $_POST['typeodtouar_id']);
        $stmt->bindParam(':difficulty_id', $_POST['difficulty_id']);
        $stmt->bindParam(':description', $_POST['description']);
        $stmt->bindParam(':categories_destination_id', $_POST['categories_destination_id']);
        $stmt->execute();
    }

    // chỉnh sửa edit touar 
    public function UpdateTouarModel($url, $id)
    {
        $sql = "
        UPDATE `tuar` SET 
        `title`=:title,
        `time_days`=:time_days,
        `soluong_people`=:soluong_people,
        `price`=:price,
        `image`=:image,
        `date_update`=:date_update,
        `destination_id`=:destination_id,
        `activities_id`=:activities_id,
        `typeodtouar_id`=:typeodtouar_id,
        `difficulty_id`=:difficulty_id,
        `description`= :description,
        `categories_destination_id`= :categories_destination_id
        WHERE tuar.id = :id
        ";
        date_default_timezone_set('Asia/Ho_Chi_Minh'); // GMT+7 cho Việt Nam
        $date = date("Y-m-d H:i:s");
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':title', $_POST['title']);
        $stmt->bindParam(':time_days', $_POST['time_days']);
        $stmt->bindParam(':soluong_people', $_POST['soluong_people']);
        $stmt->bindParam(':price', $_POST['price']);
        $stmt->bindParam(':image', $url);
        $stmt->bindParam(':date_update', $date);
        $stmt->bindParam(':destination_id', $_POST['destination_id']);
        $stmt->bindParam(':activities_id', $_POST['activities_id']);
        $stmt->bindParam(':typeodtouar_id', $_POST['typeodtouar_id']);
        $stmt->bindParam(':difficulty_id', $_POST['difficulty_id']);
        $stmt->bindParam(':description', $_POST['description']);
        $stmt->bindParam(':categories_destination_id', $_POST['categories_destination_id']);
        $stmt->bindParam(':id', $_GET['id']);
        $stmt->execute();
    }

    // xóa touar 
    public function deleteTouar($id)
    {
        $sql = "
        DELETE FROM `tuar` WHERE tuar.id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    // lấy danh sách touar dã lưu bằng id của user client
    public function getTuarDaLuu($id)
    {
        $sql = "
        SELECT tuar.* FROM tuar LEFT JOIN user_saved ON tuar.id = user_saved.tuar_id WHERE user_saved.user_id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }
    // get oner toaur chowf thanh toan 
    public function getTuarChoThanhToanModel($id)
    {
        $sql = "
        SELECT tuar.* FROM tuar LEFT JOIN user_shoping ON tuar.id = user_shoping.touar_id WHERE user_shoping.user_id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}
// Các Điểm Đến
class DestinationModel
{
    public $id;
    public $title;
    public $image;
    public $soluong_tuar;
    private $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAll()
    {
        $sql = "
        SELECT destination.* FROM destination 
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}
// Các Hoạt động
class ActivitiesModel
{
    public $id;
    public $title;
    public $image;
    public $soluong_tour;
    private $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAll()
    {
        $sql = "
        SELECT activities.* FROM activities  
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}
// các loại toaur
class TypeodtouarModel
{
    public $id;
    public $title;
    public $image;
    public $soluong_tour;
    private $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAll()
    {
        $sql = "
        SELECT typeodtouar.* FROM typeodtouar
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}
// đọ khó toaur
class DifficultyModel
{
    public $id;
    public $difficulty_name;
    public $soluong_tour;
    private $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAll()
    {
        $sql = "
        SELECT difficulty.* FROM difficulty 
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}
// mục quốc gia các nước
class Categories_destinationModel
{
    public $id;
    public $title;
    public $soluong_categoriesdestination;
    private $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAll()
    {
        $sql = "
        SELECT categories_destination.* FROM categories_destination 
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}
// luuu touar khách hàng vào yêu thích 
class Usersaved
{
    public $user_id;
    public $tuar_id;
    private $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAllUserSaved_UserId($id)
    {
        // var_dump($id);
        // die;
        $sql = "
        SELECT user_saved.* FROM user_saved WHERE user_saved.user_id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public function InsertYeuThichTouar($user_id, $tuar_id)
    {
        $sql = "
        INSERT INTO `user_saved`(`user_id`, `tuar_id`) VALUES 
        (:user_id, :tuar_id);
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':tuar_id', $tuar_id);
        $stmt->execute();
    }

    public function DelateYeuThichTouar($user_id, $tuar_id)
    {
        $sql = "
        DELETE FROM `user_saved` WHERE user_saved.user_id = :user_id AND user_saved.tuar_id = :tuar_id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':tuar_id', $tuar_id);
        $stmt->execute();
    }
}

class Usershoping
{
    public $user_id;
    public $touar_id;
    private $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAllUserShoping($id)
    {
        // var_dump($id);
        // die;
        $sql = "
        SELECT user_shoping.* FROM user_shoping WHERE user_shoping.user_id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public function InsertShopingModel($user_id, $touar_id)
    {
        $sql = "
        INSERT INTO `user_shoping`(`user_id`, `touar_id`) VALUES 
        (:user_id, :touar_id);
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':touar_id', $touar_id);
        $stmt->execute();
    }

    public function DelateUserShopingModel($user_id, $touar_id)
    {
        $sql = "
        DELETE FROM `user_shoping` WHERE user_shoping.user_id = :user_id AND user_shoping.touar_id = :touar_id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':touar_id', $touar_id);
        $stmt->execute();
    }
}
