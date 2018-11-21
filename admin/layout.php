<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Quản trị website</title>
        <script src="<?=$CONTENT_URL?>/js/jquery.min.js" type="text/javascript"></script>
        
        <script src="<?=$CONTENT_URL?>/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="<?=$CONTENT_URL?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
        <link href="<?=$CONTENT_URL?>/css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <script src="<?=$CONTENT_URL?>/js/jquery-ui.min.js" type="text/javascript"></script>

        <link rel="stylesheet" href="../../content/css/style.css">
        
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
                            <li><a href="../../site/tai-khoan/dang-nhap.php">Đăng nhập</a></li>
                            <li><a href="../../site/tai-khoan/dang-ky.php">Đăng ký</a></li>
                        </ul>
                    </div>
                </div>
                <!-- end top header -->
                <div class="row">
                    <img src="../../content/css/images/banner.jpg" alt="" class="img-thumbnail img-responsive">
                </div>
            </header>
            <nav>
                <?php require 'menu.php';?>
            </nav>
            <?php
                
                require $VIEW_NAME;
            ?>
        </div>
    </body>
</html>
