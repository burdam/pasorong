<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("/admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">
		<?php $this->load->view("/admin/_partials/sidebar.php") ?>

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">
				<?php $this->load->view("/admin/_partials/topbar.php") ?>

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<div class="container-fluid">

						<div class="row mt-8">

							<div class="col-md-12">
								<h1 class="h6 font-weight-bold text-success">SIZKA - Sistem Informasi Izin Keluar Kantor</h1>

								<!-- DataTales Example -->
								<div class="card shadow mb-4">

									<div class="card-header py-3">
										<h1 class="h6 m-0 font-weight-bold text-success">Dashboard</h1>
									</div>

									<div class="card-body">

										<h1 class="h3 mb-4 font-weight-bold text-success">Selamat Datang!</h1>

										<!-- Collapsable Card Example -->
										<div class="card shadow mb-4">
											<!-- Card Header - Accordion -->
											<a href="#collapseCardExample1" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
												<h6 class="m-0 font-weight-bold text-success">Informasi</h6>
											</a>
											<!-- Card Content - Collapse -->
											<div class="collapse show" id="collapseCardExample1">
												<div class="card-body">

												</div>
											</div>
										</div>

										<!-- Collapsable Card Example -->
										<div class="card shadow mb-4">
											<!-- Card Header - Accordion -->
											<a href="#collapseCardExample2" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
												<h6 class="m-0 font-weight-bold text-success">Pengumuman</h6>
											</a>
											<!-- Card Content - Collapse -->
											<div class="collapse show" id="collapseCardExample2">
												<div class="card-body">

												</div>
											</div>
										</div>

										<!-- Collapsable Card Example -->
										<div class="card shadow mb-4">
											<!-- Card Header - Accordion -->
											<a href="#collapseCardExample3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
												<h6 class="m-0 font-weight-bold text-success">Panduan</h6>
											</a>
											<!-- Card Content - Collapse -->
											<div class="collapse show" id="collapseCardExample3">
												<div class="card-body">

												</div>
											</div>
										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>
				<!-- /.container-fluid -->
			</div>
			<!-- End of Main Content -->
			<?php $this->load->view("/admin/_partials/footer.php") ?>
		</div>
		<!-- End of Content Wrapper -->
	</div>
	<!-- End of Page Wrapper -->
	<?php $this->load->view("/admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("/admin/_partials/modal.php") ?>
	<?php $this->load->view("/admin/_partials/js.php") ?>
</body>

</html>