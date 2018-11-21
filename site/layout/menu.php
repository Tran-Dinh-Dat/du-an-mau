

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand logo-img" href="<?=$SITE_URL?>/trang-chinh?trang_chu">
        <img src="../../content/css/images/logo.png" alt="" class="img-thumbnail img-responsive img-rounded ">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?=$SITE_URL?>/trang-chinh?gioi_thieu">Giới thiệu</a></li>
        <li><a href="<?=$SITE_URL?>/trang-chinh?lien_he">Liên hệ</a></li>
        <li><a href="<?=$SITE_URL?>/trang-chinh?gop_y">Góp ý</a></li>
        <li><a href="<?=$SITE_URL?>/trang-chinh?hoi_dap">Hỏi đáp</a></li>
      </ul>
      <form action="<?=$SITE_URL?>/hang-hoa/liet-ke.php" method="POST" role="form" class="navbar-form navbar-left">
           <div class="form-group">
               <input type="text" name="keywords" class="form-control" id="" placeholder="Từ khóa tìm kiếm">
               <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
           </div> 
      </form>
      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tiếng viêt <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Tiếng Anh</a></li>
            <li><a href="#">Tiếng Trung</a></li>
          </ul>
        </li>
        <li><a style="padding: 7px;margin:0;" href="../cart/list-cart.php" ><button type="button" class="btn btn-info">Giỏ hàng <i class="fas fa-cart-plus"></i></button><span style=" position: absolute; background: #f36e36;color: #fff;top: -4px;font-weight: 400;right: -4px;text-align: center;font-size: 13px;min-width: 22px;line-height: 22px;border-radius: 50%;">
          <?php 
              if (isset($_SESSION["user"])) {
                  if (!isset($_SESSION["cart"])) {
                      echo 0;
                  }else {
                      echo count($_SESSION["cart"]);
                  }
              }
              
           ?>
      </span></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>