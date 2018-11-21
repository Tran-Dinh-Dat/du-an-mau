<?php 
	if (isset($_SESSION{'success'})):?>
<!-- 	Thanh toán thành công!! -->

<button type="button"  id="btn_open" class="btn btn-info btn-lg" style="display: none" data-toggle="modal" data-target="#myModal" >Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" onclick="window.location = 'thong-bao.php'">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" onclick="window.location = 'thong-bao.php'"><i class="fas fa-window-close"></i></button>
          <h4 class="modal-title">Tình trạng đơn hàng</h4>
        </div>
        <div class="modal-body" >
          <?php echo "<h3 style='text-align:center; color:red'>".$_SESSION['success']."</h3>";?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" id="btn_continue" data-dismiss="modal">Ok</button>
        </div>
      </div>
      
    </div>
  </div>
  <?php  unset($_SESSION['success']); unset($_SESSION['cart']); ?>
  <?php else: echo "<h3 class='text-center text-danger'>Đã xác nhận mua hàng ! </h3> 
  <button type='button' class='btn btn-default'><a href='../hang-hoa/liet-ke.php'>Quay lại mua hàng</a></button>"; ?>
<?php  endif;?>
  <script type="text/javascript">

    // $(document).ready(function(){
    //   _goiModal();

    //   function _goiModal(){
    //     $("#btn_open").trigger('click');
    //   }

    //   $("#btn_continue").click(function(){
    //     console.log('nhan nut ori')
    //     _goto("../hang-hoa/liet-ke.php")
    //   })


    //   function _goto(url){
    //       window.location = url;
    //   }

    // })

     $(window).load(function(){        
   $('#myModal').modal('show');
    }); 

  </script>
