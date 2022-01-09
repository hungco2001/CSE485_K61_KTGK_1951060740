<?php

require_once 'configs/database.php';
class Docgia {
    public $id;
    public $ten;
    public $gioitinh;
    public $namsinh;
    public $nghenghiep;
    public $ngaycapthe;
    public $ngayhethan;
    public $diachi;
public function connectDb() {
    $connection = mysqli_connect(DB_HOST,
        DB_USERNAME, DB_PASSWORD, DB_NAME);
    if (!$connection) {
        die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
    }

    return $connection;
}

public function closeDb($connection = null) {
    mysqli_close($connection);
}
public function index(){
    $conn = $this->connectDb();
    $sql = "SELECT * FROM docgia";
    $results = mysqli_query($conn,$sql);
    $docgia = [];
    if(mysqli_num_rows($results) > 0){
        $docgia = mysqli_fetch_all($results, MYSQLI_ASSOC);
    }
    $this->closeDb($conn);
    return $docgia;
}
public function insert($mangdg = []) {
    $connection = $this->connectDb();
    //tạo và thực thi truy vấn
    $queryInsert = "INSERT INTO docgia(`hovaten`,`gioitinh`,`namsinh`,`nghenghiep`,`ngaycapthe`,`ngayhethan`,diachi) 
    VALUES ('{$mangdg['ten']}','{$mangdg['gioitinh']}','{$mangdg['namsinh']}','{$mangdg['nghenghiep']}','{$mangdg['ngaycapthe']}','{$mangdg['ngayhethan']}','{$mangdg['diachi']}')";
    $isInsert = mysqli_query($connection, $queryInsert);
    $this->closeDb($connection);

    return $isInsert;
}
public function lay_ban_ghi($id = null) {
    $conn = $this->connectDb();
    $sql = "SELECT * FROM docgia WHERE id=$id";
    $results = mysqli_query($conn, $sql);
    $docgia = [];
    if (mysqli_num_rows($results) > 0) {
        $docgia = mysqli_fetch_all($results, MYSQLI_ASSOC);
        $dg = $docgia[0];
    }
    $this->closeDb($conn);

    return $dg;
}
public function delete($id = null) {
    $conn = $this->connectDb();

    $sql = "DELETE FROM docgia WHERE id = $id";
    $Delete = mysqli_query($conn, $sql);

    $this->closeDb($conn);

    return $Delete;
}

}


?>