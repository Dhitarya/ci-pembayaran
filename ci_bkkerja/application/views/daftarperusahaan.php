<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRM Invoice System</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets2/vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets2/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets2/vendors/nprogress/nprogress.css')?>" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url('assets2/vendors/bootstrap-daterangepicker/daterangepicker.css')?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('assets2/vendors/iCheck/skins/flat/green.css')?>" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url('assets2/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets2/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets2/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets2/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets2/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets2/build/css/custom.min.css')?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <?php $this->load->view('v_leftmenu') ?>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <?php $this->load->view('v_topnav') ?>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <?php $this->load->view('v_widget') ?>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Input Data User<small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form method="POST" action="<?php echo base_url('main/usersimpan') ?>" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namalengkap">Nama Lowongan <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="namalowongan" required="required" class="form-control col-md-7 col-xs-12" name="namalengkap">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Deskripsi Lowongan <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="deskripsilowongan" name="deskripsilowongan" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="date" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Akhir Lowongan 
                          <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tanggalakhirlowongan" class="form-control col-md-7 col-xs-12" type="date" name="tanggalakhirlowongan">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php $this->load->view('v_footer') ?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets2/vendors/jquery/dist/jquery.min.js')?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets2/vendors/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets2/vendors/fastclick/lib/fastclick.js')?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('assets2/vendors/nprogress/nprogress.js')?>"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url('assets2/vendors/Chart.js/dist/Chart.min.js')?>"></script>
    <!-- jQuery Sparklines -->
    <script src="<?php echo base_url('assets2/vendors/jquery-sparkline/dist/jquery.sparkline.min.js')?>"></script>
    <!-- Flot -->
    <script src="<?php echo base_url('assets2/vendors/Flot/jquery.flot.js')?>"></script>
    <script src="<?php echo base_url('assets2/vendors/Flot/jquery.flot.pie.js')?>"></script>
    <script src="<?php echo base_url('assets2/vendors/Flot/jquery.flot.time.js')?>"></script>
    <script src="<?php echo base_url('assets2/vendors/Flot/jquery.flot.stack.js')?>"></script>
    <script src="<?php echo base_url('assets2/vendors/Flot/jquery.flot.resize.js')?>"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url('assets2/vendors/flot.orderbars/js/jquery.flot.orderBars.js')?>"></script>
    <script src="<?php echo base_url('assets2/vendors/flot-spline/js/jquery.flot.spline.min.js')?>"></script>
    <script src="<?php echo base_url('assets2/vendors/flot.curvedlines/curvedLines.js')?>"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url('assets2/vendors/DateJS/build/date.js')?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url('assets2/vendors/moment/min/moment.min.js')?>"></script>
    <script src="<?php echo base_url('assets2/vendors/bootstrap-daterangepicker/daterangepicker.js')?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('assets2/vendors/iCheck/icheck.min.js')?>"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url('assets2/vendors/datatables.net/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets2/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets2/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')?>"></script>
    <script src="<?php echo base_url('assets2/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets2/vendors/datatables.net-buttons/js/buttons.flash.min.js')?>"></script>
    <script src="<?php echo base_url('assets2/vendors/datatables.net-buttons/js/buttons.html5.min.js')?>"></script>
    <script src="<?php echo base_url('assets2/vendors/datatables.net-buttons/js/buttons.print.min.js')?>"></script>
    <script src="<?php echo base_url('assets2/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')?>"></script>
    <script src="<?php echo base_url('assets2/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')?>"></script>
    <script src="<?php echo base_url('assets2/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')?>"></script>
    <script src="<?php echo base_url('assets2/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')?>"></script>
    <script src="<?php echo base_url('assets2/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')?>"></script>
    <script src="<?php echo base_url('assets2/vendors/jszip/dist/jszip.min.js')?>"></script>
    <script src="<?php echo base_url('assets2/vendors/pdfmake/build/pdfmake.min.js')?>"></script>
    <script src="<?php echo base_url('assets2/vendors/pdfmake/build/vfs_fonts.js')?>"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets2/build/js/custom.min.js')?>"></script>
  </body>
</html>