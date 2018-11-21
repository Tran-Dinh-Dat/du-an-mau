<!DOCTYPE html>
<html>
    <body>
        <div class="alert alert-info">
            <h3>Quản lý hàng hóa</h3>
        </div>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 >$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post">
            <div class="form-group">
                <label>Mã loại</label>
                <input name="ma_loai" class="form-control" value="<?=$ma_loai?>" readonly>
            </div>
            <div class="form-group">
                <label>Tên loại</label>
                <input name="ten_loai" class="form-control" value="<?=$ten_loai?>" >
            </div>
            
                <button name="btn_update">Cập nhật</button>
                <button type="reset">Nhập lại</button>
                <button><a href="index.php">Thêm mới</a></button>
                <button><a href="index.php?btn_list">Danh sách</a></button>
        </form>
    </body>
</html>
