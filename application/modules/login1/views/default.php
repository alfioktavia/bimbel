<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Responsive Login Form</title>
  
  
  <link rel='stylesheet prefetch' href= "<?= base_url('asset/login/http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css');?>" >

      <link rel="stylesheet" href= "<?= base_url('asset/login/css/style.css');?>" >

  
</head>

<body>

  <link href= "<?= base_url('asset/login/https://fonts.googleapis.com/css?family=Ubuntu:500') ?>" rel='stylesheet' type='text/css'>

<div class="login">
  <div class="login-header">
    <h1>Login</h1>
  </div>
  <?= form_open('login1/auth'); ?>
  <div class="login-form">
    <h3>Username:</h3>
    <input type="text" name="username" class="form-control" placeholder="Username" value="<?= set_value('username'); ?>">
    <br>
    <h3>Password:</h3>
    <input type="password" name="password" class="form-control" placeholder="Password" value="<?= set_value('password'); ?>">
    <br>
    <input type="submit" value="Login" class="login-button"/>
    <br>
       <?= form_close(); ?>
    <a class="sign-up">Sign Up!</a>
    <br>
    <h6 class="no-access">Can't access your account?</h6>
  </div>
</div>
<div class="error-page">
  <div class="try-again">Error: Try again?</div>
</div>
  <script src="<?= base_url('asset/login/http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'); ?>"></script>
<script src="<?= base_url('asset/login/http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'); ?>"></script>

  

    <script  src="<?= base_url('asset/login/js/index.js'); ?>"></script>




</body>

</html>
