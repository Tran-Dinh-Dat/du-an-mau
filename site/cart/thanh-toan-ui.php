<?php 
require_once '../../global.php';
	// $user= pdo_query_one('ma_kh',intval($_SESSION['user']));
// echo  '<pre/>';
// var_dump($_SESSION['cart'])
extract($_SESSION['user']);
$db=new db();
// extract($_SESSION['cart']);
if(exist_param("submittt")) {
	$data=[
		'gia_dh'=>$_SESSION['tong'],
		'note'=> postInput('note'),
		'dia_chi'=> postInput('dia_chi'),
		'ma_kh'=> $ma_kh,
		'trang_thai'=> 0
	];
	$idtran=$db->insert("thanh_toan",$data);
	if($idtran>0){
		foreach ($_SESSION['cart'] as $key => $value) {
			$data2=[
				'ma_TT'=>$idtran,
				'ma_hh'=>$key,
				'so_luong'=>$value['qty'],
				'gia_SP'=>$value['don_gia'],
				'ten_SP'=>$value['name']
			];
			$idinsert=$db->insert("don_hang",$data2);
			$_SESSION["success"]="Đơn hàng đang được xử lý !!! </br> Đơn hàng sẽ được chuyển đến bạn trong thời gian ngắn nhất có thể !!! </br>";
		
			// // chuyen huong
			echo "<script type='text/javascript'>
        	window.location.href = 'thong-bao.php';
        </script>
			 ";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<body>

	<h3 class="alert alert-info">Thanh toán</h3>
	<form method="POST" role="form" action="thanh-toan.php">
                <div class="form-group">
                    <div class="form-group">
                        <label>Tên đăng nhập</label>
                        <input class="form-control" readonly="" name="ma_kh" value="<?=$ma_kh?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Họ và tên</label>
                        <input  class="form-control" readonly="" name="ho_ten" value="<?=$ho_ten?>">
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ email</label>
                        <input class="form-control" readonly="" name="email" value="<?=$email?>">
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ giao hàng</label>
                        <input class="form-control"  name="dia_chi" value="">
                    </div>
                    <div class="form-group">
                    	<label>Ghi chú</label>
                    	<textarea class="form-control" placeholder="giao tận nơi :))" name="note" id="note" rows="3"></textarea>
                    </div>
                </div>
                <button class="btn btn-default" type="submit"  name="submittt" href="thong-bao.php"> Xác nhận</button>
        </form>
</body>
</html>