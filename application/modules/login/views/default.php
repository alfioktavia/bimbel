<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GIS TAMBANG</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href= "<?= base_url('asset/plugins/bootstrap/dist/css/bootstrap.min.css');?>" >
  <link rel="stylesheet" href= "<?= base_url('asset/plugins/font-awesome/css/font-awesome.min.css');?>" >
  <link rel="stylesheet" href= "<?= base_url('asset/plugins/Ionicons/css/ionicons.min.css'); ?>" >
  <link rel="stylesheet" href= "<?= base_url('asset/dist/css/AdminLTE.min.css'); ?>" >
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>.login-page{background-image: black !important; background-repeat: no-repeat; background-attachment: fixed; background-position: center; background-size: cover;}</style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  
  <!-- /.login-logo -->

  <div class="login-box-body">
    <div class="login-logo">
    <a href="#"><b>SELAMAT DATANG DI</b><br>SI BIMBEL</a>
  </div>
    <p class="login-box-msg"></p>
    <?php if($this->session->flashdata('flashconfirm')): ?>
    <div class="alert alert-success alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <?php echo $this->session->flashdata('flashconfirm'); ?>
    </div>
    <?php endif; ?>
    <?php if($this->session->flashdata('flasherror')): ?>
    <div class="alert alert-warning alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <?php echo $this->session->flashdata('flasherror'); ?>
    </div>
    <?php endif; ?>

    <?= form_open('login/auth'); ?>
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username" value="<?= set_value('username'); ?>">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" value="<?= set_value('password'); ?>">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Ingatkan Saya
            </label>
          </div>
        </div> -->

        <div class="col-xs-12">
          <button type="submit" class="btn btn-success btn-block btn-flat"><i class="fa fa-sign-in"></i> Login</button>
        </div>
        <!-- /.col -->
      </div>
    <?= form_close(); ?>

    <!-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div> -->
    <!-- /.social-auth-links -->
    <br>
    <a href="">Kembali ke web</a><br>
    <!-- <a href="#" class="text-center">Register a new membership</a> -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?= base_url('asset/plugins/jquery/dist/jquery.min.js'); ?>"></script>
<script src="<?= base_url('asset/plugins/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
</body>
</html>
