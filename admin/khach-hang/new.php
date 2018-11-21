<!DOCTYPE html>
<html>
    <body>
         <div class=" alert alert-info">
            <h3>Quản lý khách hàng</h3>
        </div>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div>
                <div class="col-md-6">
                    <label>Mã khách hàng</label>
                    <input name="ma_kh" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Họ và tên</label>
                    <input name="ho_ten" class="form-control">
                </div>
            </div>
            <div>
                <div class="col-md-6">
                    <label>Mật khẩu</label>
                    <input name="mat_khau" type="password" class="form-control">
                </div class="col-md-6">
                <div class="col-md-6">
                    <label>Xác nhận mật khẩu</label>
                    <input name="mat_khau2" type="password" class="form-control">
                </div>
            </div>
            <div>
                <div class="col-md-6">
                    <label>Địa chỉ email</label>
                    <input name="email" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Hình ảnh</label>
                    <input name="hinh" type="file" class="form-control">
                </div>
            </div>
            <div>
                <div class="col-md-6">
                    <label>Kích hoạt ?</label>
                    <div class="form-control">
                        <label><input name="kich_hoat" value="0" type="radio" >Chưa kích hoạt</label>
                        <label><input name="kich_hoat" value="1" type="radio" checked>Kích hoạt</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <label>Vai trò ?</label>
                    <div class="form-control">
                        <label><input name="vai_tro" value="0" type="radio">Khách hàng</label>
                        <label><input name="vai_tro" value="1" type="radio" checked>Nhân viên</label>
                    </div>
                </div>
            </div>
            <div>
                <div class="col-md-12"> 
                    <button class="btn btn-default" name="index.php?btn_insert">Thêm mới</button>
                    <button class="btn btn-default" type="reset">Nhập lại</button>
                    <button class="btn btn-default"><a href="index.php?btn_list">Danh sách</a></button>
                </div>
            </div>
        </form>
    </body>
</html>
