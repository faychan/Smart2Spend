<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title> LOGIN || REGISTER</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/reset.min.css">
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
</head>
<body>
    <div class="pen-title" style="margin-top: 20px">
    <h1>LOGIN || REGISTER</h1><span>Pen <i class='fa fa-paint-brush'></i> + <i class='fa fa-code'></i> by <a href=''>Telkom Barokah</a></span>
    <?php 
        if(!empty($notif)){
            echo '<div style="padding: 5px; border: 1px solid transparent; border-radius: 4px;color: #a94442; background-color: #f2dede; border-color: #ebccd1; width:500px; display:block; margin:0px auto;margin-top:20px; margin-bottom:20px">';
            echo $notif;
            echo '</div>';
        }
        if(!empty($announce)){
            echo '<div class="alert alert-warning">';
            echo $announce;
            echo '</div>';
        }
    ?>
    </div>
    <!-- Form Module-->
    <div class="module form-module" style="margin-top:50px;margin-bottom: 100px; border-color: blue">
        <div class="toggle"><i class="fa fa-times fa-pencil"></i>
            <div class="tooltip">Click Me</div>
        </div>
        <div class="form">
            <h2>Login to your account</h2>
            <form method="post" action="<?php echo base_url(); ?>index.php/login/login">
                <input name="username" type="text" placeholder="Username"/>
                <input name="password" type="password" placeholder="Password"/>
                <input type="submit" name="log"/>
            </form>
        </div>
        <div class="form">
            <h2>Membuat Akun Baru</h2>
            <form method="post" action="<?php echo base_url(); ?>index.php/reg/reg">
                <input name="username" type="text" placeholder="Username"/>
                <input name="password" type="password" placeholder="Kata Sandi"/>
                <input name="email" type="email" placeholder="Alamat Email"/>
                <input style="margin:0px auto;" type="radio" name="is_parent" value="1"> Orangtua
                <input style="margin:0px auto;" type="radio" name="is_parent" value="0">Anak
                <input type="submit" name="reg" value="Daftar">
            </form>
        </div>
        
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://codepen.io/andytran/pen/vLmRVp.js'></script>
    <script src="<?php echo base_url(); ?>/assets/js/index.js"></script>
</body>
</html>