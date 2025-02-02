<?php include('h.php');?>
<body class="hold-transition skin-purple sidebar-mini">
  <div class="wrapper">
    <?php include('menutop.php');?>
    
        <?php include('menu_l.php');?>
      
    <div class="content-wrapper">
      <section class="content-header">
      <h1>
        <i class=""></i> <span class="hidden-xs">ข้อมูลรายการสั่งซื้อ</span>
        </h1>
        
      </section>
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="row">
                <div class="col-sm-12">
                  <div class="box-body">
                    <?php
                  $act = (isset($_GET['act']) ? $_GET['act'] : '');
                  if($act == 'add'){
                  include('bank_form_add.php');
                  }elseif ($act == 'edit') {
                  include('bank_form_edit.php');
                  }else {
                  include('basket_list.php');
                  }
                  ?>                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </body>
  </html>
  <?php include('footerjs.php');?>