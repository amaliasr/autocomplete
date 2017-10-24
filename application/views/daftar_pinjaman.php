<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Kategori</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/datatables.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script language="javascript">
		function buka_popup(){
			window.open('kategori/create', '', 'width=640, height=480, menubar=yes,location=yes,scrollbars=yes, resizeable=yes, status=yes, copyhistory=no,toolbar=no');

		}
		
		function CloseWindow() {
		    window.close();
		    window.opener.location.reload();
		 }
		</script>
	</head>
	<body onLoad="buka_popup();">
	
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="navbar">
								<div class="container-fluid">
									<a class="navbar-brand" href="#">Title</a>
									<ul class="nav navbar-nav">
										<li class="active">
											<a href="#">Home</a>
										</li>
										<li>
											<a href="#">Link</a>
										</li>
									</ul>
								</div>
							</div>
			  <ul class="nav nav-tabs" align="center">
			    <li role="presentation" class="active"><a href="<?php echo site_url()?>/pegawai"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Kategori</a></li>
			        <form class="navbar-form navbar-right" >
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Search">
			        </div>
			        <button type="submit" class="btn btn-default">Submit</button>
			        </form>
			  </ul><!-- /.navbar-collapse --></div>


					</div>
					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
							
						</div>	
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center">
						<h1>Kategori	<a href="javascript: buka_popup();" type="button" class="btn btn-danger">Daftar </a> </h1><br><br>
						<div class="table-responsive" align="center">
							<table class="table table-hover" align="center" id="example">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($kategori_list as $key) { ?>
									<tr>
										<td><?php echo $key->nama ?></td>
										<td>
											<a href="<?php echo site_url('kategori/update/').$key->id ?>" type="button" class="btn btn-info">Edit</a>
											<a href="<?php echo site_url('kategori/delete/').$key->id ?>" onclick="return confirm('Hapus Data?')" type="button" class="btn btn-success">Delete</a>
										</td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url('') ?>assets/datatables.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function()
				{
					$('#example').DataTable();
				});
		</script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>