<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../../content/css/style.css">
    </head>
    <body>
        <h3 class="alert alert-danger">ĐĂNG NHẬP</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>
        <form action="dang-nhap.php" method="post">
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input name="ma_kh" class="form-control" value="<?=$ma_kh?>">
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input name="mat_khau" type="password" class="form-control" value="<?=$mat_khau?>">
            </div>
            <div class="form-group">
                <label class="form-control">
                    <input name="ghi_nho" type="checkbox" checked>
                    Ghi nhớ tài khoản?
                </label>
            </div>
                <a href="<?=$SITE_URL?>/tai-khoan/quen-mk.php">Quên mật khẩu</a>
            <div class="form-group">
                <button name="btn_login" class="btn btn-default ">
                    <span class="glyphicon glyphicon-log-in"></span> 
                    Đăng nhập
                </button>
                <button class="btn btn-default">
                    <a href="<?=$SITE_URL?>/tai-khoan/dang-ky.php"> 
                        <span class="glyphicon glyphicon-log-out"></span> Đăng ký
                    </a>
                </button>

            </div>
            
        </form>
    </body>
</html>
