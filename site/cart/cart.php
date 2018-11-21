<!DOCTYPE html>
<html>
<body>
<?php if(isset($_SESSION['user'])) : ?>
<?php if(isset($_SESSION['cart'])): ?>
	<h2 class="alert alert-info">Danh sách giỏ hàng</h2>
	 <?php if (isset($_SESSION['gh'])) :?>
            			<p class="text-danger"> <?php echo $_SESSION['gh']; ?></p>
        				<?php endif ; unset($_SESSION['gh']) ?>
	<table class="table table-hover table-bordered">
		<thead>
			<tr class="alert-info">
				<th>Mã SP</th>
				<th>Tên SP</th>
				<th>Đơn giá</th>
				<th>Giảm giá</th>
				<th>Số Lượng</th>
				<th>Thành tiền</th>
				<th>Thao tác</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($_SESSION['cart'] as $key => $value) :?>
				<tr>
					<td style="line-height: 35px"><?= $key ?></td>
					<td style="line-height: 35px"><?= $value['name'] ?></td>
					<td style="line-height: 35px"><?= number_format($value['don_gia']) ?></td>
					<td style="line-height: 35px"><?php echo ($value['giam_gia'])*100; ?>%</td>
					<td>
						<input type="number" pattern="0-9" name="qty" id="qty" value="<?php echo $value['qty']?>" min=0 class="form-control" style="width: 70px; margin-top:0px ">
					</td>
					<td style="line-height: 35px"><?php $total=($value['don_gia'] * $value['qty']) - (($value['don_gia'] * $value['qty']) * $value['giam_gia'])  ?><?=number_format($total) ?></td>
					<td style="line-height: 35px">
						 <a href="#" class="updatecart" data-key=<?php echo $key?>><span class="fas fa-sync-alt"></span></a>
						<a href="remove.php?key=<?= $key?>"><span class="glyphicon glyphicon-trash " style="color:red"></span></a>
					</td>
				</tr>
				<?php $to[] = (($value['don_gia'] * $value['qty']) - (($value['don_gia'] * $value['qty']) * $value['giam_gia']))  ; 
					$tong = array_sum($to);
				 ?>
			<?php endforeach ; ?>
		</tbody>
	</table>
	<div class="pull-right ">
		<a href="../cart/deleteall.php" class="btn btn-danger" >Xóa tất cả</a>
	</div>
	<div class="col-md-9 pull-left">
		<ul class="list-group">
			<li class="list-group-item text-center text-success" >
				<h3>Thông tin chi tiết đơn hàng</h3>
			</li>
			<li class="list-group-item">
				<span class="badge"> <?=number_format($tong) ?></span> Số tiền
			</li>
			<li class="list-group-item">
				<span class="badge"> <?=number_format($tong *0.05) ?> </span> VAT: 5%
			</li>
<!-- 			<li class="list-group-item">
				<span class="badge"><?=$value['giam_gia'] ?>%</span>Giảm giá
			</li> -->
			<li class="list-group-item">
				<span class="badge"><?php $_SESSION['tong']= $tong+($tong*0.05)?><?=number_format($_SESSION['tong'])?></span>Tổng tiền thanh toán
			</li>
		</ul>
		<a class="btn btn-primary" href="thanh-toan.php"> Thanh Toán</a>
			<a class="btn btn-danger" href="../hang-hoa/liet-ke.php"">Tiếp tục mua hàng</a>
	</div>
<?php else :?>
	<p> Giỏ hàng trống!!! </p>
	<a href="../hang-hoa/liet-ke.php" class="btn btn-danger">Mua hàng</a>
<?php endif; ?>
<?php else :?>
		<p> Đăng nhập để mua hàng!!! </p>
	<a href="../tai-khoan/dang-nhap.php" class="btn btn-danger"> Đăng nhập</a>
<?php endif; ?>
</body>
</html>