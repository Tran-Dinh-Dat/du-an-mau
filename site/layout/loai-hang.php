<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../content/css/style.css">
    </head>
    <body>
        <div>
            <div class="panel panel-info al">
                <div class="panel-heading title-collapse">
                    <h3><span>Danh mục</span><button type="button" class="btn btn-info glyphicon glyphicon-th-list" data-toggle="collapse" data-target="#danh-muc">
                    </button></h3> 
                </div>
                <div id="danh-muc" class="collapse in">
                 <div class="panel panel-default">
                     <ul class="list-group">
                        <?php
                            require '../../dao/loai.php';
                            $loai_array = loai_select_all();
                            foreach ($loai_array as $loai) {
                                $href = "$SITE_URL/hang-hoa/liet-ke.php?ma_loai=$loai[ma_loai]";
                                echo "
                                    <li class='list-group-item'> 
                                        <a href='$href'>$loai[ten_loai]</a>
                                    </li>      
                                ";
                            }
                        ?>
                        <form action="<?=$ROOT_URL?>/site/chitiet/index.php" method="POST" role="form">
                           <div class="form-group ">
                               <input type="text" name="keywords" class="form-control" id="" placeholder="Từ khóa tìm kiếm">
                           </div>
                        </form> 
                        </ul>
                    </div>
                </div>
            <div>
                              
            </div>
            </div>            
        </div>
    </body>
</html>
