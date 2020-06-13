<div class="row" style="width: 800px;">
<div class="card col-lg-12">
 	<h2 class="mt-2">Ubah Password</h2>
<hr>
 	<div class="form-group">
 	<form action="<?= base_url('admin/setting/Changepass') ?>" method="post">
 	<input type="hidden" name="id" value="<?= $profile->id ?>">
 	<input type="password"  name="pass" placeholder="Entri New Password" class="form-control mb-2">
 	<?= form_error('pass','<div class="text-danger small">','</div>') ?>
 	<input type="password" name="pass1" placeholder="Re-Write New Password" class="form-control mt-3">
 	<button type="submit" class="btn btn-info mt-3"><i class="fa fa-unlock"></i> Simpan Password</button>
 	</div>
   <script src="<?=  base_url()?>/assets_admin/js/sweetalert.min.js"></script> 
 	<?php if($this->session->flashdata('alert')) : ?>
 		<script>
	swal({
        title: "BERHASIL",
        text: "<i class='fa fa-key'></i> password diperbarui",
        icon: "success",
        buttons: [false, "OK"],
      }).then(function() {
        window.location.href="<?= base_url('admin/setting/Changepass') ?>";
      });
 		</script>
 	<?php endif ?>
</div>
</div>