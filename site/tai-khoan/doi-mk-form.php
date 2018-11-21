<!DOCTYPE html>
<html>
    <body>
        <div class="alert alert-danger">
            <h3>Cập nhật tài khoản</h3>
        </div>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="doi-mk.php" method="post">
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input class="form-control" name="ma_kh">
            </div>
            <div class="form-group">
                <label>Mật khẩu cũ</label>
                <input class="form-control" name="mat_khau" type="password">
            </div>
            <div class="form-group">
                <label>Mật khẩu mới</label>
                <input class="form-control" name="mat_khau2" type="password">
            </div>
            <div class="form-group">
                <label>Xác nhận mật khẩu mới</label>
                <input class="form-control" name="mat_khau3" type="password">
            </div>
            <div>
                <button class="btn btn-default" name="btn_change"><span class="glyphicon glyphicon-edit"></span> Đổi mật khẩu</button>

            </div>
        </form>
    </body>
</html>
