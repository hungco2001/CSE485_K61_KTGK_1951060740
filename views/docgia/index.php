<?php
require_once 'views/header.php';
?>
<a href="index.php?controller=docgia&action=add">
    Thêm mới sách
</a>
<div class="container">
        <h5 class="text-center text-primary mt-5">Danh sach doc gia</h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã độc giả</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Năm sinh</th>
                    <th scope="col">Nghề Nghiệp</th>
                    <th scope="col">Ngày cấp thẻ</th>
                    <th scope="col">Ngày hết hạn</th>
                    <th scope="col">Địa chỉ</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php if (!empty($docgia)): ?>
            <?php foreach ($docgia AS $dg) : ?>
                            <tr>
                                <td><?php echo $dg['madg']; ?></td>
                                <td><?php echo $dg['hovaten']; ?></td>
                                <td><?php echo $dg['gioitinh']; ?></td>
                                <td><?php echo $dg['namsinh']; ?></td>
                                <td><?php echo $dg['nghenghiep']; ?></td>
                                <td><?php echo $dg['ngaycapthe']; ?></td>
                                <td><?php echo $dg['ngayhethan']; ?></td>
                                <td><?php echo $dg['diachi']; ?></td>
                                <td>
                                    <?php
                                        $urlEdit =
                                            "index.php?controller=docgia&action=edit&id=" . $dg['madg'];
                                        $urlDelete =
                                            "index.php?controller=docgia&action=delete&id=" . $dg['madg'];
                                        ?>
                                        <a href="<?php echo $urlEdit?>">Sua</a> &nbsp;
                                        <a onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                                        href="<?php echo $urlDelete?>">
                                            Xóa
                                        </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>  
                            <?php else: ?>
                            <tr>
                                <td colspan="2">KHông có dữ liệu</td>
                            </tr>
                            <?php endif; ?>
            </tbody>
        </table>
    </div> 
    <?php
        require_once 'views/footer.php'
    ?>