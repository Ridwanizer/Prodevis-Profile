<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800"><?=$title; ?></h1>
	<div class="card-body">
		<?= $this->session->flashdata('message'); ?>
		<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
			href="<?= base_url("Admin/Auth_password"); ?>" method="post">
			<div class="form-group">
				<label for="password_lama" class="control-label col-md col-sm col-xs-12">Password Lama</label>
				<div class="col-md col-sm col-xs-12">
					<input class="form-control" placeholder="Enter Password Lama" name="password_lama"
						id="password_lama" type="password">
				</div>
				<?= form_error('password_lama', '<small class = "text-danger pl-3">', '</small>'); ?>
			</div>
			<div class="form-group">
				<label for="password_baru1" class="control-label col-md col-sm col-xs-12">Password Baru</label>
				<div class="col-md col-sm col-xs-12">
					<input class="form-control" placeholder="Enter Password Baru" name="password_baru1"
						id="password_baru1" type="password">
				</div>
				<?= form_error('password_baru1', '<small class = "text-danger pl-3">', '</small>'); ?>
			</div>
			<div class="form-group">
				<label for="password_baru2" class="control-label col-md col-sm col-xs-12">Konfirmasi Password
					Baru</label>
				<div class="col-md col-sm col-xs-12">
					<input class="form-control" placeholder="Konfirmasi Password" name="password_baru2"
						id="password_baru2" type="password">
				</div>
				<?= form_error('password_baru2', '<small class = "text-danger pl-3">', '</small>'); ?>
			</div>
			<div class="form-group">
				<div class="col-md col-sm col-xs-12 col-md-offset-3">
					<button type="submit" class="btn btn-success float-right" class="btn btn-info pull-left">Update
						Data</button>
				</div>
			</div>
		</form>
	</div>
	<!-- !Table Menu -->
</div>
<!-- /.container-fluid -->
