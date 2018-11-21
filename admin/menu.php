

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
        <li><a href="<?=$ADMIN_URL?>/loai-hang/">Loại hàng</a></li>
        <li><a href="<?=$ADMIN_URL?>/hang-hoa/">Hàng hóa</a></li>
        <li><a href="<?=$ADMIN_URL?>/khach-hang/">Khách hàng</a></li>
        <li><a href="<?=$ADMIN_URL?>/binh-luan/">Bình luận</a></li>
        <li><a href="<?=$ADMIN_URL?>/thong-ke/">Thống kê</a></li>
        <li><a href="<?=$ADMIN_URL?>/don-hang/">Đơn hàng</a></li>
      </ul>
  
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tiếng viêt <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Tiếng Anh</a></li>
            <li><a href="#">Tiếng Trung</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
