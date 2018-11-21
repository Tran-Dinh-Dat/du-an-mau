    <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Online Shopping Center</title>
        <script src="<?=$CONTENT_URL?>/js/jquery.min.js"></script>
        
        <script src="<?=$CONTENT_URL?>/js/bootstrap.min.js"></script>
        <link href="<?=$CONTENT_URL?>/css/bootstrap.min.css" rel="stylesheet"/>
        
        <link href="<?=$CONTENT_URL?>/css/jquery-ui.min.css" rel="stylesheet"/>
        <script src="<?=$CONTENT_URL?>/js/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
        <link rel="stylesheet" href="../../content/css/style.css">
        <link rel="stylesheet" href="../../content/css/layout.css">
        <script>
        $(function (){
            $(".datepicker").datepicker({dateFormat:'yy-mm-dd'});
        });
        </script>
    </head>
    <body>
        <div class="container">
            <header class="row">
                <div class="row header-top">
                    <div class="col-xs-6 col-sm-16 col-md-6 col-lg-6 top-header-left">
                        <ul class="list-inline">
                            <li><a href="">Phone: 0981 740 120</a></li>
                            <li><a href="">Email: Dattdpd02368@fpt.edu.vn </a></li>
                            
                        </ul>
                            
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 top-header-left">
                        <ul class="list-inline text-right">

                            <li><a href="../tai-khoan/dang-nhap.php">Đăng nhập</a></li>
                            <li><a href="../tai-khoan/dang-ky.php">Đăng ký</a></li>
                        </ul>
                    </div>
                </div>
                <!-- end top header -->
                <div class="row">
                    <img src="../../content/css/images/banner.jpg" alt="" class="img-thumbnail img-responsive">
                </div>
            </header>
            <nav class="row">
                <?php require 'layout/menu.php';?>            
            </nav>
            <div class="row">
                <article class="col-sm-9">
                    <div class="row">
                    <?php 
                        require $VIEW_NAME;
                    ?>  
                    </div>
                </article>
                <aside class="col-sm-3">
                    <!--LOGIN-->
                    <?php require 'layout/dang-nhap.php';?>
                    <!--CATALOG-->
                    <?php require 'layout/loai-hang.php';?>
                    <!--FAVORITE-->
                    <?php require 'layout/top10.php';?>
                </aside>
            </div>

        </div>
        <footer class="container-fluid">
                <div class="container footer-top">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <h3>Giới thiệu</h3>
                        <p>Shop VNB - Hệ Thống Shop Cầu Lông Uy Tín Tại TPHCM Và Toàn Quốc.....</p>
                        <ul class="social-icon list-inline">
                            <li class="list-inline">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li class="list-inline">
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                            </li>
                            <li class="list-inline">
                                <a href="#"><i class="fab fa-google-plus"></i></a>
                            </li>
                            <li class="list-inline">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            
                        </ul>
                        
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <h3>Tài khoản</h3>
                        <ul class="list-group">
                            <li class=""><a href="">Kiểm tra giỏ hàng</a></li>
                            <li class=""><a href="">Đăng nhập</a></li>
                            <li class=""><a href="">Tạo tài khoản</a></li>          
                        </ul>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <h3>Thông tin</h3>
                        <ul class="list-group">
                            <li><a href="">Trang chủ</a></li>
                            <li><a href="">Sản phẩm</a></li>
                            <li><a href="">Liên hệ</a></li>
                            <li><a href="">Hỗ trợ</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <h3>Liên hệ</h3>
                        <ul class="list-group">
                            <li><span class="glyphicon glyphicon-map-marker"></span>
                                <a href=""> 08 - Hà Văn Tính, Liên Chiểu, Đà Nẵng </a></li>
                            <li><span class="glyphicon glyphicon-earphone"></span> 
                                <a>0981 740 120 </a></li>
                            <li><span class="glyphicon glyphicon-envelope"></span> <a href="">Dattdpd02368@fpt.edu.vn</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
             <script type="text/javascript">
                    $(function(){
                    $updatecart = $(".updatecart");
                    $updatecart.click(function(e){
                        e.preventDefault();
                        $qty= $(this).parents("tr").find("#qty").val();
                        console.log($qty);
                        $key = $(this).attr("data-key");
                        $.ajax({
                            url: 'http://localhost:81/xshop/site/cart/update-cart.php',
                            type: 'GET',
                            data:{'qty':$qty,'key':$key},
                            success:function(data)
                            {
                                if(data ==1)
                                {
                                    alert("Cập nhật giỏ hàng thành công !");
                                    location.href='http://localhost:81/xshop/site/cart/list-cart.php';
                                }
                            }
                        });
                    });
                });
                </script>
    </body>
</html>
