<div class="row ml-2" style="width: 800px;">
<form action="<?= base_url('admin/profile/update') ?>" method="post" enctype="multipart/form-data">
<div class="card col-lg-4">
	<img id="gambar_nodin" src="<?= base_url() ?>assets_admin/images/profile/<?= $profile->poto ?>">
	<input  id="preview_gambar" type="file"  name="poto" class="mb-2">
	<input type="hidden" name="id" value="<?= $profile->id ?>">
</div>
    <script src="<?=  base_url()?>/assets_admin/vendors/jquery/dist/jquery.js"></script>
<script>
    function bacaGambar(input){
        if(input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e){
                $('#gambar_nodin').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#preview_gambar').change(function(){
        bacaGambar(this);
    })
</script>
<div class="form-inline col-lg-5">
<table class="table mt-4">
<tr>
	<th>Name</th>
	<td>:</td>
	<td><input type="text" name="nama" value="<?= $profile->nama ?>" class="form-control"></td>
</tr>
<tr>
	<th>Username</th>
	<td>:</td>
	<td><input type="text" name="username" value="<?= $profile->username ?>" class="form-control"></td>
</tr>

<tr>
	<th>Role Vote</th>
	<td>:</td>
	<td><select name="role_vote" style="width: 100%" class="form-control">
		<?php if($profile->role_vote == 1){ ?>
			<option><?= $profile->role_vote ?></option>
			<option>2</option>
		<?php }else { ?>
			<option><?= $profile->role_vote ?></option>
			<option>1</option>
		<?php } ?>
	</select></td>
</tr>
<tr>
<td colspan="2"><button type="submit" class="btn btn-success"><i class="fa fa-check"> Simpan Perubahan</button></td>
<td><button type="reset" class="btn btn-danger">Reset</button></td>
</tr>
</form>
</table>
</div>
    <script src="<?=  base_url()?>/assets_admin/js/sweetalert.min.js"></script> 
<?php if($this->session->flashdata('alert')) : ?>
	<script>
	swal({
        title: "BERHASIL",
        text: "Profile diperbaharui",
        icon: "success",
        buttons: [false, "OK"],
      }).then(function() {
        window.location.href="<?= base_url('admin/profile') ?>";
      });
	</script>
<?php endif; ?>
