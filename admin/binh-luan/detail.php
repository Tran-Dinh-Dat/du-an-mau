<!DOCTYPE html>
<html>
    <head>
        <script src="<?=$CONTENT_URL?>/js/xshop-list.js"></script>
    </head>
    <body>
        <div class=" alert alert-info">
            <h3>Chi tiết bình luận</h3>
        </div>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php?ma_hh=<?=$ma_hh?>" method="post">
            <h3 class="text-danger">HÀNG HÓA: <?=$items[0]['ten_hh']?></h3>
            <table class="table table-hover">
                <thead class="alert-info">
                    <tr>
                        <th></th>
                        <th>NỘI DUNG</th>
                        <th>NGÀY BL</th>
                        <th>NGƯỜI BL</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                ?>
                    <tr>
                        <th><input type="checkbox" name="ma_bl[]" value="<?=$ma_bl?>"></th>
                        <td><?=$noi_dung?></td>
                        <td><?=$ngay_bl?></td>
                        <td><?=$ma_kh?></td>
                        <td>
                            <button class="btn btn-default"><a class="glyphicon-trash glyphicon" href="index.php?btn_delete&ma_bl=<?=$ma_bl?>&ma_hh=<?=$ma_hh?>"></a></button>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6">
                            <button class="btn btn-default" id="check-all" type="button">Chọn tất cả</button>
                            <button class="btn btn-default" id="clear-all" type="button">Bỏ chọn tất cả</button>
                            <button class="btn btn-default" id="btn-delete" name="btn_delete">Xóa các mục chọn</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </body>
</html>
