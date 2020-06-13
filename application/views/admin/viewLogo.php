



<div class="content mt-3">
<div class="animated fadeIn">
    <div class="row">

        <div class="col-md-12">
        
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Logo </strong>
                </div>
                <div class="card-body">
                <?php if($this->session->flashdata('pesan')) : ?>
                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                    <?php echo $this->session->flashdata('pesan') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                <?php endif ?>
                <div class="row">
                <form action="<?= base_url('admin/setting/updateLogo') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" value="<?= $logo->id ?>"  name="id">
                      <img src="<?= base_url() ?>assets/img/logo/<?= $logo->logo; ?>" class="ml-5 img-thumbnail" height="300" width="450" >   
                      <input type="file"  class="ml-5" name="logo">
                      
                </div>
                <button type="submit" class="btn btn-primary btn-sm ml-5">Update Logo</button>
                </form>

                </div>
                </div>
            </div>
        </div>


    </div>
</div><!-- .animated -->
</div><!-- .content -->


</div><!-- /#right-panel -->


