<!DOCTYPE html>
<html>
    <head>
        <script src="<?=$CONTENT_URL?>/js/xshop-list.js"></script>
    </head>
    <body>
        <div class=" alert alert-info">
            <h3>Quản lý khách hàng</h3>
        </div>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post">
            <table class="table table-hover">
                <thead class="alert-info">
                    <tr>
                        <th></th>
                        <th>MÃ KH</th>
                        <th>HỌ VÀ TÊN</th>
                        <th>ĐỊA CHỈ EMAIL</th>
                        <th>HÌNH ẢNH</th>
                        <th>VAI TRÒ?</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                ?>
                    <tr>
                        <th><input type="checkbox" name="ma_kh[]" value="<?=$ma_kh?>"></th>
                        <td><?=$ma_kh?></td>
                        <td><?=$ho_ten?></td>
                        <td><?=$email?></td>
                        <td><?=$hinh?></td>
                        <td><?=$vai_tro?'Nhân viên':'Khách hàng'?></td>
                        <td>
                            <button class="btn btn-default">
                                <a class="glyphicon-edit glyphicon" href="index.php?btn_edit&ma_kh=<?=$ma_kh?>"></a>
                            </button>
                            <button class="btn btn-default">
                                <a class="glyphicon-trash glyphicon" href="index.php?btn_delete&ma_kh=<?=$ma_kh?>"></a>
                            </button>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7">
                            <button class="btn btn-default" id="check-all" type="button">Chọn tất cả</button>
                            <button class="btn btn-default" id="clear-all" type="button">Bỏ chọn tất cả</button>
                            <button class="btn btn-default" id="btn-delete" name="btn_delete">Xóa các mục chọn</button>
                            <button class="btn btn-default"><a href="index.php">Nhập thêm</a></button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </body>
</html>
