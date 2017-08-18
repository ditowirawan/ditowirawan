
<?php
  $this->load->library('session');
  if(!$this->session->has_userdata('pengguna')){
    $this->template->load('login','login');
  }else{
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>assets/img/mini.png" />
  <title>iSEKPER</title>  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">  
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/AdminLTE.min.css">         
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/skins/_all-skins.min.css">
  <link rel="icon" href="<?php echo base_url('assets/img/favicon.ico') ?>" type="image/x-icon">

  <link rel="stylesheet" href="<?php echo base_url ('assets/plugins/iCheck/all.css')?>">
  <link rel="stylesheet" href="<?php echo base_url ('assets/plugins/select2/select2.min.css')?>">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url ('assets/plugins/daterangepicker/daterangepicker.css')?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url ('assets/plugins/datepicker/datepicker3.css')?>">

  <link rel="stylesheet" href="<?php echo base_url ('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')?>">
  <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fullcalendar/fullcalendar.print.css" media="print">


</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">    
      <a href="#" class="logo">      
        <span class="logo-mini" >
          <img src="<?php echo base_url('assets/img/mini2.png') ?> " style="height: 20px"/>
        </span>     
        <span class="logo-lg" style="color:white"><b>i</b>SEKPER</span>
      </a>    
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url('assets/img/male-user-baru.png') ?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $_SESSION['pengguna'];?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo base_url('assets/img/male-user-baru.png') ?>" class="img-circle" alt="User Image">

                  <p>
                    <?php
                      echo $_SESSION['pengguna'];
                    ?>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <button type="button" class="btn btn-default btn-flat" data-toggle="modal" data-target="#myModalReset">Ganti Password</button>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo site_url();?>index.php/login/keluar" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>

          </ul>
        </div>
      </nav>

    </header>

    <!-- =============================================== -->

    <aside class="main-sidebar">    
      <section class="sidebar">

        <ul class="sidebar-menu">
          <li class="header">MENU</li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url() ?>index.php/admin"><i class=""></i> Dashboard Event</a></li>
<!--               <li><a href="<?php echo base_url() ?>index.php/admin/map"><i class=""></i> Dashboard Maps</a></li> -->
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Master</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url() ?>index.php/masteruser/"><i class=""></i> Master User</a></li>
              <li><a href="<?php echo base_url() ?>index.php/admin/lokasi_rapat"><i class=""></i> Master Lokasi Rapat </a></li>
              <li><a href="<?php echo base_url() ?>index.php/admin/ruang_rapat""><i class=""></i> Master Ruang Rapat</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-laptop"></i>
              <span>Manajemen Rapat</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url() ?>index.php/admin/reservasi_agenda_ruang_rapat"><i class=""></i> Reservasi & Agenda Rapat</a></li>
              <li><a href="<?php echo base_url() ?>index.php/admin/undangan_rapat"></i> Undangan Rapat </a></li>
              <li><a href="<?php echo base_url() ?>index.php/admin/pelaksanaan_rapat"><i class=""></i> Pelaksanaan Rapat </a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i> <span>Monitoring Rapat</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class=""></i> Monitoring Jadwal Rapat</a></li>
              <li><a href="#"><i class=""></i> Monitoring Event</a></li>
            </ul>
          </li><!-- 
          <li class="treeview">
            <a href="#">
              <i class="fa fa-table"></i> <span>User Management</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class=""></i> User</a></li>
              <li><a href="#"><i class=""></i> Reset Password</a></li>
            </ul>
          </li> -->
        </ul>
      </section>    
    </aside>


    <div class="content-wrapper">    

      <section class="content">

        <?php echo $contents; ?>  

      </section>    
    </div>  

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
      </div>
      <strong>Copyright &copy; 2017 <a href="http://www.iconpln.net.id">PT INDONESIA COMNETS PLUS </a>.</strong> All rights
      reserved.
    </footer>
    <div class="control-sidebar-bg"></div>
  </div>


  <!-- <script src="http://code.jquery.com/jquery-1.12.4.js"></script> -->
  <script src="<?php echo base_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>

  <script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>assets/plugins/select2/select2.full.min.js"></script>
  <script src="<?php echo base_url()?>assets/plugins/fastclick/fastclick.js"></script>
  <script src="<?php echo base_url()?>assets/js/app.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/demo.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
  <script src="<?php echo base_url()?>assets/plugins/fullcalendar/fullcalendar.min.js"></script>
  <script src="<?php echo base_url()?>assets/plugins/daterangepicker/daterangepicker.js"></script>
  <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
  <script src="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>


 
  <!-- <script>//iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
      azaaaaaaaaaaaaaa
    </script> -->
    <script>
      $(function () {
        $(".select2").select2();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
            // "scrollX":true
          });
        $("#example3").DataTable({
          "scrollX": true
        });
      });

    </script>
    <script>
      $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
<script>
      $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor2');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>


</body>
</html>


<!-- Modal -->
<div class="modal fade" id="myModalReset" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ganti Password</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan email..">
        </div>
        <div class="form-group">
          <label for="text">Password Lama</label>
          <input type="text" class="form-control" id="text" placeholder="Masukkan Password Lama..">
        </div>
        <div class="form-group">
          <label for="text">Password Baru</label>
          <input type="text" class="form-control" id="text" placeholder="Masukkan Password Baru..">
        </div>
        <div class="form-group">
          <label for="text">Konfirmasi Password</label>
          <input type="text" class="form-control" id="text" placeholder="Masukkan Konfirmasi Password Baru..">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger"><i class="fa fa-refresh" ></i> Reset</button>
        <button type="button" class="btn btn-primary"><i class="fa fa-save" ></i> Simpan</button></div>
      </div>
    </div>

  </div>


<?php
}
?>


