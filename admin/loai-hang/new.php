<!DOCTYPE html>
<html>
    <body>
        <div class="row">
            <div class="alert alert-info">
                <h3>Quản lý loại hàng</h3>
            </div>
            <?php
                if(strlen($MESSAGE)){
                    echo "<h5>$MESSAGE</h5>";
                }
            ?>
            <form action="index.php" method="POST" role="form" class=" ">  
                <div class="form-group">
                    <label for="">Mã loại</label>
                    <input type="text" name="ma_loai" value="auto number" readonly class="form-control" id="" >
                </div>
                 <div class="form-group">
                    <label for="">Tên loại</label>
                    <input type="text" name="ten_loai" value="" class="form-control" id="" >
                </div>
                <button name="btn_insert" class="btn btn-default">Thêm mới</button>
                <button type="reset" class="btn btn-default">Nhập lại</button>
                <button class="btn btn-default"> <a href="index.php?btn_list">Danh sách</a></button>
            </form>
        </div>
    </body>
</html>

