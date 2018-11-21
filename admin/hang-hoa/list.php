<!DOCTYPE html>
<html>
    <head>
        <script src="<?=$CONTENT_URL?>/js/xshop-list.js"></script>
    </head>
    <body>
        <div class=" alert alert-info">
            <h3>Quản lý hàng hóa</h3>
        </div>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <div class="list-group list-inline text-center">
            <li><button class="bnt btn-default">
                <a class="glyphicon glyphicon-step-backward" href="?btn_list&page_no=0"></a>
            </button></li>
            <li><button class="bnt btn-default">
                <a class="glyphicon glyphicon-chevron-left" href="?btn_list&page_no=<?=$_SESSION['page_no']-1?>"></a>
            </button></li>
            <li><button class="bnt btn-default">
                <a class="glyphicon glyphicon-chevron-right" href="?btn_list&page_no=<?=$_SESSION['page_no']+1?>"></a>
            </button></li>
            <li><button class="bnt btn-default">
                <a class="glyphicon glyphicon-step-forward" href="?btn_list&page_no=<?=$_SESSION['page_count']-1?>"></a>
            </button></li>
        </div>
        <form action="index.php" method="post">
            <table  class="table table-hover">
                <thead class="alert-info">
                    <tr>
                        <th></th>
                        <th>Mã hh</th>
                        <th>Tên hh</th>
                        <th>Đơn giá</th>
                        <th>Giảm giá</th>
                        <th>Lượt xem</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                        
                ?>
                    <tr>
                        <th><input type="checkbox" name="ma_hh[]" value="<?=$ma_hh?>"></th>
                        <td><?=$ma_hh?></td>
                        <td><?=$ten_hh?></td>
                        <td><?=number_format($don_gia, 0)?> đ</td>
                        <td><?=number_format($giam_gia*100)?>%</td>
                        <td><?=$so_luot_xem?></td>
                        <td>
                            <button class="btn btn-default">
                                <a class="glyphicon glyphicon-edit" href="index.php?btn_edit&ma_hh=<?=$ma_hh?>"></a>
                            </button>
                            <button class="btn btn-default">
                                <a class="glyphicon glyphicon-trash" href="index.php?btn_delete&ma_hh=<?=$ma_hh?>"></a>
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
