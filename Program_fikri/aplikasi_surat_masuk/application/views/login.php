<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Aplikasi Surat</title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('template/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('template/');?>css/sb-admin-2.min.css" rel="stylesheet">

</head><body class="bg-light" background="assets/12345.jpg" style="-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-: cover;">
<body class="bg-gradient-info"
    style=" background-image: url('https://s.yimg.com/ny/api/res/1.2/2i1rhgt65ns1LfQQP9T1YA--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MA--/https://media.zenfs.com/ID/liputan6_hosted_772/163775bbb94da76f14f62100c404948c')">
	<div class="container">

		<!-- Outer Row -->
		<div class="row justify-content-center">

			<div class="col-xl-6 col-lg-12 col-md-9">

				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col-lg-12">
								<div class="p-5">
									<div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
										
                                    </div>
									<br>
										<!-- <img class="profile-img" src="template/img/smknu.png" alt="" width="150px"> -->
										<!-- <br>
										<br> -->
										<form class="user" action="<?= base_url('Login/proses_login') ?>" method="POST">
											<div class="form-group">
												<input type="text" class="form-control form-control-user"
													id="exampleInputEmail" aria-describedby="emailHelp"
													placeholder="Username" name="username" required>
											</div>
											<div class="form-group">
												<input type="password" class="form-control form-control-user"
													id="exampleInputPassword" placeholder="Password" name="password" required>
											</div>
											<a href="<?= base_url('Beranda/beranda')?>"><button class="btn btn-dark btn-user btn-block">
												Login
											</button></a>
										</form>
										<br>
										
										
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>

		</div>

		<!-- Bootstrap core JavaScript-->
		<script src="<?= base_url('template/');?>vendor/jquery/jquery.min.js"></script>
		<script src="<?= base_url('template/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Core plugin JavaScript-->
		<script src="<?= base_url('template/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

		<!-- Custom scripts for all pages-->
		<script src="<?= base_url('template/');?>js/sb-admin-2.min.js"></script>

</body>

</html>
