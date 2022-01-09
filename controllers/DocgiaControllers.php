<?php
require_once 'models/Docgia.php';
class DocgiaController{
public function index(){
    $dg = new Docgia();
    $docgia = $dg->index();
    require_once 'views/docgia/index.php';
}
public function add() {
    $loi = '';
    if (isset($_POST['submit'])) {
        $ten = $_POST['ten'];
        $gioitinh = $_POST['gioitinh'];
        $namsinh = $_POST['namsinh'];
        $nghenghiep = $_POST['nghenghiep'];
        $ngaycapthe = $_POST['ngaycapthe'];
        $ngayhethan = $_POST['ngayhethan'];
        $diachi = $_POST['diachi'];
        if (empty($ten)) {
            $error = "Ten không được để trống";
        }
        else {
            $dg = new Docgia();
            $mang = [
                'ten' => $ten,
                'gioitinh' => $gioitinh,
                'namsinh' => $namsinh,
                'nghenghiep' => $nghenghiep,
                'ngaycapthe' => $ngaycapthe,
                'ngayhethan' => $ngayhethan,
                'diachi' => $diachi
            ];
            $Insert = $dg->insert($mang);
            header("Location: index.php?controller=docgia&action=index");
            exit();
        }
    }
    require_once 'views/docgia/add.php';
}
public function delete() {
    $id = $_GET['id'];
    if (!is_numeric($id)) {
        header("Location: index.php?controller=docgia&action=index");
        exit();
    }
    $dg = new Docgia();
    $Delete = $dg->delete($id);
    if ($Delete) {
        $_SESSION['success'] = "Xóa bản ghi #$id thành công";
        header("Location:/HTML_CSS/html/BaiKiemTra/index.php?controller=docgia&action=index");
    }
    else {
        $_SESSION['error'] = "Xóa bản ghi #$id thất bại";
    }
    exit();


}
}

?>






