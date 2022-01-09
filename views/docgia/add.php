<?php
    require_once 'views/header.php';
?>
<div style="color: red">
    <?php echo $loi; ?>
</div>
<form method="POST" >
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Ho va ten</label>
    <input type="text" name="ten" class="form-control"  >
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Gioi tinh</label>
    <input type="text" name="gioitinh" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputtext" class="form-label">Nam Sinh</label>
    <input type="text" name="namsinh" class="form-control"  >
  <div class="mb-3">
  <div class="mb-3">
    <label for="exampleInputtext1" class="form-label">Nghe Nghiep</label>
    <input type="text" name="nghenghiep" class="form-control"  >
  <div class="mb-3">
  <div class="mb-3">
    <label for="exampleInputtext1" class="form-label">Ngay Cap The</label>
    <input type="text" name="ngaycapthe" class="form-control"  >
  <div class="mb-3">
  <div class="mb-3">
    <label for="exampleInputtext1" class="form-label">Ngay Het Han</label>
    <input type="text" name="ngayhethan" class="form-control"  >
  <div class="mb-3">
  <div class="mb-3">
    <label for="exampleInputtext1" class="form-label">Dia Chi</label>
    <input type="text" name="diachi" class="form-control"  >
  <div class="mb-3">
  <input type="submit" name="submit" value="Them">
</form>


<?php
    require_once 'views/footer.php'
?>