
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>assets/img/mini.png" />
  <title>iSEKPER</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">  
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/AdminLTE.min.css">         
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/iCheck/all.css">
  <link rel="icon" href="<?php echo base_url('assets/img/favicon.ico') ?>" type="image/x-icon">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
  <img src="<?php echo base_url('assets/img/bgnew.png') ?>" style="position: absolute;width: 100%;height: 100%;" alt="">
  <div class="login-box" style="position: absolute; margin-left: 39%; margin-top: 222px;">
    <div class="login-logo">
      <img src="<?php echo base_url('assets/img/newlogo2.png') ?>" style="width: 300px" alt="">
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg"></p>

      <form method="post" action="<?php echo site_url();?>index.php/login/">
        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email" id="email" name="in_mail">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" id="password" name="in_password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row"> 
          <!-- /.col -->
          <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button> 
            <!-- <a href="<?php echo site_url() ?>index.php/login/" class="btn btn-primary btn-block btn-flat"> Sign In </a> -->
          </div>
          <!-- /.col -->
        </div>
      </form>


      <!-- /.social-auth-links -->
      <!-- <a data-toogle="modal" id="myModalForgot"  href="#myModalForgot">Forgot Password</a> -->
      <button type="button" class="btn btn-link
      " data-toggle="modal" data-target="#myModalForgot" >Forgot Password</button>

    </div>
    <!-- /.login-box-body -->
  </div> 


  <div class="modal" id="myModalForgot" role="dialog" data-backdrop="static">
    <div class="modal-dialog">


      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Forgot Password</h4>
        </div>
        <div class="modal-body">
         <div class="form-group">
           <label for="text">Username</label>
           <input type="text" class="form-control"id="text" placeholder="Masukkan Username..">
         </div>
         <div class="form-group">
          <label for="text">NIP</label>
          <input type="text" class="form-control" id="text" placeholder="Masukkan NIP..">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Email..">
        </div>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-refresh"> Reset</i></button>
        <button type="button" class="btn btn-success" data-dismiss="modal" ><i class="fa fa-save"> Simpan</i></button>
      </div>
    </div>

  </div>
</div>
<!-- /.login-box -->
<!-- jQuery 2.2.3 -->

<!-- <script src="<?php echo base_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script> -->
<script src="<?php echo base_url()?>assets/plugins/jQuery/jquery321.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url()?>assets/plugins/iCheck/icheck.min.js"></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
          });
  });





</script>
</body>
</html>
