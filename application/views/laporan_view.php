<!DOCTYPE html>
<html>
	<head>
		<title>LAPORAN TRANSAKSI</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap2.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style2.css">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
		<div class="container" style="margin-top:100px; max-width: 800px">
		<br>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
				  	<div class="panel panel-info" style="border-color:#F8BBD0">
						<div class="panel-heading" style="background-color:#ffcdd2;border-color:#F8BBD0;color:#6D4C41">Transaksi</div>
				    	<div class="panel-body" style="border-color:#F8BBD0">
							<table border="0" cellpadding="4" cellspacing="0" class="datatable table table striped table-bordered">
								<tr>
									<th>Tanggal</th>
									<th>Tipe Transaksi</th>
									<th>Jumlah</th>
									<th>Keterangan</th>
								</tr>
								<?php 
									foreach ($users as $data) {
										$type = "";
										$sty = "";
										if($data->type == "incoming"){
											$type ="Pemasukan";
											$sty = "background-color:rgba(46, 204, 113,0.5)";
										}else{
											$type = "Pengeluaran";
											$sty = "background-color:rgba(231, 76, 60,0.5)";
										}
										$a = "a";
										echo '
											<tr style="'.$sty.'">
												<td>'.$data->date.' </td>
												<td>'.$type.' </td>
												<td>'.number_format($data->amount).' </td>
												<td>'.$data->detail.' </td>
											</tr>
										';
									}
								?>
							</table>
						</div>
					</div>
				</div>
			</div>
		<br>
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