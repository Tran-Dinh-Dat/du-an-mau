<!DOCTYPE html>
<html>
<style type="text/css"> 
    .avatar-login img.avatar  {
    width: 100px;
    display: block;
    margin: 0 auto;
 }
</style>
    <body>
        <div style="margin-bottom: 20px">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3>Tài khoản</h3>
                </div>
            </div>
            <div>
                <div class="avatar-login">
                    <img class="avatar" src='<?=$CONTENT_URL?>/images/users/<?=$_SESSION['user']['hinh']?>'>
                    <br>
                    <h4 class="text-center text-danger"><?= $_SESSION['user']['ho_ten']?></h4>
                </div>
                <li class="list-group-item"><a href="<?=$SITE_URL?>/tai-khoan/dang-nhap.php?btn_logoff">Đăng xuất</a></li>
                <li class="list-group-item"><a href="<?=$SITE_URL?>/tai-khoan/doi-mk.php">Đổi mật khẩu</a></li>
                <li class="list-group-item"><a href="<?=$SITE_URL?>/tai-khoan/cap-nhat-tk.php">Cập nhật tài khoản</a></li>
                <?php
                    if($_SESSION['user']['vai_tro'] == TRUE){
                        echo "<li class='list-group-item'><a href='$ADMIN_URL/trang-chinh'>Quản trị website</a></li>";
                    }
                ?>
            </div>
        </div>        
    </body>
</html>
