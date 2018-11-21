<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../../content/css/style.css">
        <style>
        .carousel-inner {
          margin-bottom: 20px;
        }
            .carousel-inner img{
                margin: 0 auto;
                height: 400px !important;

            }

             @import url(https://fonts.googleapis.com/css?family=Lato:400,700,300italic);

body {
  background-color: #f0f0f0;
  font-family: Lato, sans-serif;
}

h1.page-title {
  margin-top: 70px;
  margin-bottom: 70px;
  color: #485a64;
  font-weight: bold;
}

.product-container {
  background-color: #fff;
  height: 390px;
  overflow: hidden;
  position: relative;
  margin-bottom: 20px;
}

.tag-sale {
  background-color: #4fdaa4;
  width: 86px;
  height: 98px;
  position: absolute;
  color: #fff;
  right: -41px;
  z-index: 9;
  top: -44px;
  transform: rotate(137deg);
}

.tag-sale::before {
  content: "SALE";
  color: #fff;
  font-weight: bold;
  display: block;
  transform-origin: top center;
  transform: rotate(222.5deg) translateX(-28px) translateY(-37px);
}

.product-description {
  background-color: #F7F7F7;
  border-top: 1px solid #EFEFEF;
  padding: 10px 20px;
  color: #797979;
}

.product-image {
  padding: 20px;
  height: 323px;
  position: relative;
  overflow: hidden;
  transition: 1s;
}

.product-link {
    position: absolute;
    background: #fff;
    width: 100px;
    height: 100px;
    color: #4FDAA4;
    border-radius: 50%;
    font-size: 18px;
    text-align: center;
    padding: 22px 16px;
    line-height: 50px;
    left: calc(50% - 50px);
    top: calc(50% - 50px);
    opacity: 0;
    transition: 1s;
    font-style: italic;
}

.product-link:hover {
  text-decoration: none;
  color: #4FDAA4;
}


.hover-link {
  background-color: #4FDAA4;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
  width: 100%;
  height: 100%;
  transition: 0.5s;
}

.product-image img {
  width: 100%;
}

.product-description h1 {
  font-size: 20px;
  margin-bottom: 5px;
  margin-top: 0;
  display: inline-block;
  width: 78%;
}

.product-description p {
  color: #C4C4C4;
}

.product-description .price {
  display: inline-block;
  width: 20%;
  font-size: 17px;
  text-align: right;
  font-weight: bold;
  color: #2DD493;
  margin-bottom: 5px;
}

.product-option {
  border-top: 1px solid #D2D2D2;
}

.product-option h3 {
  font-size: 16px;
  font-weight: bold;
  margin-bottom: 3px;
}

.product-option .product-color ul {
  list-style-type: none;
  padding: 0;
}

.product-option .product-color li {
  display: inline-block;
  width: 15px;
  height: 15px;
}

.product-color li.red {
  background-color: #F75375;
}
.product-color li.blue {
  background-color: #53A0F7;
}
.product-color li.green {
  background-color: #59CFAF;
}
.product-color li.gray {
  background-color: #C7C7C7;
}
.product-color li.black {
  background-color: #4E5156;
}
.product-color li.dark-blue {
  background-color: #2060AF;
}

.product-container:hover {
  box-shadow: 0px 10px 25px -2px rgba(0,0,0,0.36);
}

.product-container:hover .product-image {
  height: 180px;
  transition: 1s;
}
.product-container:hover .product-option {
  display: block;
}
.product-container:hover .hover-link {
  opacity: 0.5;
}
.product-container:hover .product-link {
  opacity: 1;
}

.product-link:hover {
  -webkit-animation: hovering 1000ms linear both;
  animation: hovering 1000ms linear both;
}

@-webkit-keyframes hovering {
  0% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  2.3% { -webkit-transform: matrix3d(1.102, 0, 0, 0, 0, 1.102, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.102, 0, 0, 0, 0, 1.102, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  4.6% { -webkit-transform: matrix3d(1.136, 0, 0, 0, 0, 1.136, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.136, 0, 0, 0, 0, 1.136, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  7.41% { -webkit-transform: matrix3d(1.099, 0, 0, 0, 0, 1.099, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.099, 0, 0, 0, 0, 1.099, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  10.21% { -webkit-transform: matrix3d(1.023, 0, 0, 0, 0, 1.023, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.023, 0, 0, 0, 0, 1.023, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  13.01% { -webkit-transform: matrix3d(0.962, 0, 0, 0, 0, 0.962, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.962, 0, 0, 0, 0, 0.962, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  15.72% { -webkit-transform: matrix3d(0.942, 0, 0, 0, 0, 0.942, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.942, 0, 0, 0, 0, 0.942, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  18.52% { -webkit-transform: matrix3d(0.958, 0, 0, 0, 0, 0.958, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.958, 0, 0, 0, 0, 0.958, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  21.32% { -webkit-transform: matrix3d(0.99, 0, 0, 0, 0, 0.99, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.99, 0, 0, 0, 0, 0.99, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  24.12% { -webkit-transform: matrix3d(1.016, 0, 0, 0, 0, 1.016, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.016, 0, 0, 0, 0, 1.016, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  26.83% { -webkit-transform: matrix3d(1.025, 0, 0, 0, 0, 1.025, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.025, 0, 0, 0, 0, 1.025, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  32.43% { -webkit-transform: matrix3d(1.004, 0, 0, 0, 0, 1.004, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.004, 0, 0, 0, 0, 1.004, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  38.04% { -webkit-transform: matrix3d(0.989, 0, 0, 0, 0, 0.989, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.989, 0, 0, 0, 0, 0.989, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  49.15% { -webkit-transform: matrix3d(1.005, 0, 0, 0, 0, 1.005, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.005, 0, 0, 0, 0, 1.005, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  60.26% { -webkit-transform: matrix3d(0.998, 0, 0, 0, 0, 0.998, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.998, 0, 0, 0, 0, 0.998, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  71.37% { -webkit-transform: matrix3d(1.001, 0, 0, 0, 0, 1.001, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.001, 0, 0, 0, 0, 1.001, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  82.48% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  93.59% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  100% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
}

@keyframes hovering {
  0% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  2.3% { -webkit-transform: matrix3d(1.102, 0, 0, 0, 0, 1.102, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.102, 0, 0, 0, 0, 1.102, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  4.6% { -webkit-transform: matrix3d(1.136, 0, 0, 0, 0, 1.136, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.136, 0, 0, 0, 0, 1.136, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  7.41% { -webkit-transform: matrix3d(1.099, 0, 0, 0, 0, 1.099, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.099, 0, 0, 0, 0, 1.099, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  10.21% { -webkit-transform: matrix3d(1.023, 0, 0, 0, 0, 1.023, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.023, 0, 0, 0, 0, 1.023, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  13.01% { -webkit-transform: matrix3d(0.962, 0, 0, 0, 0, 0.962, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.962, 0, 0, 0, 0, 0.962, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  15.72% { -webkit-transform: matrix3d(0.942, 0, 0, 0, 0, 0.942, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.942, 0, 0, 0, 0, 0.942, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  18.52% { -webkit-transform: matrix3d(0.958, 0, 0, 0, 0, 0.958, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.958, 0, 0, 0, 0, 0.958, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  21.32% { -webkit-transform: matrix3d(0.99, 0, 0, 0, 0, 0.99, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.99, 0, 0, 0, 0, 0.99, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  24.12% { -webkit-transform: matrix3d(1.016, 0, 0, 0, 0, 1.016, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.016, 0, 0, 0, 0, 1.016, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  26.83% { -webkit-transform: matrix3d(1.025, 0, 0, 0, 0, 1.025, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.025, 0, 0, 0, 0, 1.025, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  32.43% { -webkit-transform: matrix3d(1.004, 0, 0, 0, 0, 1.004, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.004, 0, 0, 0, 0, 1.004, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  38.04% { -webkit-transform: matrix3d(0.989, 0, 0, 0, 0, 0.989, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.989, 0, 0, 0, 0, 0.989, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  49.15% { -webkit-transform: matrix3d(1.005, 0, 0, 0, 0, 1.005, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.005, 0, 0, 0, 0, 1.005, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  60.26% { -webkit-transform: matrix3d(0.998, 0, 0, 0, 0, 0.998, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.998, 0, 0, 0, 0, 0.998, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  71.37% { -webkit-transform: matrix3d(1.001, 0, 0, 0, 0, 1.001, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.001, 0, 0, 0, 0, 1.001, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  82.48% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  93.59% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  100% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
}
        </style>
    </head>
    <body>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <?php
                    for ($i = 1;$i < count($items); $i++) {
                        echo "<li data-target='#myCarousel' data-slide-to='$i'></li>";
                    }
                ?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner text-center">
                <?php
                    $active = " active";
                    foreach ($items as $item) {
                ?>
                    <div class="item<?=$active?>">
                    
                        <a href="../hang-hoa/chi-tiet.php?ma_hh=<?=$item['ma_hh']?>">
                            <img src="<?=$CONTENT_URL?>/images/products/<?=$item['hinh']?>"/>
                        </a>
                        <div class="carousel-caption" >
                            <h3 class="text-danger"><?=number_format($item['don_gia'] , 0)?></h3>
                            <p class="text-info"><?=$item['ten_hh']?></p>
                        </div>
                    </div>                
                <?php
                    $active = "";
                    }
                ?>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- end slideshow -->
 
    
        <!-- Hiển thị tất cả sản phẩm vào index -->
                 <div>
        <?php
            foreach ($items as $item) {
                extract($item);
        ?>
            <div>
                <div class="col-md-4">
        <div class="product-container">
          <div class="tag-sale">

          </div>
          <div class="product-image">
            <span class="hover-link"></span>
            <a href="../cart/add.php?id=<?=$ma_hh?>" class="product-link">Add Cart</a>
            <img class="img-responsive" src="<?=$CONTENT_URL?>/images/products/<?=$hinh?>" alt="">
          </div>
          <div class="product-description">
            <div class="product-label">
              <div class="product-name">
                <a href="../hang-hoa/chi-tiet.php?ma_hh=<?=$ma_hh?>"><h1><?=$ten_hh?></h1></a>
                <p class="price"><?=number_format($don_gia, 0)?> đ</p>
              </div>
            </div>
            <div class="product-option">
              <div class="product-size">
                <h3>Sizes</h3>
                <p>XS,S,M,L,XL,XXL</p>
              </div>
              <div class="product-color">
                <h3>Colors</h3>
                <ul>
                  <li class="red"></li>
                  <li class="blue"></li>
                  <li class="green"></li>
                  <li class="gray"></li>
                  <li class="black"></li>
                  <li class="dark-blue"></li>
                </ul>
              </div>

            </div>
          </div>
        </div>
      </div>
            </div>

        <?php
            }
        ?>
        </div>
    </body>
   
</html> 
