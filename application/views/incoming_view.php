<!DOCTYPE html>
<html>
	<head>
		<title>INCOMING TRANSACTION</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap2.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style2.css">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap2.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style2.css">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/reset.min.css">
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">

	    <title>SMART2SPEND</title>
	    <!--  -->		
	    <!-- Font Awesome -->
	    <link href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
	    <!-- Bootstrap -->
	    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	    <!-- Camera -->
	    <link href="<?php echo base_url(); ?>/assets/css/camera.css" rel="stylesheet">
	    <!-- Template  -->
	    <link href="<?php echo base_url(); ?>/assets/css/index_style.css" rel="stylesheet">
	</head>
	<body>
<!-- HEADER -->
	<div class="container_wapper">
    <div id="templatemo_banner_menu">
        <div class="container-fluid">
            <div class="col-xs-4 templatemo_logo">
            	<a href="#">
                	<img src="<?php echo base_url(); ?>/assets/images/favicon.png" id="logo_img" alt="S2S" title="SMART2SPEND"  style="height:100px"/>
                	<h1 id="logo_text">SMART2SPEND</h1>
                </a>
            </div>
            <div class="col-sm-8 hidden-xs">
                <ul class="nav nav-justified">
                    <li><a href="<?php  echo base_url() ?>/index.php/laporan">Laporan</a></li>
                    <li><a href="<?php echo base_url() ?>index.php/profile"> &nbsp; Profile</a></li>
                    <li><a href="<?php  echo base_url() ?>/index.php/incoming">Penyetoran || Penarikan</a></li>
                    <li><a href="<?php  echo base_url() ?>/index.php/login/logout">Logout</a></li>
                 </ul>
            </div>
            <div class="col-xs-8 visible-xs">
                <a href="#" id="mobile_menu"><span class="glyphicon glyphicon-th-list"></span></a>
            </div>
        </div>
    </div>
</div>
<?php 
        if(!empty($notif)){
            echo '<div style="padding: 5px; border: 1px solid transparent; border-radius: 4px;color: #a94442; background-color: #f2dede; border-color: #ebccd1; width:500px; display:block; margin:0px auto;margin-top:100px; margin-bottom:0px">';
            echo $notif;
            echo '</div>';
        }
    ?>
		<div class="module form-module" style="margin-top:50px;margin-bottom: 100px;">
        <div class="toggle"><i class="fa fa-times fa-pencil"></i>
            <!-- <div class="tooltip">Click Me</div> -->
        </div>
        <div class="form">
            <h2>Penyetoran || Penarikan</h2>
            <form method="post" action="<?php echo base_url(); ?>index.php/incoming/send">
                <input name="user_id" type="text" placeholder="Username"/>
                <input name="child_id" type="text" placeholder="
                ID anak"/>
                <input name="amount" type="int" placeholder="Jumlah"/>
                <input name="detail" type="text" placeholder="Detail"/>
                <input name="picture" type="text" placeholder="URL Gambar"/>
                <select style="margin-bottom: 20px;">
                      <option value="incoming">Penyetoran</option>
                      <option value="outgoing">Penarikan</option>
                </select>
                <input type="submit" name="send"/>
            </form>
        </div>
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://codepen.io/andytran/pen/vLmRVp.js'></script>
    <script src="<?php echo base_url(); ?>/assets/js/index.js"></script>
</body>
</html>
		</div>
<!-- FOOTER -->
<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
				<div id="footer">
					&copy; 2017.TELKOM BAROKAH
				</div>
			</div>
		</div>
	</body>
</html>