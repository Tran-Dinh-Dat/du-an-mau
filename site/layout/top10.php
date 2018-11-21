<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../content/css/style.css">
    </head>
    <body>
        <div>
            <div class="panel panel-info">
                <div class="panel-heading title-collapse">
                    <h3><span>Top 10</span><button type="button" class="btn btn-info glyphicon glyphicon-th-list" data-toggle="collapse" data-target="#top10">
                    </button></h3>
                </div>
            </div>
                    <div id="top10" class="collapse in">
                     <div class='panel-body'>
                    <?php
                        require_once '../../dao/hang-hoa.php';
                        $hh_array = hang_hoa_select_top10();
                        foreach ($hh_array as $hh) {
                            $href = "$SITE_URL/hang-hoa/chi-tiet.php?ma_hh=$hh[ma_hh]";
                            echo "
                                <div class='row'>
                                    <div class='col-md-4'>
                                        <img class='img-thumbnail img-responsive' src='$CONTENT_URL/images/products/$hh[hinh]'>
                                    </div>
                                    <div class='col-md-8'>
                                        <a href='$href'>$hh[ten_hh]</a>
                                    </div>
                                </div>
                            ";
                        }
                    ?>
                      </div>
                  </div>
        </div>
    </body>
</html>
