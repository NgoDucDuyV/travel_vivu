<?php
// usser client
class User
{

    public $id;
    public $username;
    public $password;
    public $email;
    public $name;
    public $image;
    public $date_creation;
    public $date_update;
    private $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    // lấy hết danh sách 
    public function GetAll()
    {
        $sql = "
        SELECT users.* FROM users 
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }
    // Lấy 1 danh sách user theo id
    public function GetOne($id)
    {
        $sql = "
        SELECT users.* FROM users
        WHERE users.id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    // Đăng ký user mới
    public function Inssetregister($requestData)
    {
        $hashed_password = password_hash($requestData['password'], PASSWORD_DEFAULT);
        // mã hóa pasword
        // echo ($requestData['username'] . $requestData['email'] . $requestData['password']);
        // echo isset($requestData['name']) ? $requestData['name'] : "vl";
        // die;
        $sql = "
        INSERT INTO `users`(`username`, `password`,`email`,`name`,`date_creation`,`date_update`) VALUES 
        (:username ,:password , :email ,:name ,:date_creation ,:date_update)
        ";
        date_default_timezone_set('Asia/Ho_Chi_Minh'); // GMT+7 cho Việt Nam
        $date = date("Y-m-d H:i:s");
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':username', $requestData['username']);
        $stmt->bindParam(':password', $requestData['password']);
        $stmt->bindParam(':email', $requestData['email']);
        $stmt->bindParam(':name', $requestData['name']) ?? null;
        $stmt->bindParam(':date_creation', $date);
        $stmt->bindParam(':date_update', $date);
        $stmt->execute();
    }

    // xóa user 
    public function Xoa($id)
    {
        $sql = "
        DELETE FROM `users` WHERE users.id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    // thêm ảnh đại diệ mới user
    public function Imageuser($url, $id)
    {
        // var_dump($url);
        // die;
        $sql = "
        UPDATE `users` SET `image`= :image ,`date_update`= :date_update WHERE users.id = :id
        ";
        date_default_timezone_set('Asia/Ho_Chi_Minh'); // GMT+7 cho Việt Nam
        $date = date("Y-m-d H:i:s");
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":image", $url);
        $stmt->bindParam(":date_update", $date);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
}
// user Admin
class UserAdmin
{
    public $id;
    public $useremail;
    public $password;
    public $fullname;
    public $email;
    public $sdt;
    public $image;
    public $role_id;
    public $date_creation;
    public $date_update;
    public $rolesname;
    private $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }
    // lấy toàn bộ danh sách userAdmin
    public function GetAll()
    {
        $sql = "
        SELECT useradmin.*, roles.name AS rolesname  FROM useradmin LEFT JOIN roles ON  useradmin.role_id = roles.role_id
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    // lấy một danh sách Admin theo id
    public function GetOne($id)
    {
        $sql = "
        SELECT useradmin.*, roles.name AS rolesname FROM useradmin LEFT JOIN roles ON useradmin.role_id = roles.role_id WHERE useradmin.id = :id;
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    // thêm User Admin
    public function InsetUserAdmin()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh'); // GMT+7 cho Việt Nam
        $date = date("Y-m-d H:i:s");
        $email = null;
        $image = null;
        // var_dump(
        //     $_POST['useremail'],
        //     $_POST['password'],
        //     $_POST['fullname'],
        //     $_POST['sdt'],
        //     $_POST['role_id'],
        //     $image,
        //     $email,
        //     $date
        // );
        // die;
        $sql = "
        INSERT INTO `useradmin`( `useremail`, `password`, `fullname`, `email`, `sdt`, `image`, `role_id`, `date_creation`, `date_update`) VALUES 
        (:useremail, :password, :fullname, :email, :sdt, :image, :role_id, :date_creation, :date_update)
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':useremail', $_POST['useremail']);
        $stmt->bindParam(':password', $_POST['password']);
        $stmt->bindParam(':fullname', $_POST['fullname']);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':sdt', $_POST['sdt']);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':role_id', $_POST['role_id']);
        $stmt->bindParam(':date_creation', $date);
        $stmt->bindParam(':date_update', $date);
        $stmt->execute();
    }
    // Chỉnh Sửa Admin Theo id
    public function UpdateUserAdminModel($id)
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh'); // GMT+7 cho Việt Nam
        $date = date("Y-m-d H:i:s");
        // var_dump(
        //     $_POST['useremail'],
        //     $_POST['password'],
        //     $_POST['fullname'],
        //     $_POST['sdt'],
        //     $_POST['role_id'],
        //     $id
        // );
        // die;
        $sql = "
        UPDATE `useradmin` SET 
        `useremail`=:useremail,
        `password`=:password,
        `fullname`=:fullname,
        `sdt`=:sdt,
        `role_id`=:role_id,
        `date_update`=:date_update
        WHERE useradmin.id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':useremail', $_POST['useremail']);
        $stmt->bindParam(':password', $_POST['password']);
        $stmt->bindParam(':fullname', $_POST['fullname']);
        $stmt->bindParam(':sdt', $_POST['sdt']);
        $stmt->bindParam(':role_id', $_POST['role_id']);
        $stmt->bindParam(':date_update', $date);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    // Theem chinh sửa avsta user adamin
    public function UpdateAvataUserAdminModels($id, $url)
    {
        // var_dump($id, $url);
        // die;
        date_default_timezone_set('Asia/Ho_Chi_Minh'); // GMT+7 cho Việt Nam
        $date = date("Y-m-d H:i:s");
        $sql = "
        UPDATE `useradmin` SET `image`=:image,`date_update`=:date_update WHERE useradmin.id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':image', $url);
        $stmt->bindParam(':date_update', $date);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    // Xóa Tài khảon Admin
    public function DeleteUsserNhanVienModel($id)
    {
        $sql = "
        DELETE FROM `useradmin` WHERE useradmin.id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}

// role chức vụ cảu admin
class Role
{
    public  $role_id;
    public  $name;

    private $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    // lấy toàn bộ danh sách role
    public function GetAll()
    {
        $sql = " 
        SELECT roles.* FROM roles
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}
