<!DOCTYPE html>
<html>
    <head>
        <script src="<?=$CONTENT_URL?>/js/xshop-list.js"></script>
    </head>
    <body>
        <div class="alert alert-info">
            <h3>Quản lý loại hàng</h3>
        </div>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 >$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post">
            <table class="table table-hover">
                <thead class="bg-info">
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                ?>
                    <tr>
                        <th><input type="checkbox" name="ma_loai[]" value="<?=$ma_loai?>"></th>
                        <td><?=$ma_loai?></td>
                        <td><?=$ten_loai?></td>
                        <td>
                            <button class="btn btn-default">
                                <a class="glyphicon glyphicon-edit" href="index.php?btn_edit&ma_loai=<?=$ma_loai?>" ></a>
                            </button>
                            <button class="btn btn-default">
                                <a class="glyphicon glyphicon-trash" href="index.php?btn_delete&ma_loai=<?=$ma_loai?>" ></a>
                            </button>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">
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

