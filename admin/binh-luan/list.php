<!DOCTYPE html>
<html>
    <body>
        <div class=" alert alert-info">
            <h3>Tổng hợp bình luận</h3>
        </div>
        <form action="index.php" method="post">
            <table class="table table-hover">
                <thead class="alert-info">
                    <tr>
                        <th>Hàng hóa</th>
                        <th>Số bình luận</th>
                        <th>Mới nhất</th>
                        <th>Cũ nhất</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                ?>
                    <tr>
                        <td><?=$ten_hh?></td>
                        <td><?=$so_luong?></td>
                        <td><?=$cu_nhat?></td>
                        <td><?=$moi_nhat?></td>
                        <td>
                            <button class="btn btn-default"><a href="../binh-luan/index.php?ma_hh=<?=$ma_hh?>">Chi tiết</a></button>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
        </form>
    </body>
</html>
