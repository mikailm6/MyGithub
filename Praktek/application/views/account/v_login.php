<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kursus IT | Halaman Login</title>
    <link href="<?php echo base_url()?>templates/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>templates/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>templates/vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="<?php echo base_url()?>templates/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="<?php echo base_url()?>templates/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?php
              if($this->session->flashdata('sukses')) {
                echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
              }
            ?>
              <h1>Login</h1>
              <?php echo form_open('login');?>
              <div>
                <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>" />
                <p> <?php echo form_error('username'); ?> </p>
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>" />
                <p> <?php echo form_error('password'); ?> </p>
              </div>
              <div>
                <input type="submit" name="btnSubmit" value="Login" />
              </div>

              <?php echo form_close();?>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Belum punya akun ? Klik 
                  <u><?php echo anchor(site_url().'/register','disini.'); ?></u>
                </p>

                <div class="clearfix"></div>
                <br />

              </div>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
